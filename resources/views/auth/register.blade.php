@extends('layouts.app')

@section('title', 'Buat akun')

@section('content')
    <div class="row">
        <div class="col-md-5">
            <h3 class="text-center font-weight-bold">BUAT AKUN</h3>
            <p class="text-center">Silahkan buat akun IKEA</p>
        </div>
        <div class="col-md-7 d-flex flex-column justify-content-center">
            <form action="{{ route('register') }}" method="POST" class="mr-4">

                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone_number">Nomor handphone <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number"
                                placeholder="08123...">
                        </div>
                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox" name="is_whatsapp_connected"
                                value="1">
                            <small>Nomor terhubung dengan Whatsapp</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="example@email.com" aria-describedby="email">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Nama Lengkap <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Masukkan nama lengkap Anda">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Alamat <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="address" name="address"
                                placeholder="Masukkan alamat pengiriman">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="postal_code">Kode Pos <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="postal_code" name="postal_code"
                                placeholder="Masukkan kode pos">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="password">Kata sandi <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Masukkan kata sandi">
                        </div>
                        <div class="form-group">
                            <label for="password">Ulangi kata sandi <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="password" name="password_confirmation"
                                placeholder="Ulangi kata sandi">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100">Buat akun</button>
            </form>
        </div>
    </div>

@endsection
