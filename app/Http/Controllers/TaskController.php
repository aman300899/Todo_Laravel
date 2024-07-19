<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;

class TaskController extends Controller
{
    function addtask(Request $req){
    $task=new Tasks();
    $task->id=null;
    $task->task=$req->item;
    $task->save();
    return redirect('/');
    }


    function showtask(){
        $tasks=tasks::all();
        return view('index',['tasks'=>$tasks]);
    }

    function deletetask($id){
        $tasks=Tasks::find($id);
        $tasks->delete();
        return redirect('/');
    }

}
