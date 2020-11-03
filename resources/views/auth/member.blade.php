@extends('auth.authlayout')
@section('form-control')
    @push('logo')
    <br>
        <img style="height:80px; border-radius: 100%;display: block; margin-left: auto; margin-right: auto; margin-bottom: 10px;"
            src="{{asset('img/logo.png')}}"
            alt="">
      
        <div style="color:red">
            @if (session()->get('error'))
                {{ session('error') }}
            @endif
        </div>
    @endpush
    <form method="POST" action="{{ route('login.member') }}">
        @csrf
        <fieldset>
            <input type="text" class="inputform @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" autofocus placeholder="Input token here">
            <input type="hidden" name="password" value="password">
            <button type="submit" class="button">{{ __('Login') }}</button>
        </fieldset>
    </form>
@endsection
