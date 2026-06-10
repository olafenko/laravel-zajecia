<?php

namespace App\Http\Controllers;

use App\Services\InternalEventService;
use Illuminate\Http\Request;

class InternalEventController extends Controller
{
    private InternalEventService $internalEventService;

    public function __construct(InternalEventService $internalEventService)
    {
        $this->internalEventService = $internalEventService;
    }
    public function index(){
        $models = $this->internalEventService->getAll();
        return view('internalEvent.index',["models" => $models,"title" =>"Internal events"]);
    }

    public function editView($id){
        $model = $this->internalEventService->getById($id);
        return view('internalEvent.edit',["model"=>$model,"title" =>"Internal events"]);
    }

    public function update(Request $request,$id)
    {
        $this->internalEventService->update($request,$id);
        return redirect("internal-events");
    }

    public function createView(){
        $model = $this->internalEventService->createModel();
        return view('internalEvent.create',['model'=>$model,'title'=>"Internal events"]);
    }

    public function addToDb(Request $request){
        $this->internalEventService->addToDb($request);
        return redirect("internal-events");
    }

}
