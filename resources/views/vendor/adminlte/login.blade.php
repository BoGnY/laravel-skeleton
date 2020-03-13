@extends('adminlte::master')

@section('adminlte_css_pre')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css" integrity="sha256-fxxvNo/vOD88AQfrGh88D74wgYex47k9+sa3bWmCelI=" crossorigin="anonymous">
@endsection

@section('adminlte_css')
    @stack('css')
    @yield('css')
@endsection

@section('classes_body', 'login-page')

@php
    $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login');
    $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register');
    $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset');
    $dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home');
@endphp

@if (config('adminlte.use_route_url', false))
    @php
        $login_url = $login_url ? route($login_url) : '';
        $register_url = $register_url ? route($register_url) : '';
        $password_reset_url = $password_reset_url ? route($password_reset_url) : '';
        $dashboard_url = $dashboard_url ? route($dashboard_url) : '';
    @endphp
@else
    @php
        $login_url = $login_url ? url($login_url) : '';
        $register_url = $register_url ? url($register_url) : '';
        $password_reset_url = $password_reset_url ? url($password_reset_url) : '';
        $dashboard_url = $dashboard_url ? url($dashboard_url) : '';
    @endphp
@endif

@section('body')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ $dashboard_url }}">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">{{ __('adminlte::adminlte.login_message') }}</p>
                <form action="{{ $login_url }}" method="post">
                    {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @if ($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="{{ __('adminlte::adminlte.password') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @if ($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">{{ __('adminlte::adminlte.remember_me') }}</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">
                                {{ __('adminlte::adminlte.sign_in') }}
                            </button>
                        </div>
                    </div>
                </form>
                <p class="mt-2 mb-1">
                    <a href="{{ $password_reset_url }}">
                        {{ __('adminlte::adminlte.i_forgot_my_password') }}
                    </a>
                </p>
                @if ($register_url)
                    <p class="mb-0">
                        <a href="{{ $register_url }}">
                            {{ __('adminlte::adminlte.register_a_new_membership') }}
                        </a>
                    </p>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('adminlte_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.2/js/adminlte.min.js" integrity="sha256-Utchz0cr9Hjt+G0gl1YbXb8P2mNugSxobc9AXUfreHc=" crossorigin="anonymous"></script>
    @stack('js')
    @yield('js')
@endsection
