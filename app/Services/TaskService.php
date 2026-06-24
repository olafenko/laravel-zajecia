<?php

namespace App\Services;
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class TaskService
{
    public function getAll() : Collection {

        return Task::where("IsActive","=",true)->get();
    }

    public function getById($id){
        return Task::find($id);
    }

    public function update(Request $request,$id){

        $request->validate([
            "Title"=>"required",
            "StartDateTime"=>"required",
            "Deadline"=>"required",
            "InternalEventId"=>"required",
            "Description"=>"required",
        ]);

        $model = Task::find($id);
        $model->Title = $request->input('Title');
        $model->StartDateTime = $request->input('StartDateTime');
        $model->Deadline = $request->input('Deadline');
        $model->Description = $request->input('Description');
        $model->Notes = $request->input('Notes');
        $model->InternalEventId = $request->input('InternalEventId');
        $model->IsDone = $request->input('IsDone') == "on" ? true : false;
        $model->EditDateTime = date('Y-m-d h:i:s');

        $model->save();
    }

    public function createModel(){

        $model = new Task();
        $model->StartDateTime = date("Y-m-d H:i:s");
        $model->Deadline = date("Y-m-d H:i:s");

        return $model;

    }

    public function addToDb(Request $request){

        $request->validate([
            "Title"=>"required",
            "StartDateTime"=>"required",
            "Deadline"=>"required",
            "InternalEventId"=>"required",
            "Description"=>"required",
        ]);

        $model = new Task();

        $model->Title = $request->input('Title');
        $model->StartDateTime = $request->input('StartDateTime');
        $model->Deadline = $request->input('Deadline');
        $model->Description = $request->input('Description');
        $model->Notes = $request->input('Notes');
        $model->InternalEventId = $request->input('InternalEventId');
        $model->IsDone = $request->input('IsDone') == "on" ? true : false;
        $model->EditDateTime = date('Y-m-d h:i:s');
        $model->CreationDateTime = date('y-m-d h:i:s');
        $model->IsActive = true;

        $model->save();
    }

    public function delete($id){


        $model = Task::find($id);
        $model->IsActive = false;
        $model->save();
    }







}
