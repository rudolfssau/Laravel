@extends('includes.master')

@include('includes.validation')

@section('content')
<section id="form-signin-container">
    <form class="form-signin">
        <h1 class="form-signin-h1">Please Sign In!</h1>
        <input id="inputEmail" type="text" placeholder="Email Address" class="formControl">
        <input id="inputPassword" type="text" placeholder="Password" class="formControl">
        <label for="rememberME" id="forumRememberMe"><input type="checkbox" id="forumRememberMeCheckbox" value="remember-me"> Remember me</label>
        <button type="submit" id="forumSignInbutton">Sign In</button>
        <p id="formcopyrightText">© 2017-2021</p>
    </form>
</section>
@endsection

@section('scripts')
    <script>
    </script>
@endsection
