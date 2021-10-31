@extends('template2.layout')
@section('title', 'Edit')
@section('content')
    <a href="{{ URL::previous() }}" class="button btn-sm"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a><br><br>
    <h4>Edit jadwal "{{ $student->full_name }}"</h4>
    <form action="{{ route('update.jadwal', $student->id) }}" method="POST">
        @csrf
        <label for="">Tanggal</label>
        <input type="date" value="{{ $student->jadwal->tanggal }}" name="tanggal">
        <label for="">Jam</label>
        <input type="time" name="jam" value="{{ $student->jadwal->jam }}">
        <br>
        <button type="submit" class="button btn-sm">Update</button>
    </form>
@stop
