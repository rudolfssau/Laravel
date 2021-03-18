@extends('includes.master')

@section('content')

    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Actions</th>
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
                <td>
                    <a href="{{route('viewuser', $user->id)}}">View User</a>
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
