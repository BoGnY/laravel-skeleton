@extends('adminlte::master')

@section('adminlte_css')
    @yield('css')
@endsection

@section('classes_body', 'login-page')

@php
    $password_email_url = View::getSection('password_email_url') ?? config('adminlte.password_email_url', 'password/email');
    $dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home');
@endphp

@if (config('adminlte.use_route_url', false))
    @php
        $password_email_url = $password_email_url ? route($password_email_url) : '';
        $dashboard_url = $dashboard_url ? route($dashboard_url) : '';
@endphp
@else
    @php
        $password_email_url = $password_email_url ? url($password_email_url) : '';
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
                <p class="login-box-msg">{{ __('adminlte::adminlte.password_reset_message') }}</p>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ $password_email_url }}" method="post">
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
                    <button type="submit" class="btn btn-primary btn-block btn-flat">
                        {{ __('adminlte::adminlte.send_password_reset_link') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('adminlte_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.2/js/adminlte.min.js" integrity="sha256-Utchz0cr9Hjt+G0gl1YbXb8P2mNugSxobc9AXUfreHc=" crossorigin="anonymous"></script>
    @stack('js')
    @yield('js')
@endsection
