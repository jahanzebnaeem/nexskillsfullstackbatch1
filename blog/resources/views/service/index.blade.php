@extends('app')
@section('title', 'Services Page')
@section('content')
    <h2>From Services</h2>
    <form action="/service" method="POST">
        <input type="text" name="name" id="name" autocomplete="off">
        @csrf
        <button type="submit">Add Service</button>
    </form>
    <p style="color:red;">@error('name') {{ $message }} @enderror</p>

    <ul>
        {{-- <li>Service 1</li>
        <li>Service 2</li>
        <li>Service 3</li> --}}
        {{-- @foreach ($services as $service)
         <li>{{$service}}</li>
        @endforeach --}}
        @forelse ($services as $service)
           {{-- {{dd($service->name)}} --}}
            <li>{{ $service->name }}</li>
        @empty
            <li>No services available</li>
        @endforelse
    </ul>
@endsection
