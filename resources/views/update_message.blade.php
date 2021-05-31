@extends('layout.layout')

@section('title')
    Update
@endsection

@once
    @push('content')
        <h1>Content page</h1><br>
        @includeIf('inc.message')
        <form action="{{route('update-contact-submit',$data->id)}}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Last name" value="{{$data->name}}" class="form-control"><br>
            <input type="email" name="email" placeholder="Enter email" value="{{$data->email}}" class="form-control"><br>
            <input type="password" name="password" placeholder="Enter password" value="{{$data->password}}" class="form-control"><br>
            <input type="text" name="subject" placeholder="Enter subject"value="{{$data->subject}}"  class="form-control"><br>
            <textarea name="message" placeholder="Enter message..." class="form-control">{{$data->message}}</textarea><br>
            <button type="submit" class="btn btn-outline-success">Send</button>
        </form>
    @endpush
@endonce

