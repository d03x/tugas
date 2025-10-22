@extends('layouts.auth')
@section('title', 'Login')
@section('form-title', 'Login');
@section('form-description', 'Selamat datang di aplikasi SI-KOS, Kelola kos anda disini')
@section('content')
    <form method="POST">
        @method('POST')
        @csrf
        <x-form-group label="Email" name="email" />
        <x-form-group label="Password" name="password" />
        <div class="form-group mt-4">
            <button class="btn col-12 btn-primary">Login</button>
        </div>
        <div class="login-form-footer">
            <div class="register-link">
                <span>Belum Punaya Akun?<a href="{{ route('register') }}">Register</a></span>
            </div>
        </div>
    </form>
@endsection
