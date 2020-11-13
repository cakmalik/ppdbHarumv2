@extends('template.app.member')
@push('script-head')
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #e67e22;
            color: white;
            text-align: center;
            /* padding-bottom: 10; */
            padding-top: 10px;
            padding-bottom: -110px;
        }

    </style>

@endpush
@section('content')
    <table>
        <tbody>
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
                    @php
                    $dad = DB::table('incomes')->where('category',$student->dad_income)->first();
                    echo $dad->amount;
                    @endphp
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
                    @php
                    $mom = DB::table('incomes')->where('category',$student->mom_income)->first();
                    echo $mom->amount;
                    @endphp</th>
            </tr>
            <tr>
                <td>No HP Ibu</td>
                <th>{{ $student->mom_phone }}</th>
            </tr>
        </tbody>
    </table>
    <br><br>
    <div class="footer">
        <a href="/members/info_daftar_ulang" class="button btn-sm dark"> Berikutnya</a>
    </div>
@endsection