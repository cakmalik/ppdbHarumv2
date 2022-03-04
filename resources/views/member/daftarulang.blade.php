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

        <a target="_blank" href="https://wa.me/+6285746507030" class="mb-3 btn btn-dark" id="tombolmodal">
            Konfirmasi pembayaran
        </a>
        <div class="modalbody">
            @isset($alurdaftarulang)
                {!! $alurdaftarulang->value !!}
            @endisset
        </div>
    @endsection
@else
    @section('content')
        <div class="text-center display-5">
            <h4>Nominal daftar ulang <br> belum ditentukan oleh admin</h4>
        </div>
    @endsection

@endisset
