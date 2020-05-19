@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Movies</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Year</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($movies as $movie)
                                <tr>
                                <td>{{ $movie->name }}</td>
                                <td>{{ $movie->year }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
