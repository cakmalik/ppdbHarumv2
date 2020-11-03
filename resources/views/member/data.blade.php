@extends('template.app.member')
@section('content')
    <table>
        <tbody>
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
                <td>Alamat</td>
                <th>{{ $data->address }}</th>
            </tr>
            <tr>
                <td>Tinggal bersama</td>
                <th>{{ $data->living }}</th>
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
    <a href="" class="button">Edit Data</a>

    <div id="modalpopup" class="modalpop">
        <div class="modalcard">
            <div class="modaljudul">
                <p>Selamat Datang</p>
                <i id="close" class="fas fa-times-circle tutup"></i>
            </div>
            <div class="modalbody">
                <p> Terima kasih telah memilih SDIT Harapan Umat (HARUM) Jember. <br> untuk ikut membantu generasi putra/i
                    anda menjadi generasi Unggul dan Cinta Al-Quran</p>
                <p>Segala informasi terkait pendaftaran bisa anda temukan disini</p>
            </div>
        </div>
    </div>
@endsection
@push('popup')
    <script>
        function loadmodal() {
            var modalpopup = document.getElementById("modalpopup");
            var close = document.getElementById("close");

            window.onload = function() {
                modalpopup.style.display = "block";
            };
            close.onclick = function() {
                modalpopup.style.display = "none";
            }
            window.onclick = function(e) {
                if (e.target == modalpop) {
                    modalpopup.style.display = "none";
                }
            }
        }
        loadmodal();

    </script>
@endpush
