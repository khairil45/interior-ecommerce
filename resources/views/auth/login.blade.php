@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="row d-flex justify-content-center align-items-center mt-5">
        <div class="col-md-8 d-flex flex-column justify-content-center">
            <h3 class="text-center font-weight-bold">CARI INTERIOR DENGAN <br> HARGA TERJANGKAU</h3>
            <p class="text-center">Silahkan masuk ke akun IKEA</p>
        </div>
        <div class="col-md-4 d-flex flex-column justify-content-center">
            <form action="{{ route('user.login') }}" method="POST" class="mr-4">

                @csrf
                <div class="form-group">
                    <label for="email">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email"
                        aria-describedby="email">
                </div>
                <div class="form-group mt-3">
                    <label for="password">Kata sandi <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Masukkan kata sandi" oninput="toggleVisibilityIcon()">
                        <a href="#" id="togglePassword"><i class="fa fa-eye" id="toggleIcon"></i></a>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100">Masuk</button>
                <div class="text-center font-weight-bold p-3">
                    <a href="{{ route('user.register') }}" style="text-decoration: none">Daftar Sekarang?</a>
                </div>


            </form>

        </div>
    </div>
@endsection

@section('script')
    <script>
        function toggleVisibilityIcon() {
            const passwordField = document.getElementById('password');
            const togglePasswordButton = document.getElementById('togglePassword');

            if (passwordField.value.length > 0) {
                togglePasswordButton.classList.remove('d-none');
            } else {
                togglePasswordButton.classList.add('d-none');
            }
        }

        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordField = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        });

        // Initialize the visibility icon based on the current input value
        document.addEventListener('DOMContentLoaded', function() {
            toggleVisibilityIcon(); // Check initial state
        });
    </script>
@endsection
