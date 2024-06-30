@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column align-items-center justify-content-center text-center">
        <h2 class="display-1 font-weight-bold">404</h2>
        <h4 class="display-4 mb-4">Oops! Halaman Tidak Ditemukan.</h4>
        <a href="{{ url('products') }}" class="btn btn-primary mb-2">
            <i class="fa fa-arrow-left"></i> Kembali ke Produk
        </a>
        <p>
            Atau coba kembali ke <a href="{{ url('/') }}" class="link-primary">halaman utama</a>
        </p>
    </div>
@endsection
