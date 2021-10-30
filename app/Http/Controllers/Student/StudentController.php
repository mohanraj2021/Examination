<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuestionModel;

class StudentController extends Controller
{
    public function index(){
        return view('student.home');
    }

    public function exam_portal(){

        $questions = QuestionModel::all();
        return view('student.exam_portal',compact('questions'));
    }
    public function success(Request $request){
        $marks = 0;
        $questions = QuestionModel::all();
        foreach($questions as $key => $question){
            $actual_answer = $question['answer'];
            $value = "answer".$key+1;
            // echo $value;
            $submited_answer = $request->$value;
            if($actual_answer == $submited_answer){
                $marks+=1;
            }
            else{
                $marks+=0;
            }
        }
        
        
        return view('student.success',compact('marks'));
    }
}
