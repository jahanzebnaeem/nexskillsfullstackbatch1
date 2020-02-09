@extends('app')
@section('title', 'Services Page')
@section('content')
    <ul>
        {{-- <li>Service 1</li>
        <li>Service 2</li> --}}
        @foreach ($services as $service)
        <li>{{$service}}</li>
        @endforeach
    </ul>
@endsection
