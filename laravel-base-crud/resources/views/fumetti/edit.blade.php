@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('fumetti.update', $fumetto['id']) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label for="title">Title</label>
                      <input value="{{ $fumetto['title'] }}" type="text" name="title" id="title" class="form-control" placeholder="Enter name of Comic">
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Description</label>
                      <input value="{{ $fumetto['description'] }}" type="text" name="description" class="form-control" id="description" placeholder="Enter comic description">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input value="{{ $fumetto['image'] }}" type="text" name="image" class="form-control" id="image" placeholder="Enter comic image">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input value="{{ $fumetto['price'] }}" type="text" name="price" class="form-control" id="price" placeholder="Enter comic price">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input value="{{ $fumetto['series'] }}" type="text" name="series" class="form-control" id="series" placeholder="Enter comic series">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input value="{{ $fumetto['sale_date'] }}" type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Enter comic sale date">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input value="{{ $fumetto['type'] }}" type="text" name="type" class="form-control" id="type" placeholder="Enter comic type">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection