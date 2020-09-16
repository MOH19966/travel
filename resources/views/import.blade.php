<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            Laravel 6 Import Export Excel to database - Tuts Make
        </div>
        <div class="card-body">
            <form action="{{ url('import') }}" method="POST" name="importform"
               enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <a class="btn btn-info" href="{{ url('export') }}">
                 Export File</a>
                <button class="btn btn-success">Import File</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
