<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('css/new/style.css') }}" />

    <style></style>

    <title>Info PPDB SDIT Harum Jember</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center p-3 p-md-0">
            <div class="card shadow col col-md-10 text-center p-4">
                <h2 class="display-6 mb-4">Isi data-data berikut ini</h2>


                <form id="msform" action="{{ route('postForm') }}" method="POST">
                    @csrf
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account">
                            <strong> Data Siswa</strong>
                        </li>
                        <li id="personal"><strong>Data Ayah</strong></li>
                        <li id="payment"><strong>Data Ibu</strong></li>
                        <li id="confirm"><strong>Kontak</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <br />

                    <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="d-flex justify-content-between mb-3">
                                <h2 class="">Identitas Calon Siswa</h2>
                                <p class="fs-4">1/4</p>
                            </div>
                            <div class="mb-3">
                                {{-- @php
                                    dd(Auth::user()->email);
                                @endphp --}}
                                <input type="hidden" name="token" id="token" value="{{ Auth::user()->email }}">
                                <label class="form-label" for="full_name">Nama Lengkap</label>
                                <input class="form-control" id="full_name" name="full_name" type="text" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="nick_name">Nama Panggilan</label>
                                <input class="form-control" id="nick_name" name="nick_name" type="text" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="school_origin">Asal TK</label>
                                <input class="form-control" id="school_origin" name="school_origin" type="text" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="gender">Jenis Kelamin</label>
                                <select class="form-select" id="gender" name="gender">
                                    <option selected disabled>Pilih</option>
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="place_birth">Tempat Lahir</label>
                                        <input class="form-control" id="place_birth" name="place_birth" type="text" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="date_birth">Tanggal Lahir</label>
                                        <input class="form-control" name="date_birth" type="date" id="date_birth"
                                            placeholder="Bulan/Hari/Tahun" />
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="special_needs">Berkebutuhan Khusus</label>
                                <select class="form-select" id="special_needs" name="special_needs">
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
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="jumlah_saudara">Jumlah saudara kandung yang sekolah
                                    di SDIT Harapan Umat
                                    Jember</label>
                                <select class="form-select" id="jumlah_saudara" name="jumlah_saudara">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>lebih dari 4</option>
                                </select>
                            </div>
                            <hr class="my-3" />
                            <div class="mb-3">
                                <label class="form-label" for="living">Tempat Tinggal</label>
                                <select class="form-select" id="living" name="living">
                                    <option>Bersama orangtua</option>
                                    <option>Kakek-Nenek</option>
                                    <option>Wali</option>
                                    <option>Kos</option>
                                    <option>Asrama</option>
                                    <option>Panti Asuhan</option>
                                    <option>Lainnya</option>
                                </select>
                            </div>
                            <div class="row g-3 mb-3">
                                <div class="col-md-12">
                                    <label for="address" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="address" name="address" />
                                </div>
                                <div class="col-md-6">
                                    <label for="rt" class="form-label">RT/RW</label>
                                    <input type="text" class="form-control" id="rt" name="rtrw" />
                                </div>
                                <div class="col-md-6">
                                    <label for="postalcode" class="form-label">Kode Pos</label>
                                    <input type="number" class="form-control" id="postalcode" name="postalcode" />
                                </div>

                                <div class="col-md-6">
                                    <label for="desa" class="form-label">Desa</label>
                                    <input type="text" class="form-control" id="desa" name="desa" />
                                </div>
                                <div class="col-md-6">
                                    <label for="kecamatan" class="form-label">Kecamatan</label>
                                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" />
                                </div>
                                <div class="col-md-6">
                                    <label for="kota" class="form-label">Kabupaten/Kota</label>
                                    <input type="text" class="form-control" id="kota" name="kota" />
                                </div>

                                <div class="col-md-6">
                                    <label for="provinsi" class="form-label">Provinsi</label>
                                    <input type="text" class="form-control" id="provinsi" name="provinsi" />
                                </div>
                            </div>
                        </div>

                        <input type="button" name="next" class="next btn btn-primary float-end" value="Selanjutnya" />
                    </fieldset>

                    <fieldset>
                        <div class="form-card">
                            <div class="d-flex justify-content-between mb-3">
                                <h2 class="">Identitas Ayah</h2>
                                <p class="fs-4">2/4</p>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="dad">Nama Ayah Kandung</label>
                                <input class="form-control" id="dad" name="dad" type="text" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="dad_edu">Pendidikan Ayah</label>
                                <select class="form-select" id="dad_edu" name="dad_edu">
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
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="dad_occupation">Pekerjaan Ayah</label>
                                <select class="form-select" id="dad_occupation" name="dad_occupation">
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
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="dad_income">Penghasilan (gaji pokok dan pendapatan
                                    lain)</label>
                                <select class="form-select" id="dad_income" name="dad_income">
                                    <option>kurang dari Rp. 1.000.000</option>
                                    <option>Rp. 1.000.000 - Rp. 2.000.000</option>
                                    <option>Rp. 2.000.000 - Rp. 3.000.000</option>
                                    <option>Rp. 3.000.000 - Rp. 4.000.000</option>
                                    <option>Rp. 4.000.000 - Rp. 5.000.000</option>
                                    <option>Rp. 5.000.000 - Rp. 7,5.000.000</option>
                                    <option>Rp. 7,5.000.000 - Rp. 10.000.000</option>
                                    <option>Rp. 10.000.000 - Rp. 20.000.000</option>
                                    <option>Lebih dari Rp. 20.000.000</option>
                                    <option>Tidak berpenghasilan</option>
                                </select>
                            </div>
                        </div>

                        <input type="button" name="next" class="next btn btn-primary float-end" value="Selanjutnya" />
                        <input type="button" name="previous" class="previous btn btn-primary float-start"
                            value="Sebelumnya" />
                    </fieldset>

                    <fieldset>
                        <div class="form-card">
                            <div class="d-flex justify-content-between mb-3">
                                <h2 class="">Identitas Ibu</h2>
                                <p class="fs-4">3/4</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="mom">Nama Ibu Kandung</label>
                                <input class="form-control" id="mom" name="mom" type="text" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="mom_edu">Pendidikan Ibu</label>
                                <select class="form-select" id="mom_edu" name="mom_edu">
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
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="mom_occupation">Pekerjaan Ibu</label>
                                <select class="form-select" id="mom_occupation" name="mom_occupation">
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
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="mom_income">Penghasilan (gaji pokok dan pendapatan
                                    lain)</label>
                                <select class="form-select" id="mom_income" name="mom_income">
                                    <option>kurang dari Rp. 1.000.000</option>
                                    <option>Rp. 1.000.000 - Rp. 2.000.000</option>
                                    <option>Rp. 2.000.000 - Rp. 3.000.000</option>
                                    <option>Rp. 3.000.000 - Rp. 4.000.000</option>
                                    <option>Rp. 4.000.000 - Rp. 5.000.000</option>
                                    <option>Rp. 5.000.000 - Rp. 7,5.000.000</option>
                                    <option>Rp. 7,5.000.000 - Rp. 10.000.000</option>
                                    <option>Rp. 10.000.000 - Rp. 20.000.000</option>
                                    <option>Lebih dari Rp. 20.000.000</option>
                                    <option>Tidak berpenghasilan</option>
                                </select>
                            </div>
                        </div>
                        <input type="button" name="next" class="next btn btn-primary float-end" value="Selanjutnya" />
                        <input type="button" name="previous" class="previous btn btn-primary float-start"
                            value="Sebelumnya" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="d-flex justify-content-between mb-3">
                                <h2 class="">Kontak Orang Tua</h2>
                                <p class="fs-4">4/4</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="dad_phone">Nomor Telpon Ayah</label>
                                <input class="form-control" id="dad_phone" name="dad_phone" type="number" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="mom_phone">Nomor Telpon Ibu</label>
                                <input class="form-control" id="mom_phone" name="mom_phone" type="number" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="email">E-mail</label>
                                <input class="form-control" id="email" name="email" placeholder="xxx@xxx.com" />
                            </div>
                        </div>
                        <input type="submit" class="next btn btn-primary float-end" value="Submit" />
                        <input type="button" name="previous" class="previous btn btn-primary float-start"
                            value="Sebelumnya" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row"></div>
                            <br />
                            <h2 class="text-center">
                                <strong>SUCCESS !</strong>
                            </h2>
                            <br />
                            <div class="row justify-content-center">
                                <div class="col-3">
                                    <img src="{{ asset('img/new/sukses.png') }}" class="fit-image" />
                                </div>
                            </div>
                            <br /><br />
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="text-center">
                                        Anda telah berhasil mengisi data, tunggu beberapa saat
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/new/app.js') }}"></script>
</body>

</html>
