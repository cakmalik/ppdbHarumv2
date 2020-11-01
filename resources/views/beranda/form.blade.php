<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form</title>
    <link rel="stylesheet" href="{{ asset('assets/miligram/milligram.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/formulir.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/jquery-ui/jquery-ui.min.css') }}" />

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/jquery-ui/jquery-ui-id.js') }}"></script>
</head>

<body>
    @php
    $incomes = DB::table('incomes')->get();
    @endphp
    <!-- coba -->
    <div class="container">
        <form action="{{ route('postForm') }}" method="post">
            @csrf
            <div class="form-wrapper">
                <fieldset class="msf_hide">
                    <div class="msf_bullet_o"></div>

                    <div>
                        <p>langkah 1/4</p>

                        <h2>Data Calon Siswa Baru</h2>
                    </div>
                    <label for="full_name">Nama Lengkap</label>
                    <input id="full_name" name="full_name" type="text" />

                    <input type="hidden" name="token" value="{{ Auth::guard('member')->user()->email }}">

                    <label for="nick_name">Nama Panggilan</label>
                    <input id="nick_name" name="nick_name" type="text" />

                    <label for="school_origin">Asal TK</label>
                    <input id="school_origin" name="school_origin" type="text" />

                    <label for="gender">Jenis Kelamin</label>
                    <select id="gender" name="gender">
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>

                    <label for="place_birth">Tempat Lahir</label>
                    <input id="place_birth" name="place_birth" type="text" />

                    <label for="date_birth">Tanggal Lahir</label>
                    <input name="date_birth" type="text" id="date_birth" placeholder="Hari/Bulan/Tahun" />

                    <label for="special_needs">Berkebutuhan Khusus</label>
                    <select id="special_needs" name="special_needs">
                        <option>Tidak</option>
                        <option>Netra</option>
                        <option>Rungu</option>
                        <option>Grahita ringan</option>
                        <option>Grahita sedang</option>
                        <option>Daksa ringan</option>
                        <option>Daksa sedang</option>
                        <option>Laras</option>
                        <option>Wicara</option>
                        <option>Tuna Ganda</option>
                        <option>Hiperaktif</option>
                        <option>Cerdas Istimewa</option>
                        <option>Bakat Istimewa</option>
                        <option>Kesulitan Belajar</option>
                        <option>Indigo</option>
                        <option>Down Syndrome</option>
                        <option>Autis</option>
                    </select>

                    <label for="address">Alamat Lengkap</label>
                    <textarea id="address" name="address"></textarea>

                    <label for="living">Tempat Tinggal</label>
                    <select id="living" name="living">
                        <option>Bersama orangtua</option>
                        <option>Wali</option>
                        <option>Kos</option>
                        <option>Asrama</option>
                        <option>Panti Asuhan</option>
                        <option>Lainnya</option>
                    </select>

                    <input class="button" type="button" name="next" value="Next" onclick="msf_btn_next()" />
                </fieldset>

                <fieldset class="msf_hide">
                    <div class="msf_bullet_o"></div>

                    <p>langkah 2/4</p>
                    <h3>Data Ayah Kandung</h3>

                    <label for="dad">Nama Ayah Kandung</label>
                    <input id="dad" name="dad" type="text" />

                    <label for="dad_edu">Pendidikan Ayah</label>
                    <select id="dad_edu" name="dad_edu">
                        <option>SD/Sederajat</option>
                        <option>SMP/Sederajat</option>
                        <option>SMA/Sederajat</option>
                        <option>D1</option>
                        <option>D2</option>
                        <option>D3</option>
                        <option>D4/S1</option>
                        <option>S2</option>
                        <option>S3</option>
                        <option>Tidak Sekolah</option>
                    </select>

                    <label for="dad_occupation">Pekerjaan Ayah</label>
                    <select id="dad_occupation" name="dad_occupation">
                        <option>Dosen</option>
                        <option>Pegawai Bank</option>
                        <option>Dokter</option>
                        <option>Perawat/Tenaga kesehatan lain</option>
                        <option>Pegawai Departemen Keuangan</option>
                        <option>TNI</option>
                        <option>Polri</option>
                        <option>PNS</option>
                        <option>Tidak Bekerja</option>
                        <option>Nelayan</option>
                        <option>Petani</option>
                        <option>Peternak</option>
                        <option>Karyawan Swasta</option>
                        <option>Pedagang Kecil</option>
                        <option>Pedagang Besar</option>
                        <option>Wiraswasta</option>
                        <option>Wirausaha</option>
                        <option>Buruh</option>
                        <option>Pensiunan</option>
                        <option>Tenaga Kerja Indonesia</option>
                        <option>Tidak dapat diterapkan</option>
                        <option>Sudah Meninggal</option>
                        <option>Lainnya</option>
                    </select>

                    <label for="dad_income">Penghasilan (gaji pokok dan pendapatan lain)</label>
                    <select id="dad_income" name="dad_income">
                        @foreach ($incomes as $gaji)
                            <option value="{{ $gaji->category }}">{{ $gaji->amount }}</option>
                        @endforeach
                    </select>

                    <input class="button" type="button" name="back" value="Back" onclick="msf_btn_back()" />
                    <input class="button" type="button" name="next" value="Next" onclick="msf_btn_next()" />
                </fieldset>

                <fieldset class="msf_hide">
                    <div class="msf_bullet_o"></div>

                    <p>langkah 3/4</p>
                    <h3>Data Ibu Kandung</h3>

                    <label for="mom">Nama Ibu Kandung</label>
                    <input id="mom" name="mom" type="text" />

                    <label for="mom_edu">Pendidikan Ibu</label>
                    <select id="mom_edu" name="mom_edu">
                        <option>SD/Sederajat</option>
                        <option>SMP/Sederajat</option>
                        <option>SMA/Sederajat</option>
                        <option>D1</option>
                        <option>D2</option>
                        <option>D3</option>
                        <option>D4/S1</option>
                        <option>S2</option>
                        <option>S3</option>
                        <option>Tidak Sekolah</option>
                    </select>

                    <label for="mom_occupation">Pekerjaan Ibu</label>
                    <select id="mom_occupation" name="mom_occupation">
                        <option>Dosen</option>
                        <option>Pegawai Bank</option>
                        <option>Dokter</option>
                        <option>Perawat/Tenaga kesehatan lain</option>
                        <option>Pegawai Departemen Keuangan</option>
                        <option>TNI</option>
                        <option>Polri</option>
                        <option>PNS</option>
                        <option>Tidak Bekerja</option>
                        <option>Nelayan</option>
                        <option>Petani</option>
                        <option>Peternak</option>
                        <option>Karyawan Swasta</option>
                        <option>Pedagang Kecil</option>
                        <option>Pedagang Besar</option>
                        <option>Wiraswasta</option>
                        <option>Wirausaha</option>
                        <option>Buruh</option>
                        <option>Pensiunan</option>
                        <option>Tenaga Kerja Indonesia</option>
                        <option>Tidak dapat diterapkan</option>
                        <option>Sudah Meninggal</option>
                        <option>Lainnya</option>
                    </select>

                    <label for="mom_income">Penghasilan (gaji pokok dan pendapatan lain)</label>
                    <select id="mom_income" name="mom_income">
                        @foreach ($incomes as $gaji)
                            <option value="{{ $gaji->category }}">{{ $gaji->amount }}</option>
                        @endforeach
                    </select>

                    <input class="button" type="button" name="back" value="Back" onclick="msf_btn_back()" />
                    <input class="button" type="button" name="next" value="Next" onclick="msf_btn_next()" />
                </fieldset>

                <fieldset class="msf_hide">
                    <div class="msf_bullet_o"></div>

                    <p>langkah 4/4</p>
                    <h3>Data Kontak</h3>
                    <label for="dad_phone">Nomor Telpon Ayah</label>
                    <input id="dad_phone" name="dad_phone" type="number" />

                    <label for="mom_phone">Nomor Telpon Ibu</label>
                    <input id="mom_phone" name="mom_phone" type="number" />

                    <label for="email">E-mail</label>
                    <input id="email" name="email" placeholder="xxxxx@xxxxx.com" />
                    <input class="button" type="button" name="back" value="Back" onclick="msf_btn_back()" />

                    <button type="submit">Kirim</button>
                </fieldset>
            </div>
        </form>
    </div>
    <!-- script -->
    <script src="{{ asset('js/form.js') }}"></script>
</body>

</html>
