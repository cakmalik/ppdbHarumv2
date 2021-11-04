@extends('template.app.layoutMember')
@section('title', 'Data siswa')
@section('content')

    <table class="table">
        <thead>
            <tr>
                <td>form</td>
                <td>Keterangan</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Token</td>
                <th>{{ $data->token }}</th>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <th>{{ $data->full_name }}</th>
            </tr>
            <tr>
                <td>Panggilan</td>
                <th>{{ $data->nick_name }}</th>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <th>{{ $data->school_origin }}</th>
            </tr>
            <tr>
                <td>Jenis kelamin</td>
                <th>{{ $data->gender }}</th>
            </tr>
            <tr>
                <td>Tempat, Tgl lahir</td>
                <th>{{ $data->place_birth . ', ' . $data->date_birth }}</th>
            </tr>
            <tr>
                <td>Kebutuhan Khusus</td>
                <th>{{ $data->special_needs }}</th>
            </tr>
            <tr>
                <td>Jumlah Saudara Knadung</td>
                <th>{{ $data->jumlah_saudara }}</th>
            </tr>
            <tr>
                <td>Tinggal bersama</td>
                <th>{{ $data->living }}</th>
            </tr>
            <tr>
                <td>Alamat</td>
                <th>{{ $data->address }}</th>
            </tr>
            <tr>
                <td>RT/RW</td>
                <th>{{ $data->rtrw }}</th>
            </tr>
            <tr>
                <td>Kode Pos</td>
                <th>{{ $data->postalcode }}</th>
            </tr>
            <tr>
                <td>Desa</td>
                <th>{{ $data->desa }}</th>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <th>{{ $data->kecamatan }}</th>
            </tr>
            <tr>
                <td>Kabupaten/Kota</td>
                <th>{{ $data->kota }}</th>
            </tr>
            <tr>
                <td>Provinsi</td>
                <th>{{ $data->provinsi }}</th>
            </tr>
            <tr>
                <td>Nama Ayah</td>
                <th>{{ $data->dad }}</th>
            </tr>
            <tr>
                <td>Pendidikan terakhir</td>
                <th>{{ $data->dad_edu }}</th>
            </tr>
            <tr>
                <td>Pekerjaan Ayah</td>
                <th>{{ $data->dad_occupation }}</th>
            </tr>
            <tr>
                <td>Penghasilan Ayah</td>
                <th>{{ $data->dad_income }}</th>
            </tr>
            <tr>
                <td>No HP Ayah</td>
                <th>{{ $data->dad_phone }}</th>
            </tr>

            <tr>
                <td>Nama Ibu</td>
                <th>{{ $data->mom }}</th>
            </tr>
            <tr>
                <td>Pendidikan terakhir</td>
                <th>{{ $data->mom_edu }}</th>
            </tr>
            <tr>
                <td>Pekerjaan ibu</td>
                <th>{{ $data->mom_occupation }}</th>
            </tr>
            <tr>
                <td>Penghasilan Ibu</td>
                <th>{{ $data->mom_income }}</th>
            </tr>
            <tr>
                <td>No HP Ibu</td>
                <th>{{ $data->mom_phone }}</th>
            </tr>
        </tbody>
    </table>
    <br>

    <a class="btn btn-primary w-100 btn-lg" href="/members/informasi_biaya"> Selanjutnya</a>


    {{-- <div class="footer" style="padding-bottom: 1rem">
    @php
    if ($data->status == 1) {
    $sts = 'Menunggu';
    }
    @endphp
    Status pendaftaran : {{ $sts }}
</div>
<div id="modalpopup" class="modalpop">
    <div class="modalcard">
        <div class="modaljudul">
            <p>Selamat Datang</p>
            <i id="close" class="fas fa-times-circle tutup"></i>
        </div>
        <div class="modalbody">
            {!! $pesan->value !!}
        </div>
    </div>
</div> --}}
@endsection
