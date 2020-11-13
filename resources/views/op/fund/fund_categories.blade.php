@extends('template.app.user')
@section('content')
    <button id="tombolmodal" class="button tombolmodal">Tambah kategori
    </button>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Kategori</th>
                <th>Jk</th>
                <th>gedung</th>
                <th>perpustakaan</th>
                <th>kegiatan</th>
                <th>buku & media</th>
                <th>seragam</th>
                <th>jilbab</th>
                <th>IPP</th>
                <th>Total</th>
                <th>Act</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($funds as $key => $fund)
                @php
                $total = intval($fund->gedung +$fund->perpustakaan + $fund->kegiatan +$fund->bukumedia +$fund->seragam
                +$fund->jilbab
                +$fund->ipp);
                @endphp
                <tr>
                    <td>{{ $fund->id }}</td>
                    <td>{{ $fund->name }} </td>
                    <td>{{ $fund->gender }} </td>
                    <td>@currency($fund->gedung) </td>
                    <td>@currency($fund->perpustakaan) </td>
                    <td>@currency($fund->kegiatan) </td>
                    <td>@currency($fund->bukumedia) </td>
                    <td>@currency($fund->seragam) </td>
                    <td>@currency($fund->jilbab) </td>
                    <td>@currency($fund->ipp) </td>
                    <td>@currency($total)</td>
                    <td>
                        <a class="button btn-sm primary" href="/fund/{{ $fund->id }}/edit">
                            <i class="fa fa-edit" aria-hidden="true"></i>
                        </a>

                        <form action="{{ route('delete.fund', $fund->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button btn-sm danger"
                                onclick="return confirm('Are you sure you want to Delete?')">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- modal -->
    <div id="modal" class="modal">
        <div class="modalcard">
            <div class="modaljudul">
                <p>Tambah kategori</p>
                <i id="tutup" class="fas fa-times-circle tutup"></i>
            </div>
            <div class="modalbody">
                <form action="{{ route('store.fund') }}" method="post">
                    @csrf
                    <input type="radio" name="gender" value="p"> Perempuan
                    <input type="radio" name="gender" value="l"> Laki-laki
                    <br>
                    <label for="name">Nama kategory</label>
                    <input name="name" type="text" value="{{ old('name') }}">
                    <label for="gedung">Uang gedung</label>
                    <input name="gedung" type="number" value="{{ old('gedung') }}">
                    <label for="perpustakaan">Uang perpustakaan</label>
                    <input name="perpustakaan" type="number" value="{{ old('perpustakaan') }}">
                    <label for="kegiatan">Uang kegiatan</label>
                    <input name="kegiatan" type="number" value="{{ old('kegiatan') }}">
                    <label for="bukumedia">Uang buku dan media</label>
                    <input name="bukumedia" type="number" value="{{ old('bukumedia') }}">
                    <label for="seragam">Uang seragam</label>
                    <input name="seragam" type="number" value="{{ old('seragam') }}">
                    <label for="jilbab">Uang jilbab</label>
                    <input name="jilbab" type="number" value="{{ old('jilbab') }}">
                    <label for="ipp">IPP</label>
                    <input name="ipp" type="number" value="{{ old('ipp') }}">

                    <button type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection
