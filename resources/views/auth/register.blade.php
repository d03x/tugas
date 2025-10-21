@extends('layouts.auth')

@section('title', 'Register')
@section('form-title', 'Register');
@section('form-description', 'Masukkan E-Mail / WhatsApp beserta kata sandi yang sudah terdaftar di SatuMomen')
@section('content')
    <div class="form-group">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group">
        <label class="form-label">Password</label>
        <input type="password" class="form-control">
    </div>
    <div class="form-group mt-4">
        <button class="btn col-12 btn-primary">Login</button>
    </div>
    <div class="login-form-footer">
        <div class="register-link">
            <span>Sudah Punaya Akun?<a href="{{ route('login') }}">Login</a></span>
        </div>
    </div>
@endsection
