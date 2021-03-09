@extends('includes.master')

@section('content')

    <table>
        <thead>
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email</td>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    {{$user->fname}}
                </td>
                <td>
                    {{$user->lname}}
                </td>
                <td>
                    {{$user->email}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{$users->links()}}

@endsection

@section('scripts')
<script>
</script>
@endsection
