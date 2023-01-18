<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\BackDepartment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
// use Gate;
class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $departments = BackDepartment::all();
        return view("backend.department.index",compact("departments"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.department.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $department = new BackDepartment();
        if($request->hasFile('image')){
           $file = $request->file('image');
           $ext = $file->getClientOriginalExtension();
           $filename = time().'.'.$ext;
           $file->move('assets/uploads/department/',$filename);
           $department->image = $filename;
        }
        $department->name = $request->input('name');
        $department->slug = $request->input('slug');
        $department->description = $request->input('description');
        // $department->qty = $request->input('qty');
        $department->status = $request->input('status') == TRUE ? '1'  :'0';
        $department->trending = $request->input('trending') == TRUE ? '1'  :'0';
        $department->feature = $request->input('feature') == TRUE ? '1'  :'0';
        // $department->offer = $request->input('offer') == TRUE ? '1'  :'0';
        $department->meta_title = $request->input('meta_title');
        $department->meta_description = $request->input('meta_description');
        $department->meta_keywords = $request->input('meta_keywords');
 
        $department->save();
        return redirect(route('backenddepts.index'))->with('status',"Department Added Successfully"); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BackDepartment $backenddepts)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BackDepartment $backenddept)
    {
        
        if(Gate::denies('edit-user')){
            return redirect(route('backenddepts.index'));
        }
        return view("backend.department.edit", compact("backenddept"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BackDepartment $backenddept)
    {
        //this if statement is checking if an image is uploaded
        if($request->hasFile('image'))
        {
           $path = 'assets/uploads/department/'.$backenddept->image;
           if(File::exists($path))
           {
              File::delete($path);
           }
           $file = $request->file('image');
           $ext = $file->getClientOriginalExtension();
           $filename = time().'.'.$ext;
           $file->move('assets/uploads/department/',$filename);
           $backenddept->image = $filename;
        }
        $backenddept->name = $request->input('name');
        $backenddept->slug = $request->input('slug');
        $backenddept->description = $request->input('description');
        // $backenddept->qty = $request->input('qty');
        $backenddept->status = $request->input('status') == TRUE ? '1'  :'0';
        $backenddept->trending = $request->input('trending') == TRUE ? '1'  :'0';
        $backenddept->feature = $request->input('feature') == TRUE ? '1'  :'0';
        $backenddept->meta_title = $request->input('meta_title');
        $backenddept->meta_description = $request->input('meta_description');
        $backenddept->meta_keywords = $request->input('meta_keywords');

        $backenddept->update();
        return redirect(route('backenddepts.index'))->with('status',"Department Udated Successfully"); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BackDepartment $backenddept)
    {
        if(Gate::denies('delete-user')){
            return redirect(route('backenddepts.index'));      
        }
        $backenddept->delete();
      
        return redirect(route('backenddepts.index'))->with('danger',"Department Deleted Successfully"); 
    }
}
