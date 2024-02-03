<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  Form DPR RI Dapil 2  |  Form</title>
    <link rel="stylesheet" href="{{url('css/_form-class.css')}}">
    @stack('css')@vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>
<body>
    <main>
        @include('sweetalert::alert')
        @yield('content')
    </main>
    @livewireScripts
</body>
</html>