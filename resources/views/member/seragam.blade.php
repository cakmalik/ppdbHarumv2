@extends('template.app.layoutMember')

@section('content')
    <div class="accordion border" id="ukuran">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Ukuran Seragam
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#alur">
                <div class="accordion-body">
                    <div class="modalbody">
                        <img class="img-fluid" src="{{ asset('img/ukuran.svg') }}" alt="">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Info</th>
                                    <th>S</th>
                                    <th>M</th>
                                    <th>L</th>
                                    <th>XL</th>
                                    <th>XXL</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($uniforms as $uni)
                                    <tr>
                                        <td>{{ $uni->id }}</td>
                                        <td>{{ $uni->info }}</td>
                                        <td>{{ $uni->s }}</td>
                                        <td>{{ $uni->m }}</td>
                                        <td>{{ $uni->l }}</td>
                                        <td>{{ $uni->xl }}</td>
                                        <td>{{ $uni->xxl }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <button class="button btn-sm tombolmodal" id="tombolmodal">Tabel ukuran</button> --}}
    <hr>
    {{-- JIKA SUDAH BAYAR, MAKA TAMPILKAN --}}
    @isset($telahbayar)
        {{-- JIKA DATA BELUM ADA, MAKA TAMPIL FORM --}}
        @if (!isset($cek))
            <h4>Tentukan Ukuran </h4>
            @foreach ($errors->all() as $error)
                <li class="red">{{ $error }}</li>
            @endforeach
            <form action="{{ route('post.size') }}" method="POST">
                @csrf
                <label for="atasan">Ukuran Baju</label>
                <select class="form-select" name="atasan" id="atasan">
                    <option selected disabled>Pilih</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                    <option>XXL</option>
                </select>
                <label class="mt-3" for="bawahan">
                    @if ($jk == 'p')
                        Ukuran rok
                    @else
                        Ukuran Celana
                    @endif
                </label>
                <select class="form-select" name="bawahan" id="bawahan">
                    <option selected disabled>Pilih</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                    <option>XXL</option>
                </select>
                @if ($jk == 'p')
                    <label class="mt-3" for="jilbab">Ukuran Jilbab</label>
                    <select class="form-select" name="jilbab" id="jilbab">
                        <option selected disabled>Pilih</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                        <option>XXL</option>
                    </select>
                @else
                    <input type="hidden" name="jilbab" value="">
                @endif

                <button class="btn btn-primary mt-3" type="submit">Kirim</button>
            </form>
        @else
            {{-- JIKA DATA ADA, MAKA TAMPIL DATA UKURAN --}}
            <h4>Ukuran seragam saya</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Rincian</th>
                        <th>Ukuran</th>
                    </tr>
                </thead>
                <tr>
                    <th>1</th>
                    <th>Baju</th>
                    <td>{{ $cek->atasan }}</td>
                </tr>
                <tr>
                    <th>2</th>
                    <th>
                        @if ($jk == 'p')
                            Rok
                        @else
                            Celana
                        @endif
                    </th>

                    <td>{{ $cek->bawahan }}</td>
                </tr>
                @if ($jk == 'p')
                    <tr>
                        <th>3</th>
                        <th>
                            Jilbab
                        </th>

                        <td>{{ $cek->jilbab }}</td>
                    </tr>
                @endif
            </table>
            <i> NB: Jika ada revisi, Silahkan hubungi admin</i>
        @endif
    @else
        <div class="text-center display-5">
            <h4>Menu ini belum dapat diakses, <br> Silahkan melakukan daftar ulang terlebih dahulu</h4>
        </div>
    @endisset
@endsection
