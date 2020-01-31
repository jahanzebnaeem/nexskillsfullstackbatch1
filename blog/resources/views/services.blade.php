@extends('app')
@section('title', 'Services Page')
@section('content')
    <h2>From Services</h2>
    <ul>
        {{-- <li>Service 1</li>
        <li>Service 2</li>
        <li>Service 3</li> --}}
        {{-- @foreach ($services as $service)
         <li>{{$service}}</li>
        @endforeach --}}
        @forelse ($nServices as $service)
            {{-- {{dd($service->name)}} --}}
            <li>{{ $service->name }}</li>
        @empty
            <li>No services available</li>
        @endforelse
    </ul>
@endsection
