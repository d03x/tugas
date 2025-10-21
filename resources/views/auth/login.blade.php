@extends('layouts.auth')
@section('title', 'Login')
@section('form-title', 'Login');
@section('form-description', 'Masukkan E-Mail / WhatsApp beserta kata sandi yang sudah terdaftar di SatuMomen')


@section('content')
    <form method="POST">
        @method('POST')
        @csrf
        <div class="form-group">
            <label class="form-label">Email</label>
            <input name="email" value="{{ old('email') }}" type="text"
                class="@error('email') is-invalid @enderror form-control">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
          <div class="form-group">
            <label class="form-label">Password</label>
            <input name="password" value="{{ old('password') }}" type="text"
                class="@error('password') is-invalid @enderror form-control">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
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
