@extends('template.app.member')

@isset($fund)
    @push('script-head')
        <style>
            .footer {
                position: fixed;
                right: 0;
                bottom: 0;
                width: 100%;
                background-color: #e67e22;
                color: white;
                text-align: center;
                /* padding-bottom: 10; */
                padding-top: 11px;
            }

        </style>
    @endpush
    @section('content')
        @php
        $total = intval($fund->gedung +$fund->perpustakaan + $fund->kegiatan +$fund->bukumedia +$fund->seragam
        +$fund->jilbab
        +$fund->ipp);
        @endphp
        <h3>Rincian daftar ulang</h3>
        <table>
            <tr>
                <th>Uang gedung</th>
                <td>@currency($fund->gedung) </td>
            </tr>
            <tr>
                <th>Uang perpustakaan</th>
                <td>@currency($fund->perpustakaan) </td>
            </tr>
            <tr>
                <th>Uang kegiatan</th>
                <td>@currency($fund->kegiatan) </td>
            </tr>
            <tr>
                <th>Uang buku dan media</th>
                <td>@currency($fund->bukumedia) </td>
            </tr>
            <tr>
                <th>Uang seragam</th>
                <td>@currency($fund->seragam) </td>
            </tr>
            <tr>
                <th>Uang jilbab</th>
                <td>@currency($fund->jilbab) </td>
            </tr>
            <tr>
                <th>IPP Bulanan</th>
                <td>@currency($fund->ipp) </td>
            </tr>

        </table>
        <div class="footer">
            <h3>Total @currency($total)</h3>
        </div>
        {{-- <a href="{{ url('/members/fitting_seragam') }}" class="button btn-sm dark"> Alur
            daftar ulang</a> --}}
        <button class="button btn-sm dark tombolmodal" id="tombolmodal">
            Alur daftar ulang
        </button>


        <!-- modal -->
        <div id="modal" class="modal">
            <div class="modalcard">
                <div class="modaljudul">
                    <p>Alur daftar ulang</p>
                    <i id="tutup" class="fas fa-times-circle tutup"></i>
                </div>
                <div class="modalbody">
                    <p>
                        1. Cek Rincian Daftar Ulang yang Tertera Sebelumnya, Jika ada yang kurang jelas bisa ditanyakan di
                        sekolah.
                    </p>
                    <p>
                        2. Lakukan Transfer dengan Nominal yang sesuai seperti di Rincian sebelumnya. Transfer ke No. Rek.
                        4441234007. a/n :
                        Sekolah Dasar Islam Terpadu Harapan Umat
                    </p>
                    <p>
                        3. Setelah melakukan transfer, Lakukan konfirmasi ke
                        nomor 081 335 122 672. dengan format sbb:
                    </p>
                    <p>
                        4. Batas Daftar Ulang Maksimal hingga 14 Maret 2020. bagi yang tidak melakukan daftar ulang hingga waktu
                        yang telah
                        di
                        tentukan, maka kami nyatakan mengundurkan diri.
                    </p>
                </div>
            </div>
        </div>
    @endsection
@else
    @push('script-head')
        <style type="text/css">
            .center {
                margin: 250px auto;
                width: 400px;
                align-content: center;
                text-align: center;
            }

        </style>
    @endpush
    @section('content')
        <div class="center">
            <h4>Nominal daftar ulang <br> belum ditentukan</h4>
        </div>
    @endsection

@endisset
