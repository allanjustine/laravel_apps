<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    Home | <a href="{{url('/profile')}}">Profile</a>
    | <a href="{{url('/about')}}">About</a>
</body>
</html>
