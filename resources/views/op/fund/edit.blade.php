@extends('template.app.user')
@section('title', 'Edit kategory')
@section('content')
<form action="{{ route('update.fund', $fund->id) }}" method="post">
    @csrf
    <input type="radio" name="gender" @if (isset($fund->gender) && $fund->gender == 'p')
    {{ 'checked' }}
    @endif value="p"> Perempuan
    <input type="radio" name="gender" @if (isset($fund->gender) && $fund->gender == 'l')
    {{ 'checked' }}
    @endif value="l"> Laki-laki
    <br>
    <label for="name">Nama kategory</label>
    <input name="name" class="form-control" type="text" value="{{ $fund->name }}">
    <label for="gedung">Uang gedung</label>
    <input name="gedung" class="form-control" type="number" value="{{ $fund->gedung }}">
    <label for="perpustakaan">Uang perpustakaan</label>
    <input name="perpustakaan" type="number" value="{{ $fund->perpustakaan }}">
    <label for="kegiatan">Uang kegiatan</label>
    <input name="kegiatan" type="number" value="{{ $fund->kegiatan }}">
    <label for="bukumedia">Uang buku dan media</label>
    <input name="bukumedia" type="number" value="{{ $fund->bukumedia }}">
    <label for="seragam">Uang seragam</label>
    <input name="seragam" type="number" value="{{ $fund->seragam }}">
    <label for="jilbab">Uang jilbab</label>
    <input name="jilbab" type="number" value="{{ $fund->jilbab }}">
    <label for="ipp">IPP</label>
    <input name="ipp" type="number" value="{{ $fund->ipp }}">

    <button type="submit">Update</button>
</form>
@endsection