@extends('main')

@section("menu")
    <a href="/internal-events/create" class="btn btn-primary">Create new</a>
    <a href="/internal-events" class="btn btn-primary">All</a>
@endsection


@section('content')
    <div class="container">
        <div class="row">
            @foreach($models as $model)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title h5">{{$model->title}}</p>
                            <p><strong>{{$model->shortdescription}}</strong></p>
                            {{$model->contenthtml}}
                        </div>
                        <div class="card-footer">
                            <a href="{{ url()->current() }}/edit/{{$model->id}}" class="btn btn-primary">Edit</a>
                            <form class="d-inline" method="post" action="{{ url()->current() }}/delete/{{$model->id}}">
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
