@extends('layout.layout')

@push('content')
    @includeIf('inc.message')
    <div class="alert alert-info">
        <h1>{{$data->name}}</h1>
        <h2>{{$data->subject}}</h2>
        <h3>{{$data->message}}</h3>
        <a href="{{route('update-contact',$data->id)}}"><button class="btn btn-warning">Update</button></a>
        <a href="{{route('delete-contact',$data->id)}}"><button class="btn btn-danger">Delete</button></a>
    </div>
@endpush
