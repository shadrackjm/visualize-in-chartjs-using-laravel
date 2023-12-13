<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function loadGraphPage(){
        $student_data = StudentModel::all();

        // create labels & data variable to divide the data 
        $labels = [];
        $data = [];

        foreach ($student_data as $value) {
            $labels[] = $value['exam_name'];
            $data[] = $value['exam_marks'];
        }
        return view('graph-page')
        ->with('labels', $labels)
        ->with('data', $data);
    }
}
