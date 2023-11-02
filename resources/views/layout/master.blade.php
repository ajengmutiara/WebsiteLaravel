<!DOCTYPE html>
<html lang="en">
<head>
    
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
    @include('layout.header')
    @include('layout.navbar')
    @yield('content')

    <script src="{{ asset('js/data_peminjaman.js')}}"></script>
    
</body>
</html>