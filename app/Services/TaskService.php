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




}
