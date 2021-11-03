@extends('landingpage._layout')
@section('title', 'Login')
@section('judul', 'Login')
@section('content')
<section class="pt-0 pb-5 pt-md-5">
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-5">
                        <div class="p-5 bg-light rounded text-center">
                            <form action="{{ route('login.member') }}" method="POST">
                                @csrf
                                <h4 class="fw-bold mb-5">Masukkan Token</h4>
                                <input class="form-control form-control-lg mb-3 text-center" type="text"
                                    placeholder="Token pendaftaran" name="email" />
                                <input type="hidden" name="password" value="password">
                                <button type="submit" class="btn btn-primary py-2 w-100 mb-4">Login</button>

                                <a class="link-secondary d-inline-block mb-4" href="#"><small>jika token salah hubungi
                                        Admin SDIT Harum</small></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection