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
        return view('internalEvent.index',["models" => $models]);
    }

}
