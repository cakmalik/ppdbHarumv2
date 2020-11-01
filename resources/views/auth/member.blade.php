@extends('auth.authlayout')
@section('form-control')
    @push('logo')
        <img style="height:60px; border-radius: 100%;display: block; margin-left: auto; margin-right: auto;"
            src="https://lh3.googleusercontent.com/-k1vjZQGneKU/AAAAAAAAAAI/AAAAAAAAAAA/aE921UQFSd4/s40-c-k-mo/photo.jpg"
            alt="">
        <hr>
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
