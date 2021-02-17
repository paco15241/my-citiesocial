<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCitieSocial</title>

    <!-- Scripts -->
    <script src="{{ asset('js/frontend.js')}}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">

</head>
<body>
    @include('shared.frontend.navbar')
    @include('shared.frontend.top_menu')
    @yield('content')
    @include('shared.frontend.footer')
</body>
</html>
