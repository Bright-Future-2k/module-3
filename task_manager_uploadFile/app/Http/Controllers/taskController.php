<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class taskController extends Controller
{
    public function create (){
        return view('add');
    }
    public function store(Request $request){
        $task = new Task();
        $task->title = $request->inputTitle;
        $task->content = $request->inputContent;
        $task->due_date = $request->inputDueDate;

        $file = $request->inputFile;
        if (!$request->hasFile('inputFile')){
            $task->image = $file;
        }else{
            $fileName = $request->inputFileName;
        }
        $fileExtension =$file->getClientOriginalExtension();
        $newFileName = '$fileName.FileExtension';
        $task->image=$newFileName;
    }
}
