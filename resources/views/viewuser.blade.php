@extends('includes.master')

@include('includes.validation')

@section('content')

<h1>{{$user->fname}} {{$user->lname}}</h1>

<form method="post" action="{{route('updateUser', $user->id)}}">
    @csrf
    <input type="text" name="fname" placeholder="First Name" value="{{$user->fname}}" required><br>
    <input type="text" name="lname" placeholder="Last Name" value="{{$user->lname}}" required><br>
    <input type="text" name="email" placeholder="Email" value="{{$user->email}}" required><br>
    <input type="text" name="password" placeholder="Password" value="{{$user->password}}" required><br>
    <button type="submit">Submit Changes</button>
</form>

<form action="{{route('deleteUser', $user->id)}}" method="post">
    @csrf
    <input type="text" name="userid" placeholder="Enter The User ID">
    <button type="submit">Delete User</button>
</form>

@endsection

@section('scripts')
<script>
</script>
@endsection
