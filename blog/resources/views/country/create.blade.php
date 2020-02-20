@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Country</div>
                    <form action="/countries" method="post">
                        <div>
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" autocomplete="off" value="{{ old('name') }}">
                            @error('name') <p style="color:red;"> {{ $message }} </p> @enderror
                        </div>
                        @csrf
                        <button type="submit">Add Country</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
