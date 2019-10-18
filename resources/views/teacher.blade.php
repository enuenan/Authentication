<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teacher</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <h3 style="test-align:center">This is {{ $userrole }} page</h3>
    <h1>{{ $username }}</h1>
    <p>{{ $useremail }}</p>

    <a href="{{ URL::to('timeline') }}"><button type="button" class="btn btn-success">Timeline</button></a>
    <a href="{{ URL::to('logout') }}"><button type="button" class="btn btn-danger">logout</button></a>

  </body>
</html>
