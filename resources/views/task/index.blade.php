@extends('main')

@section("menu")
    <a href="/" class="btn btn-primary">Home</a>
    <a href="/tasks/create" class="btn btn-primary">Create new</a>
    <a href="/tasks" class="btn btn-primary">All</a>
@endsection


@section("content")

    <div class="container">
        <div class="row">
            @foreach($models as $model)
                <div class="col-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between  align-items-center mb-2">
                                <h5 class="card-title mb-0">{{$model->Title}}</h5>
                                <span class="badge {{$model->IsDone ? 'bg-success' : 'bg-primary'}}">{{$model->IsDone ? 'DONE' : 'TODO'}}</span>
                            </div>
                            <h6 class="card-subtitle text-muted mb-4">Event: {{$model->internalEvent->Title}}</h6>

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="text-start">
                                    <small class="d-block">START</small>
                                    <strong>{{$model->StartDateTime}}</strong>
                                </div>
                                <div class="text-end">
                                    <small class="d-block">DEADLINE</small>
                                    <strong>{{$model->Deadline}}</strong>
                                </div>
                            </div>
                            <hr>
                            <div class="mt-3">
                                <p class="mb-2"><small class="text-muted d-block">DESCRIPTION:</small>{{$model->Description}}</p>
                                <p class="mb-0"><small class="text-muted d-block">NOTES:</small>{{$model->Notes}}</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ url()->current() }}/edit/{{$model->Id}}" class="btn btn-primary">Edit</a>
                            <form class="d-inline" method="post" action="{{ url()->current() }}/delete/{{$model->Id}}">
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            <div/>
            <div/>





@endsection

