<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

@include('navbar')
<div class = "container">
    <br>
        <center>
            <img src="https://cdn.shopify.com/s/files/1/0740/4855/products/UWDX-BOX-COVER.jpg?v=1461751846" class="img-responsive" height="250px" width="500px">
    <br>
    <h3> Cr. <a href="https://beziergames.com"> https://beziergames.com </a> </h3>
        </center>
</div>
@yield('Footer')

</body>
</html>
