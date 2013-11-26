<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Blanco - Your Bank and Load Depot</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
    <link rel = "stylesheet" type = "text/css" href = "css/style.css">
  </head>
  <body>
    <div class = "row header">
        <div class = "col-md-4 pull-left" id = "logo">
            Blanco
        </div>
        <div class = "col-md-8 pull-right">
            <ul id = "navigation">
                <li> <a href = "index">Home </a></li>
                <li> <a href = "login">Login</a></li>
                <li><a href = "#">What's This About</a></li>
                <li><a href = "#">About Us</a></li>
            </ul>
        </div>
    </div>
    <div class = "content">
        @yield('content')
    </div>
    <div class = "row footer">
        <a href = "index">Blanco</a> |
        <a href = "#">Development</a> |
        <a href = "#">Contact Us</a>
        <br>Copyright 2013 Powered by Globe Labs
    </div>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src= "js/bootstrap.min.js"> </script>
    <script src= "js/core.js"> </script>
  </body>
</html>
