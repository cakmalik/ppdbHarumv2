@extends('template.app.layoutMember')
@section('title', 'Jadwal tes')

@if (isset($student->jadwal))
    @section('content')
        <div class="text-center">
            <span>Tanggal</span>
            <h1>
                {{ \Carbon\Carbon::parse($student->jadwal->tanggal)->format('d M Y') }}
            </h1>
            <hr>
            <span>Jam</span>
            <h1>{{ $student->jadwal->jam }}</h1>
        </div>
    @stop
@else
    @section('content')
        <div class="text-center">
            <h1>Jadwal Tes<br></h1>
            <h4>Belum ditentukan oleh admin</h4>
        </div>
    @stop
@endif
