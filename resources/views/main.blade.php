<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        ' . $this->title .'
    </title>
    <link rel="stylesheet" href="/public/bootstrap.min.css" />
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>' . $this->title .'</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <form method="POST">
                <button type="submit" class="btn btn-primary">Create new</button>
                <button type="submit" class="btn btn-primary">All</button>
            </form>
        </div>
    </div>
</div>
<hr>

@yield('content')


<script src="/public/bootstrap.min.js"></script>
</body>
</html>
