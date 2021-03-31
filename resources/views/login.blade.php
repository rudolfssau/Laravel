@extends('includes.master')

@include('includes.validation')

@section('content')
<section id="form-signin-container">
    <form class="form-signin">
        <h1 class="form-signin-h1">Please Sign In!</h1>
        <label for="">Email</label>
        <input type="text">
        <label for="">Password</label>
        <input type="text">
        <label for=""><input type="checkbox">Remember Me</label>
        <button type="submit"></button>
        <p>2019-2021</p>
    </form>
</section>
@endsection

@section('scripts')
    <script>
    </script>
@endsection
