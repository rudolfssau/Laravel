<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<form method="post" action="{{route('logout')}}">
    @csrf
    <button type="submit">Logout</button>
</form>
    @yield('content')
    @yield('scripts')
<script src="{{mix('js/app.js')}}"></script>
</body>
</html>

