@extends('template.app.member')
@section('content')
    <button class="button btn-sm tombolmodal" id="tombolmodal">Tabel ukuran</button>
    <hr>

    {{-- JIKA DATA BELUM ADA, MAKA TAMPIL FORM --}}
    @if (!isset($cek))
        <h4>Tentukan Ukuran </h4>
        @foreach ($errors->all() as $error)
            <li class="red">{{ $error }}</li>
        @endforeach
        <form action="{{ route('post.size') }}" method="POST">
            @csrf
            <label for="atasan">Ukuran Baju</label>
            <select name="atasan" id="atasan">
                <option selected disabled>Pilih</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
                <option>XXL</option>
            </select>
            <label for="bawahan">
                @if ($jk == 'p')
                    Ukuran rok
                @else
                    Ukuran Celana
                @endif
            </label>
            <select name="bawahan" id="bawahan">
                <option selected disabled>Pilih</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
                <option>XXL</option>
            </select>
            @if ($jk == 'p')
                <label for="jilbab">Ukuran Jilbab</label>
                <select name="jilbab" id="jilbab">
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

            <button class="button btn-sm" type="submit">Kirim</button>
        </form>
    @else
        {{-- JIKA DATA ADA, MAKA TAMPIL DATA UKURAN --}}
        <h4>Ukuran seragam saya</h4>
        <table>
            <tr>
                <th>Baju</th>
                <th>:</th>
                <td>{{ $cek->atasan }}</td>
            </tr>
            <tr>
                <th>
                    @if ($jk == 'p')
                        Rok
                    @else
                        Celana
                    @endif
                </th>
                <th>:</th>
                <td>{{ $cek->bawahan }}</td>
            </tr>
            @if ($jk == 'p')
                <tr>
                    <th>
                        Jilbab
                    </th>
                    <th>:</th>
                    <td>{{ $cek->jilbab }}</td>
                </tr>
            @endif
        </table>
        <i> NB: Jika ada revisi, Silahkan hubungi admin</i>
    @endif

    <div id="modal" class="modal">
        <div class="modalcard">
            <div class="modaljudul">
                <p>Tabel ukuran</p>
                <i id="tutup" class="fas fa-times-circle tutup"></i>
            </div>
            <div class="modalbody">
                <img src="{{ asset('img/ukuran.svg') }}" alt="">
                <table>
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




@endsection
