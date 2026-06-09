<?php

namespace App\Services;

use App\Models\InternalEvent;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class InternalEventService {


    public function getAll() : Collection
    {
        return InternalEvent::all();
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
            'iscancelled'=>'required',
            'ispublic'=>'required',
        ]);

        $model = InternalEvent::find($id);
        $model->title = $request->input('title');
        $model->link = $request->input('link');
        $model->ispublic = $request->input('ispublic') == 'on' ? true : false;
        $model->iscancelled = $request->input('iscancelled') == 'on' ? true : false;
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

}
