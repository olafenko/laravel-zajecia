<?php

namespace App\Services;

use App\Models\InternalEvent;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class InternalEventService {


    public function getAll() : Collection
    {
        return InternalEvent::where('IsActive','=',true)->get();
    }

    public function getById($id){
        return InternalEvent::find($id);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'Title'=>'required',
            'Link'=>'required',
            'ContentHTML'=>'required',
            'EventDateTime'=>'required',
//            'iscancelled'=>'required',
//            'ispublic'=>'required',
        ]);

        $model = InternalEvent::find($id);
        $model->Title = $request->input('Title');
        $model->Link = $request->input('Link');
        $model->IsPublic = $request->input('IsPublic') == 'on' ? false : true;
        $model->IsCancelled = $request->input('IsCancelled') == 'on' ? false : true;
        $model->EventDateTime = $request->input('EventDateTime');
        $model->EditDateTime = date('Y-M-d h:i:s');
        $model->PublishDateTime = $request->input('PublishDateTime');
        $model->ShortDescription = $request->input('ShortDescription');
        $model->ContentHTML = $request->input('ContentHTML');
        $model->MetaDescription = $request->input('MetaDescription');
        $model->MetaTags = $request->input('MetaTags');
        $model->Notes = $request->input('Notes');
        $model->save();
    }

    public function createModel()
    {

        $model = new InternalEvent();
        $model->EventDateTime = date("Y-m-d");
        $model->PublishDateTime = date("Y-m-d");

        return $model;
    }

    public function addToDb(Request $request)
    {
        $request->validate([
            'Title'=>'required',
            'Link'=>'required',
            'ContentHTML'=>'required',
            'EventDateTime'=>'required',
//            'iscancelled'=>'required',
//            'ispublic'=>'required',
        ]);


        $model = new InternalEvent();

        $model->Title = $request->input('Title');
        $model->Link = $request->input('Link');
        $model->IsPublic = $request->input('IsPublic') == 'on' ? false : true;
        $model->IsCancelled = $request->input('IsCancelled') == 'on' ? false : true;
        $model->EventDateTime = $request->input('EventDateTime');
        $model->EditDateTime = date('Y-M-d h:i:s');
        $model->PublishDateTime = $request->input('PublishDateTime');
        $model->ShortDescription = $request->input('ShortDescription');
        $model->ContentHTML = $request->input('ContentHTML');
        $model->MetaDescription = $request->input('MetaDescription');
        $model->MetaTags = $request->input('MetaTags');
        $model->Notes = $request->input('Notes');
        $model->IsActive = true;
        $model->save();
        return redirect("internal-events");
    }

    public function delete($id){

        $model = InternalEvent::find($id);
        $model->IsActive = false;
        $model->save();
        return redirect("internal-events");
    }


}
