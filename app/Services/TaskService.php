<?php

namespace App\Services;
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class TaskService
{
    public function getAll() : Collection {

        return Task::where("isactive","=",true)->get();
    }

    public function getById($id){
        return Task::find($id);
    }

    public function update(Request $request,$id){

        $request->validate([
            "title"=>"required",
            "startdatetime"=>"required",
            "deadline"=>"required",
            "internaleventid"=>"required",
            "description"=>"required",
        ]);

        $model = Task::find($id);
        $model->title = $request->input('title');
        $model->startdatetime = $request->input('startdatetime');
        $model->deadline = $request->input('deadline');
        $model->description = $request->input('description');
        $model->notes = $request->input('notes');
        $model->internaleventid = $request->input('internaleventid');
        $model->isdone = $request->input('isdone') == "on" ? true : false;
        $model->editdatetime = date('y-m-d h:i:s');

        $model->save();
    }







}
