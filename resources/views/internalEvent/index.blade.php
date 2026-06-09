@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($models as $model)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title h5">' . {{$model->title}} . '</p>
                            <p><strong>' . {{$model->shortdescription}} . '</strong></p>'
                            . {{$model->contenthtml}} . '
                        </div>
                        <div class="card-footer">
                            <a href="{{ url()->current() }}/edit/{{$model->id}}" class="btn btn-primary">Edit</a>
                            <a href="{{ url()->current() }}/delete/{{$model->id}}" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            @endforeach
        <div/>
    <div/>
@endsection
