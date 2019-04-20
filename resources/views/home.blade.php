<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service Ticket</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container">
    <hr>
    <h1>Welcome to the Service ticket system</h1>
    <hr>
    <br/>
    <h3>Please select an option</h3>
    <br />
    <ul>
    <li><a href='/index'>View</a></li>
    <li><a href='/create'>Add</a></li>
    <li><a href='/edit'>Update</a></li>
    </ul>
    @yield('main')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
