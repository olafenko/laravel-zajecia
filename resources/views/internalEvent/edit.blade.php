@extends("main")
@section("content")

    <div class="container">
        <form method="POST" action="/internal-events/update/{{$model->id}}}">
            @csrf
            <div class="row gy-3">
                <div class="col-md-12 col-lg-6 col-xxl-4">
                    <div class="input-group">
                        <label class="input-group-text">
                            <i class="material-icons-round align-middle">label</i>
                            Title
                        </label>
                        <input name="title" class="form-control validate" value="{{$model->title}}">
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xxl-4">
                    <div class="input-group">
                        <label class="input-group-text">
                            <i class="material-icons-round align-middle">link</i>
                            Link
                        </label>
                        <input name="link" class="form-control validate" value="{{$model->link}}">
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xxl-4">
                    <div class="row">
                        <div class="col-auto">
                            <label class="form-check-label">
                                Public
                                <i class="material-icons-round align-middle">public</i>
                            </label>
                        </div>
                        <div class="form-switch form-check col-auto">
                            <input class="form-check-input validate" type="checkbox">
                            <label class="form-check-label">
                                <i class="material-icons-round align-middle">block</i>
                                Private
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xxl-4">
                    <div class="row">
                        <div class="col-auto">
                            <label class="form-check-label">
                                Cancelled
                                <i class="material-icons-round align-middle">cancel</i>
                            </label>
                        </div>
                        <div class="form-switch form-check col-auto">
                            <input class="form-check-input validate" type="checkbox">
                            <label class="form-check-label">
                                <i class="material-icons-round align-middle">public</i>
                                Active
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xxl-4">
                    <div class="input-group">
                        <label class="input-group-text">
                            <i class="material-icons-round palette-accent-text-color align-middle">event</i>
                            Event date
                        </label>


                        DO POPRAWIENIA TEN FORMULARZ ZNOWU :))

                        <input name="" class="form-control validate" type="date">
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xxl-4">
                    <div class="input-group">
                        <label class="input-group-text">
                            <i class="material-icons-round palette-accent-text-color align-middle">today</i>
                            Publish date
                        </label>
                        <input class="form-control validate" type="date">
                    </div>
                </div>
                <div class="col-sm-12">
                    <label class="form-label">
                        <i class="material-icons-round palette-accent-text-color align-middle">description</i>
                        Short description
                    </label>
                    <textarea class="form-control validate"></textarea>
                </div>
                <div class="col-sm-12">
                    <label class="form-label">
                        <i class="material-icons-round palette-accent-text-color align-middle">newspaper</i>
                        Content
                    </label>
                    <textarea class="form-control validate"></textarea>
                </div>
                <div class="col-sm-12">
                    <label class="form-label">
                        <i class="material-icons-round palette-accent-text-color align-middle">feed</i>
                        Meta description
                    </label>
                    <textarea class="form-control validate"></textarea>
                </div>
                <div class="col-sm-12">
                    <label class="form-label">
                        <i class="material-icons-round palette-accent-text-color align-middle">subtitles</i>
                        Meta tags
                    </label>
                    <textarea class="form-control validate"></textarea>
                </div>
                <div class="col-sm-12">
                    <label class="form-label">
                        <i class="material-icons-round palette-accent-text-color align-middle">notes</i>
                        Notes
                    </label>
                    <textarea class="form-control validate"></textarea>
                </div>
                <div class="col-sm-12">
                    <a class="btn btn-primary">Update </a>
                </div>
            </div>
        </form>
    </div>



@endsection
