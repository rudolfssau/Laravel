@extends('includes.master')

@section('content')
@foreach($users as $user)
    <ul>
    {{$user->fname}}
    {{$user->lname}}
    </ul>
@endforeach
@endsection

@section('scripts')
<script>
</script>
@endsection
