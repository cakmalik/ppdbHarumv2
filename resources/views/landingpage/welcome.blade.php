@extends('landingpage._layout')
@section('content')
    @push('login')
        <h3 class="lead text-center display-5 text-white">
            Selamat Datang di Website PPDB Online
        </h3>
        <h3 class="lead text-center display-6 text-white">
            SDIT Harapan Umat Jember
        </h3>
        <div class="
      justify-content-center
      d-flex
      mt-4
      mb-1
      align-item-center
    ">
            <a class="btn btn-outline-light btn-lg mt-md-3 me-2" href="{{ route('landingpage.panduan') }}"
                role="button">Panduan
                Pendaftaran</a>

            <a class="btn btn-light btn-lg mt-md-3 me-2" href="{{ '/login' }}" role="button">Login</a>
        </div>
    @endpush
    <section class="pt-0 pb-5 pt-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mt-4 mt-md-0">
                    <img alt="image" class="img-fluid" src="{{ asset('img/new/register.svg') }}" />
                </div>
                <div class="col-12 col-md-6 mt-3 mt-md-0">
                    <h3>Pendaftaran calon siswa</h3>
                    <p class="text-h2">
                        Setelah selesai melakukan pembayaran masukkan token pendaftaran di
                        form ini. jika belum mendapat token silahkan hubungi admin SDIT
                        Harum
                    </p>
                    <form method="POST" action="{{ route('login.member') }}">
                        @method('post')
                        @csrf
                        <div class="form-group">
                            <label for="token">Masukkan Token Pendaftaran</label>
                            <input class="form-control form-control-lg mt-2" type="text" id="token"
                                placeholder="Token Pendaftaran" name="email" />
                            <input type="hidden" name="password" value="password">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">
                            Registrasi
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
