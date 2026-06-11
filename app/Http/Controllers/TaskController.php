<?php

namespace App\Http\Controllers;

use App\Services\TaskService;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    private TaskService $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function index(){
        $models = $this->taskService->getAll();
        return view("task.index",["models" => $models,"title" => "Tasks"]);
    }

}
