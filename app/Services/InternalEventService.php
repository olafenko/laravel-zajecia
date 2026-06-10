<?php

namespace App\Services;

use App\Models\InternalEvent;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class InternalEventService {


    public function getAll() : Collection
    {
        return InternalEvent::where('isactive','=',true)->get();
    }

    public function getById($id){
        return InternalEvent::find($id);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'title'=>'required',
            'link'=>'required',
            'contenthtml'=>'required',
            'eventdatetime'=>'required',
//            'iscancelled'=>'required',
//            'ispublic'=>'required',
        ]);

        $model = InternalEvent::find($id);
        $model->title = $request->input('title');
        $model->link = $request->input('link');
        $model->ispublic = $request->input('ispublic') == 'on' ? false : true;
        $model->iscancelled = $request->input('iscancelled') == 'on' ? false : true;
        $model->eventdatetime = $request->input('eventdatetime');
        $model->editdatetime = date('y-m-d h:i:s');
        $model->publishdatetime = $request->input('publishdatetime');
        $model->shortdescription = $request->input('shortdescription');
        $model->contenthtml = $request->input('contenthtml');
        $model->metadescription = $request->input('metadescription');
        $model->metatags = $request->input('metatags');
        $model->notes = $request->input('notes');
        $model->save();
    }

    public function createModel()
    {

        $model = new InternalEvent();
        $model->eventdatetime = date("Y-m-d");
        $model->publishdatetime = date("Y-m-d");

        return $model;
    }

    public function addToDb(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'link'=>'required',
            'contenthtml'=>'required',
            'eventdatetime'=>'required',
//            'iscancelled'=>'required',
//            'ispublic'=>'required',
        ]);


        $model = new InternalEvent();

        $model->title = $request->input('title');
        $model->link = $request->input('link');
        $model->ispublic = $request->input('ispublic') == 'on' ? false : true;
        $model->iscancelled = $request->input('iscancelled') == 'on' ? false : true;
        $model->eventdatetime = $request->input('eventdatetime');
        $model->editdatetime = date('y-m-d h:i:s');
        $model->publishdatetime = $request->input('publishdatetime');
        $model->shortdescription = $request->input('shortdescription');
        $model->contenthtml = $request->input('contenthtml');
        $model->metadescription = $request->input('metadescription');
        $model->metatags = $request->input('metatags');
        $model->notes = $request->input('notes');
        $model->isactive = true;
        $model->save();
        return redirect("internal-events");
    }

    public function delete($id){

        $model = InternalEvent::find($id);
        $model->isactive = false;
        $model->save();
        return redirect("internal-events");
    }


}
