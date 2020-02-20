@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List of Countries</div>
                <a href="/countries/create" class="btn btn-dark col-md-4">Add Country</a>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Country Name</th>
                        </tr>
                    </thead>
                    <tbody class="thead-light">
                        @forelse ($countries as $country)
                            <tr>
                                <td>{{ $country->name }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td>No country found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection

