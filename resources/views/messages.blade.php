@extends('layout.layout')

@section('title')
    Messages
@endsection

@push('content')
    @includeIf('inc.message')
    @foreach($data as $val)
        <div class="alert alert-info">
            <h3>{{$val->name}}</h3>
            <h2>{{$val->email}}</h2>
            <small><p>{{$val->created_at}}</p></small>
            <a href="{{route('one-message',$val->id)}}"><button class="btn btn-primary">Edit</button></a>
        </div>
    @endforeach
@endpush
