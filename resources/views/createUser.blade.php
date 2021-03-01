@extends('includes.master')

@section('content')
    <form method="post" action="{{route('createUser')}}">
        @csrf
        <input type="text" name="fname" placeholder="First Name"><br>

        <input type="text" name="lname" placeholder="Last Name"><br>

        <input type="text" name="email" placeholder="Email"><br>

        <input type="text" name="password" placeholder="Password"><br>

        <button type="submit">Create User</button>

    </form>
@endsection

@section('scripts')
<script>
</script>
@endsection
