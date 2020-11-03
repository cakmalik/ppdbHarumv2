@extends('auth.authlayout')
@section('form-control')
    <img style="height:80px; border-radius: 100%;display: block; margin-left: auto; margin-right: auto; margin-bottom: 10px;"
            src="{{asset('img/logo.png')}}"
            alt="">
            
    <form action="{{ route('login.admin') }}" method="post">
        @csrf
        <fieldset>
            <input id="email" type="text" class="inputform @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email / email">

            <input id="password" type="password" class="inputform @error('password') is-invalid @enderror" name="password"
                required autocomplete="current-password" placeholder="password">
            <button type="submit" class="button">{{ __('Login') }}</button>
        </fieldset>
    </form>
@endsection
