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
                            <form method="post">
                                <input type="hidden" name="id" value="' . {{$model->id}} . '">
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        <div/>
    <div/>
@endsection
