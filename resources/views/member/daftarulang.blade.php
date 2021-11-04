@extends('template.app.layoutMember')
@section('title', 'Daftar ulang')

@isset($fund)

    @section('content')
        @php
        $total = intval($fund->gedung + $fund->perpustakaan + $fund->kegiatan + $fund->bukumedia + $fund->seragam + $fund->jilbab + $fund->ipp);
        @endphp

        <h4 class="text-center"><b> Rincian daftar ulang</b></h4>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Rincian</th>
                    <th scope="col">Biaya</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <th>Uang Gedung</th>
                    <td>@currency($fund->gedung)</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <th>Uang Perpustakaan</th>
                    <td>@currency($fund->perpustakaan)</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <th>Uang kegiatan</th>
                    <td>@currency($fund->kegiatan)</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <th>Uang buku dan media</th>
                    <td>@currency($fund->bukumedia) </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <th>Uang seragam</th>
                    <td>@currency($fund->seragam) </td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <th>Uang kegiatan</th>
                    <td>@currency($fund->kegiatan)</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <th>Uang jilbab</th>
                    <td>@currency($fund->jilbab) </td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <th>IPP Bulanan</th>
                    <td>@currency($fund->ipp) </td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <th>TOTAL</th>
                    <th>@currency($total)</th>
                </tr>
            </tbody>
        </table>

        {{-- <button class="btn btn-dark tombolmodal" id="tombolmodal">
    Alur daftar ulang
</button> --}}
        <a target="_blank" href="https://wa.me/+6281335122672" class="btn btn-dark mb-3" id="tombolmodal">
            Konfirmasi pembayaran
        </a>

        <div class="accordion border" id="alur">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Alur Daftar Ulang
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#alur">
                    <div class="accordion-body">
                        @isset($alurdaftarulang)
                            {!! $alurdaftarulang->value !!}
                        @endisset
                    </div>
                </div>
            </div>
        </div>

        <!-- modal -->
        {{-- <div id="modal" class="modal">
    <div class="modalcard">
        <div class="modaljudul">
            <p>Alur daftar ulang</p>
            <i id="tutup" class="fas fa-times-circle tutup"></i>
        </div>
        <div class="modalbody">

        </div>
    </div>
</div> --}}
    @endsection
@else

    @section('content')
        <div class="text-center display-5">
            <h4>Nominal daftar ulang <br> belum ditentukan oleh admin</h4>
        </div>
    @endsection

@endisset
