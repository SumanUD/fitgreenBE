@extends('adminlte::auth.auth-page', ['auth_type' => 'login'])

@section('auth_logo')
    <a href="{{ url('/') }}">
        <img src="/vendor/adminlte/dist/img/AdminLTELogo.png" alt="Logo" height="50">
    </a>
@stop

@section('auth_body')
    <form action="{{ route('login') }}" method="POST">
        @csrf

        {{-- Email --}}
        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
            <div class="input-group-append">
                <div class="input-group-text"><span class="fas fa-envelope"></span></div>
            </div>
        </div>

        {{-- Password --}}
        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <div class="input-group-append">
                <div class="input-group-text"><span class="fas fa-lock"></span></div>
            </div>
        </div>

        {{-- Submit --}}
        <button type="submit" class="btn btn-primary btn-block">Sign In</button>

    </form>
@endsection

