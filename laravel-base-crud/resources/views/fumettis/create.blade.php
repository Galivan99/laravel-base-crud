@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('fumettis.store') }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                      <label for="title">Title</label>
                      <input type="text" name="title" id="title" class="form-control" placeholder="Enter name of Comic">
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Description</label>
                      <input type="text" name="description" class="form-control" id="description" placeholder="Enter comic description">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="text" name="image" class="form-control" id="image" placeholder="Enter comic image">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" name="price" class="form-control" id="price" placeholder="Enter comic price">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" name="series" class="form-control" id="series" placeholder="Enter comic series">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Enter comic sale date">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" name="type" class="form-control" id="type" placeholder="Enter comic type">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection