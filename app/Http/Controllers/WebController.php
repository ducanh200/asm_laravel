<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
        $student = Student::orderBy("id","desc")->limit(session(""))->get();
        return view("welcome",[
            "student"=>$student
        ]);
    }

    public function create(){
        return view("create");
    }
    public function createStudent(){
        $student = Student::all();
        return redirect()->to("create") ;
    }
}
