<?php

namespace App\Http\Controllers;
use App\Subject;

use Illuminate\Http\Request;

use App\Http\Requests;

class SubjectController extends Controller
{
    public function get_page(){
        $data = Subject::all();


        return view('subject',[
            'title' => $data
        ]);

    }

    public function store_subject(Request $request){

        $title = $request['title'];
        $marks = $request['marks'];

        $subject = new Subject();
        $subject->title = $title;
        $subject->marks = $marks;

        $subject->save();

        return redirect()->route('get_subject');



    }
}
