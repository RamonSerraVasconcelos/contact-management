<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Management</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">

    <script src="{{ asset('public/js/bootstrap/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('public/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
</head>

<body>
    <div class="modal" tabindex="-1" role="dialog" id="myModal">
        <div class="d-flex justify-content-center">
            <div class="modal-content">
                <span class='info' id="info_mensagem"></span>
                <span data-dismiss="modal" class="close">&times;</span>
            </div>
        </div>
    </div>
    {{ View::make('partials/header') }}
    <script src="{{ asset('public/js/script.js') }}"></script>
    @yield('content')
    @if (isset($error))
        <script>
            mensagem("{{ "$error" }}")
        </script>
    @endif
</body>

</html>
