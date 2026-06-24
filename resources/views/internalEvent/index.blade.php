@extends('main')

@section("menu")
    <a href="/" class="btn btn-primary">Home</a>
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
                            <p class="card-title h5">{{$model->Title}}</p>
                            <p><strong>{{$model->ShortDescription}}</strong></p>
                            {{$model->ContentHTML}}
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
