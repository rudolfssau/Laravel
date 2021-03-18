@if(session()->has('success'))
    {{session()->get('success')}}
@endif
@if(session()->has('failed'))
    {{session()->get('failed')}}
@endif
@if($errors->any())
    <ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
@endif
