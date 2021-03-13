@extends('includes.master')

@section('content')

<h1>{{$user->fname}} {{$user->lname}}</h1>

<form method="post" action="">
    @csrf
    <input type="text" name="fname" placeholder="First Name" value="{{$user->fname}}" required><br>
    <input type="text" name="lname" placeholder="Last Name" value="{{$user->lname}}" required><br>
    <input type="text" name="email" placeholder="Email" value="{{$user->email}}" required><br>
    <input type="text" name="password" placeholder="Password" value="{{$user->password}}" required><br>
    <button type="submit">Submit Changes</button>
</form>

@endsection

@section('scripts')
<script>
</script>
@endsection
