<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Timeline</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <h1>Timeline</h1>
    <p>This is timeline page</p>
    <h1 style="color:#39d2f5">Hi</h1>
    <span>{{ $username }}</span> <br>
    <span>{{ $userrole }}</span> <br>
    @if ($userrole == 'teacher' )
      <a href="{{ URL::to('teacher') }}"><button type="button" class="btn btn-success">About</button></a>
    @elseif ($userrole == 'student')
      <a href="{{ URL::to('student') }}"><button type="button" class="btn btn-success">About</button></a>
    @endif
    <a href="{{ URL::to('logout') }}"><button type="button" class="btn btn-danger">logout</button></a>
  </body>
</html>
