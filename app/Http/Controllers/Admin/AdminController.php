<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\QuestionModel;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function exam(){
        return view('admin/exam');
    }

    public function add_question(Request $request){

        $question_model = new QuestionModel;
        $options = json_encode(array('option1'=>$request->options1,'option2'=>$request->options2,'option3'=>$request->options3,'option4'=>$request->options4));
        $question_model->name = $request->name;
        $question_model->opts = $options;
        $question_model->answer = $request->answer;
        $question_model->subject_name = $request->subject_name
        


        return view('admin/exam');
    }
}
