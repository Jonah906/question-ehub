<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Contact;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\BackDepartment;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {   $trending_question = Question::where("trending", "1")->get();
        $featured_department = BackDepartment::where("feature", "1")->get();
        return view("frontend.index",compact("trending_question","featured_department"));
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function about(){
        return view('frontend.about');
    }

    public function department()
    {
        $department = BackDepartment::where('status','0')->simplePaginate(9);
        return view('frontend.department',compact('department'));
    }
    public function viewdepartment($slug)
    {
        if(BackDepartment::where('slug', $slug)->exists())
        {
           $department = BackDepartment::where('slug',$slug)->first();
           $questions = Question::where('department_id',$department->id)->where('status','0')->simplePaginate(9);
           return view('frontend.question.index',compact('department','questions'));
        }else{
            return redirect('/')->with('status', 'Slug does not exist');
        }
    }
    public function questionview($dept_slug,$que_slug)
    {
        if(BackDepartment::where('slug', $dept_slug)->exists()){
            if(Question::where('slug', $que_slug)->exists())
            {
                $question = Question::where('slug', $que_slug)->first();
                return view('frontend.question.view',compact('question'));
            }else{
                return redirect('/')->with('status','Link was broken');
            }
        }else{
            return redirect('/')->with('status','No such Department found');
        }
    }
    public function download($que_slug)
    {
        $file = public_path()."/assets/uploads/question/$que_slug";

        $headers = array(
            'content-Type: application/PNG'
        );

        return response()->download($file, 'question.png', $headers);

    }
    public function savecontact(Request $request)
    {
      $contact = new Contact();
      $contact->message = $request->input('message');
      $contact->name = $request->input('name');
      $contact->email = $request->input('email');
      $contact->phone = $request->input('phone');

      $contact->save();
      return redirect(url('/contact'))->with('status',"Comment Submited Successfully");
    }
}
