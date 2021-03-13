@extends('includes.master')

@include('includes.validation')

@section('content')
    <form method="post" action="{{route('createUser')}}">
        @csrf
        <input type="text" name="fname" placeholder="First Name" value="{{old('fname')}}" required><br>

        <input type="text" name="lname" placeholder="Last Name" value="{{old('lname')}}" required><br>

        <input type="text" name="email" placeholder="Email" value="{{old('email')}}" required><br>

        <input type="text" name="password" placeholder="Password" value="{{old('password')}}" required><br>

        <button type="submit">Create User</button>

    </form>
@endsection

@section('scripts')
<script>
</script>
@endsection
