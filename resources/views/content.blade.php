@extends('layout.layout')

@section('title')
    Content
@endsection

@once
    @push('content')
        <h1>Content page</h1><br>
        @includeIf('inc.message')
        <form action="{{route('contact-form')}}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Last name" class="form-control"><br>
            <input type="email" name="email" placeholder="Enter email" class="form-control"><br>
            <input type="password" name="password" placeholder="Enter password" class="form-control"><br>
            <input type="text" name="subject" placeholder="Enter subject" class="form-control"><br>
            <textarea name="message" placeholder="Enter message..." class="form-control"></textarea><br>
            <button type="submit" class="btn btn-success">Send</button>
        </form>
    @endpush
@endonce

