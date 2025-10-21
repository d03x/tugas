@extends('layouts.base')

@section('body')
    <div class="container">
        <div class="col-md-4 pt-5 m-auto">
            <div class="mb-3">
                <h1 class="form-auth-title">
                    @yield('form-title')
                </h1>
                <span class="text-xs text-secondary">
                    @yield('form-description')
                </span>
            </div>
            @yield('content')
        </div>
    </div>
@endsection
