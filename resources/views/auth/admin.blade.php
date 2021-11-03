@extends('auth.authlayout')
@section('form-control')
<section class="bg-primary overflow-hidden">
    <div class="
          row
          d-flex
          vh-100
          justify-content-center
          align-items-center
          p-2 p-md-0
        ">
        <div class="col-12 col-lg-4">
            <div class="p-5 bg-light rounded ">

                <img style="height:60px; border-radius: 100%;display: block; margin-left: auto; margin-right: auto; margin-bottom: 20px;"
                    src="{{ asset('img/logo.png') }}" alt="">

                <form action="{{ route('login.admin') }}" method="post">
                    @csrf
                    <fieldset>
                        <input id="email" type="text"
                            class="inputform @error('email') is-invalid @enderror form-control mb-3 text-center"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="e-mail">

                        <input id="password" type="password"
                            class="inputform @error('password') is-invalid @enderror form-control mb-3 text-center"
                            name="password" required autocomplete="current-password" placeholder="password">
                        <button type="submit" class="btn btn-primary w-100 ">{{ __('Login') }}</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection