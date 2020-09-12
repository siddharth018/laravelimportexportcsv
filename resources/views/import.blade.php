<!DOCTYPE html>
<html>
<head>
    <title>Laravel 7</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Laravel 7
            
        </div>
        <div class="card-body">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>    
            <strong>{{ $message }}</strong>
        </div>
        @endif
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import User Data</button>
                <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
                <a class="btn btn-success" href="{{ route('userList') }}"> User List</a>
            </form>
        </div>
    </div>
</div>
   
</body>
</html>