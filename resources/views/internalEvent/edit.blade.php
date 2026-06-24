@extends("main")

@section("menu")
    <a href="/" class="btn btn-primary">Home</a>
    <a href="/internal-events/create" class="btn btn-primary">Create new</a>
    <a href="/internal-events" class="btn btn-primary">All</a>
@endsection

@section("content")

    <div class="container">
        <form method="POST" action="/internal-events/update/{{$model->Id}}">
            @csrf
            <div class="row gy-3">
                <div class="col-md-12 col-lg-6 col-xxl-4">
                    <div class="input-group">
                        <label class="input-group-text">
                            <i class="material-icons-round align-middle">label</i>
                            Title
                        </label>
                        <input name="Title" class="form-control validate" value="{{$model->Title}}">
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xxl-4">
                    <div class="input-group">
                        <label class="input-group-text">
                            <i class="material-icons-round align-middle">link</i>
                            Link
                        </label>
                        <input name="Link" class="form-control validate" value="{{$model->Link}}">
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
                            <input class="form-check-input validate" type="checkbox" name="IsPublic" {{!$model->IsPublic ? "checked" : ""}}>
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
                            <input class="form-check-input validate" type="checkbox" name="IsCancelled" {{!$model->IsCancelled ? "checked" : ""}}>
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
                        <input name="EventDateTime" class="form-control validate" type="datetime-local" value="{{$model->EventDateTime}}">
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xxl-4">
                    <div class="input-group">
                        <label class="input-group-text">
                            <i class="material-icons-round palette-accent-text-color align-middle">today</i>
                            Publish date
                        </label>
                        <input name="PublishDateTime" class="form-control validate" type="datetime-local" value="{{$model->PublishDateTime}}">
                    </div>
                </div>
                <div class="col-sm-12">
                    <label class="form-label">
                        <i class="material-icons-round palette-accent-text-color align-middle">description</i>
                        Short description
                    </label>
                    <textarea name="ShortDescription" class="form-control validate">{{$model->ShortDescription}}</textarea>
                </div>
                <div class="col-sm-12">
                    <label class="form-label">
                        <i class="material-icons-round palette-accent-text-color align-middle">newspaper</i>
                        Content
                    </label>
                    <textarea name="ContentHTML" class="form-control validate">{{$model->ContentHTML}}</textarea>
                </div>
                <div class="col-sm-12">
                    <label class="form-label">
                        <i class="material-icons-round palette-accent-text-color align-middle">feed</i>
                        Meta description
                    </label>
                    <textarea name="MetaDescription" class="form-control validate">{{$model->MetaDescription}}</textarea>
                </div>
                <div class="col-sm-12">
                    <label class="form-label">
                        <i class="material-icons-round palette-accent-text-color align-middle">subtitles</i>
                        Meta tags
                    </label>
                    <textarea name="MetaTags" class="form-control validate">{{$model->MetaTags}}</textarea>
                </div>
                <div class="col-sm-12">
                    <label class="form-label">
                        <i class="material-icons-round palette-accent-text-color align-middle">notes</i>
                        Notes
                    </label>
                    <textarea name="Notes" class="form-control validate">{{$model->Notes}}</textarea>
                </div>
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
