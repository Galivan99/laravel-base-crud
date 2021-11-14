@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4 mb-4">Tutti i fumetti</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Series</th>
                            <th scope="col">Sale Date</th>
                            <th scope="col">Type</th>
                            <th scope="col">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fumetti as $fumetto)
                        <tr>
                            <th scope="row">{{ $fumetto['id'] }}</th>
                            <td>{{ $fumetto['title'] }}</td>
                            <td>{{ $fumetto['price'] }}</td>
                            <td>{{ $fumetto['series'] }}</td>
                            <td>{{ $fumetto['sale_date'] }}</td>
                            <td>{{ $fumetto['type'] }}</td>
                            <td>
                                <a href="{{ route('fumettis.show', $fumetto['id']) }}"
                                    class="btn btn-info">
                                    Details
                                </a>
                                <a href="{{ route('fumettis.edit', $fumetto['id']) }}"
                                    class="btn btn-warning">
                                    Modify
                                </a>
                                <form method="post" action="{{ route('fumettis.destroy', $fumetto['id']) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>   
    </div>
@endsection