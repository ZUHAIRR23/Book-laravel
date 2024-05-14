@extends('layout.parent')

@section('title', 'Home')

@section('content')
    <div class="container py-3">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1>Book Self</h1>
                <p class="lead">Mau buat buku????. Coba aja klik tombol di bawah</p>
                <a href="{{ route('category.index') }}" class="btn btn-primary btn-lg">Explore Categories</a>
            </div>
        </div>
    </div>
@endsection
