<!DOCTYPE html>
<html lang="en">
<head>
  <title>User List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>User List</h2>
  <!-- <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a> -->
  <a class="btn btn-success" href="{{ url('importExportView') }}">Import</a>
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <td> {{ $user->id }}</td>
        <td> {{ $user->name }}</td>
        <td> {{ $user->email }}</td>
      </tr>
    @endforeach
    </tbody>
    
  </table>
  {{ $users->links() }}
</div>

</body>
</html>




