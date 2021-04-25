@extends('includes.master')

@section('content')

<section id="form-signin-container">
    <form action="{{route('signin')}}" method="post" class="form-signin">
        @csrf
        <h1 class="form-signin-h1">Please Sign In</h1>
        <input name="email" id="inputEmail" type="text" placeholder="Email Address" class="formControl" required autofocus>
        <input name="password" id="inputPassword" type="text" placeholder="Password" class="formControl"required>
        <label for="rememberME" id="forumRememberMe"><input type="checkbox" id="forumRememberMeCheckbox" value="remember-me"> Remember me</label>
        <button type="submit" id="forumSignInbutton">Sign In</button>
        @include('includes.validation')
        <p id="formcopyrightText">© 2017-2021</p>
    </form>
</section>
@endsection

@section('scripts')
    <script>
    </script>
@endsection
