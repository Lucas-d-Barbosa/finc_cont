<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/basico.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <title>
        @yield('title')
    </title>
</head>
<body class="body-b" style="">
    @include('app.layout._partials.topo')
    @yield('conteudo')
    @include('app.layout._partials.footer')
    
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>