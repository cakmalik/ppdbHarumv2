@extends('template.app.layout')
@section('content')
    <a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>
<<<<<<< HEAD
    <table class="table">
=======
    <table id="example" class="table table-striped" style="width:100%">
>>>>>>> f38b5c90682a942f2e67b9833353090dab42d91a
        <tbody>
            <tr>
                <td>Token</td>
                <th>{{ $student->token }}</th>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <th>{{ $student->full_name }}</th>
            </tr>
            <tr>
                <td>Panggilan</td>
                <th>{{ $student->nick_name }}</th>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <th>{{ $student->school_origin }}</th>
            </tr>
            <tr>
                <td>Jenis kelamin</td>
                <th>{{ $student->gender }}</th>
            </tr>
            <tr>
                <td>Tempat, Tgl lahir</td>
                <th>{{ $student->place_birth . ', ' . $student->date_birth }}</th>
            </tr>
            <tr>
                <td>Kebutuhan Khusus</td>
                <th>{{ $student->special_needs }}</th>
            </tr>
            <tr>
                <td>Alamat</td>
                <th>{{ $student->address }}</th>
            </tr>
            <tr>
                <td>Tinggal bersama</td>
                <th>{{ $student->living }}</th>
            </tr>
            <tr>
                <td>Nama Ayah</td>
                <th>{{ $student->dad }}</th>
            </tr>
            <tr>
                <td>Pendidikan terakhir</td>
                <th>{{ $student->dad_edu }}</th>
            </tr>
            <tr>
                <td>Pekerjaan Ayah</td>
                <th>{{ $student->dad_occupation }}</th>
            </tr>
            <tr>
                <td>Penghasilan Ayah</td>
                <th>
                    {{ $student->dad_income }}
                </th>
            </tr>
            <tr>
                <td>No HP Ayah</td>
                <th>{{ $student->dad_phone }}</th>
            </tr>

            <tr>
                <td>Nama Ibu</td>
                <th>{{ $student->mom }}</th>
            </tr>
            <tr>
                <td>Pendidikan terakhir</td>
                <th>{{ $student->mom_edu }}</th>
            </tr>
            <tr>
                <td>Pekerjaan ibu</td>
                <th>{{ $student->mom_occupation }}</th>
            </tr>
            <tr>
                <td>Penghasilan Ibu</td>
                <th>
                    {{ $student->mom_income }}
            </tr>
            <tr>
                <td>No HP Ibu</td>
                <th>{{ $student->mom_phone }}</th>
            </tr>
        </tbody>
    </table>
@endsection
