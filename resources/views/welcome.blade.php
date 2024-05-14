@extends('layout.parent')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1>Book Self</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua.</p>
                <a href="{{ route('category.index') }}" class="btn btn-primary btn-lg">Explore Categories</a>
            </div>
        </div>
    </div>
@endsection
