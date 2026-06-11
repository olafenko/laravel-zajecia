@extends("main")

@section("menu")
    <a href="/" class="btn btn-primary">Home</a>
    <a href="/tasks/create" class="btn btn-primary">Create new</a>
    <a href="/tasks" class="btn btn-primary">All</a>
@endsection

@section("content")

    <div class="container mt-4">
        <form method="POST" action="/tasks/add-to-db/{{$model->id}}">
            @csrf
            <div class="card shadow-sm">
                <div class="card-header bg-transparent pt-3 pb-2 border-bottom">
                    <h5 class="card-title">
                        <i class="material-icons-round align-middle me-1">edit</i>
                        Edit Task
                    </h5>
                </div>
                <div class="card-body p-4">
                    <div class="row gy-4 gx-5">
                        <div class="col-5">
                            <div class="d-flex flex-column gap-4">

                                <div>
                                    <label class="form-label small fw-bold mb-2 d-flex align-items-center">
                                        <i class="material-icons-round palette-accent-text-color align-middle fs-6">label</i>
                                        TITLE
                                    </label>
                                    <input class="form-control validate" name="title">
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <label class="form-label small fw-bold mb-2 d-flex align-items-center">
                                            <i class="material-icons-round palette-accent-text-color align-middle fs-6">today</i>
                                            START DATE
                                        </label>
                                        <input class="form-control validate" type="datetime-local" name="startdatetime">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label small fw-bold mb-2 d-flex align-items-center">
                                            <i class="material-icons-round palette-accent-text-color align-middle fs-6">event</i>
                                            DEADLINE
                                        </label>
                                        <input class="form-control validate" type="datetime-local" name="deadline">
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <div>
                                        <label class="form-label small fw-bold mb-2 d-flex align-items-center">
                                            <i class="material-icons-round palette-accent-text-color align-middle fs-6">event</i>
                                            EVENT
                                        </label>
                                        <select name="internaleventid"> <option value="" selected disabled hidden>Select event</option>
                                            @foreach($internalEvents as $event)
                                                <option value="{{$event->id}}">{{$event->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="d-flex flex-column align-items-center">
                                        <label class="form-check-label me-2 d-flex align-items-center">
                                            <i class="material-icons-round align-middle">check</i>
                                            Done
                                        </label>
                                        <div class="form-switch form-check mb-0">
                                            <input class="form-check-input validate" type="checkbox" name="isdone">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-7">
                            <label class="form-label small fw-bold mb-2  d-flex align-items-center">
                                <i class="material-icons-round palette-accent-text-color align-middle fs-6">feed</i>
                                DESCRIPTION
                            </label>
                            <textarea class="form-control validate mb-4" name="description" rows="4"></textarea>
                            <label class="form-label small fw-bold mb-2  d-flex align-items-center">
                                <i class="material-icons-round palette-accent-text-color align-middle fs-6">notes</i>
                                NOTES
                            </label>
                            <textarea class="form-control validate" name="notes" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer py-3 d-flex justify-content-end align-items-center mb-0">
                    <button class="btn btn-primary px-4" type="submit">Create</button>
                </div>
            </div>
        </form>
    </div>
@endsection
