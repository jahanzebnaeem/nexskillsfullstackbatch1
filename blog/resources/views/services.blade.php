@extends('app')
@section('title', 'Services Page')
@section('content')
    <form action="/services" method="post">
        <input type="text" name="name" id="name" autocomplete="off">
        @csrf
        <button type="submit">Add Service</button>
    </form>
    <p style="color: red;">@error('name') {{$message}} @enderror</p>
    <ul>
        {{-- <li>Service 1</li>
        <li>Service 2</li> --}}
        {{-- @foreach ($services as $service)
            <li>{{$service}}</li>
        @endforeach --}}
        @forelse ($services as $service)
            <li>{{$service->name}}</li>
        @empty
            <li>No services to be displayed</li>
        @endforelse
    </ul>
@endsection
