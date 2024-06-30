@extends('layouts.app')

@section('title', 'Login Admin')

@section('content')
    <div class="d-flex justify-content-center align-items-center mt-5">
        <div class="d-flex flex-column justify-content-center border rounded p-4">
            <h3 class="text-center font-weight-bold mb-4">Login Admin</h3>
            <form action="{{ route('admin.login') }}" method="POST">

                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Masukkan password">
                </div>
                <button type="submit" class="btn btn-success w-100">Masuk</button>
            </form>
        </div>
    </div>

@endsection
