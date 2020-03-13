@extends('adminlte::master')

@section('adminlte_css')
    @yield('css')
@endsection

@section('classes_body', 'login-page')

@php
    $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset');
    $dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home');
@endphp

@if (config('adminlte.use_route_url', false))
    @php
        $password_reset_url = $password_reset_url ? route($password_reset_url) : '';
        $dashboard_url = $dashboard_url ? route($dashboard_url) : '';
    @endphp
@else
    @php
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
                <p class="login-box-msg">{{ trans('adminlte::adminlte.password_reset_message') }}</p>
                <form action="{{ $password_reset_url }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{ trans('adminlte::adminlte.email') }}" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @if ($errors->has('email'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="{{ trans('adminlte::adminlte.password') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @if ($errors->has('password'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                               placeholder="{{ trans('adminlte::adminlte.retype_password') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @if ($errors->has('password_confirmation'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-flat">
                        {{ trans('adminlte::adminlte.reset_password') }}
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
