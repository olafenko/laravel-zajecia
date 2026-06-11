<?php

namespace App\Http\Controllers;

use App\Services\InternalEventService;
use App\Services\TaskService;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    private TaskService $taskService;
    private InternalEventService $internalEventService;

    public function __construct(TaskService $taskService,InternalEventService $internalEventService)
    {
        $this->taskService = $taskService;
        $this->internalEventService = $internalEventService;
    }

    public function index(){
        $models = $this->taskService->getAll();
        return view("task.index",["models" => $models,"title" => "Tasks"]);
    }

    public function editView( $id){
        $model = $this->taskService->getById($id);
        $internalEvents = $this->internalEventService->getAll();
        return view("task.edit",["model" => $model,"internalEvents" => $internalEvents,"title" => "Edit task"]);
    }

    public function update(Request $request, $id){
        $this->taskService->update($request,$id);
        return redirect("/tasks");
    }

    public function createView(){
        $model = $this->taskService->createModel();
        $internalEvents = $this->internalEventService->getAll();
        return view("task.create",["model" => $model,"internalEvents" => $internalEvents,"title" => "Create new task"]);
    }

    public function addToDb(Request $request){
       $this->taskService->addToDb($request);
       return redirect("/tasks");
    }

    public function delete($id){
        $this->taskService->delete($id);
        return redirect("tasks");
    }

}
