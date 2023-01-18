<?php

namespace App\Http\Controllers\Backend;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\BackDepartment;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $questions = Question::all();
        return view("backend.question.index",compact("questions"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $department = BackDepartment::all();
        return view("backend.question.create",compact("department"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Question $question)
    {
        //
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/question/',$filename);
            $question->image = $filename;
        }
        $question->department_id = $request->input('department_id');
        $question->name = $request->input('name');
        $question->slug = $request->input('slug');
        $question->small_description = $request->input('small_description');
        $question->description = $request->input('description');
        $question->original_price = $request->input('original_price');
        $question->selling_price = $request->input('selling_price');
        $question->unit = $request->input('unit');
        // $question->shipping = $request->input('shipping');
        $question->level = $request->input('level');
        $question->status = $request->input('status') == TRUE ? '1'  :'0';
        $question->feature = $request->input('feature') == TRUE ? '1'  :'0';
        $question->trending = $request->input('trending') == TRUE ? '1'  :'0';
        $question->meta_title = $request->input('meta_title');
        $question->meta_description = $request->input('meta_description');
        $question->meta_keywords = $request->input('meta_keywords');

        $question->save();
        return redirect(route('questions.index'))->with('status',"Question Added Successfully"); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        if(Gate::denies('edit-user')){
            return redirect(route('questions.index'));
        }
        return view("backend.question.edit",compact("question"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //this if statement is checking if an image is uploaded
        if($request->hasFile('image'))
        {
            $path = 'assets/uploads/question/'.$question->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/question/',$filename);
            $question->image = $filename;
        }
        $question->department_id = $request->input('department_id');
        $question->name = $request->input('name');
        $question->slug = $request->input('slug');
        $question->small_description = $request->input('small_description');
        $question->description = $request->input('description');
        $question->original_price = $request->input('original_price');
        $question->selling_price = $request->input('selling_price');
        $question->unit = $request->input('unit');
        // $question->shipping = $request->input('shipping');
        $question->level = $request->input('level');
        $question->status = $request->input('status') == TRUE ? '1'  :'0';
        $question->feature = $request->input('feature') == TRUE ? '1'  :'0';
        $question->trending = $request->input('trending') == TRUE ? '1'  :'0';
        $question->meta_title = $request->input('meta_title');
        $question->meta_description = $request->input('meta_description');
        $question->meta_keywords = $request->input('meta_keywords');

        $question->update();
        return redirect(route('questions.index'))->with('status',"Question Updated Successfully"); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        if(Gate::denies('delete-user')){
            return redirect(route('questions.index'));      
        }
        $question->delete();
      
        return redirect(route('questions.index'))->with('danger',"Question Deleted Successfully"); 
    }
}
