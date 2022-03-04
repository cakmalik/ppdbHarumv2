@extends('template.app.layout')
@section('title', 'Edit kategory')
@section('content')
    <form action="{{ route('update.fund', $fund->id) }}" method="post">
        @csrf
        <input type="radio" name="gender" @if (isset($fund->gender) && $fund->gender == 'p') {{ 'checked' }} @endif value="p"> Perempuan
        <input type="radio" name="gender" @if (isset($fund->gender) && $fund->gender == 'l') {{ 'checked' }} @endif value="l"> Laki-laki
        <br>
        <label for="name">Nama kategory</label>
        <input class="form-control mb-2" name="name" class="form-control" type="text" value="{{ $fund->name }}">
        <label for="gedung">Uang gedung</label>
        <input class="form-control mb-2" name="gedung" class="form-control" type="number" value="{{ $fund->gedung }}">
        <label for="perpustakaan">Uang perpustakaan</label>
        <input class="form-control mb-2" name="perpustakaan" type="number" value="{{ $fund->perpustakaan }}">
        <label for="kegiatan">Uang kegiatan</label>
        <input class="form-control mb-2" name="kegiatan" type="number" value="{{ $fund->kegiatan }}">
        <label for="bukumedia">Uang buku dan media</label>
        <input class="form-control mb-2" name="bukumedia" type="number" value="{{ $fund->bukumedia }}">
        <label for="seragam">Uang seragam</label>
        <input class="form-control mb-2" name="seragam" type="number" value="{{ $fund->seragam }}">
        <label for="jilbab">Uang jilbab</label>
        <input class="form-control mb-2" name="jilbab" type="number" value="{{ $fund->jilbab }}">
        <label for="ipp">IPP</label>
        <input class="form-control mb-2" name="ipp" type="number" value="{{ $fund->ipp }}">

        <button class="btn btn-primary" type="submit">Update</button>
    </form>
@endsection
