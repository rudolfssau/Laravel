<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @yield('content')
    @yield('scripts')
<script src="{{mix('js/app.js')}}"></script>
</body>
</html>

