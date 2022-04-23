<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Management</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('js/bootstrap/jquery-3.6.0.js') }}">
    <link rel="stylesheet" href="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</head>

<body>
    {{ View::make('partials/header') }}
    @yield('content')
</body>

</html>
