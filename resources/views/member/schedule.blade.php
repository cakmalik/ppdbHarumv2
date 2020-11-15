@extends('template.app.member')
@section('title', 'Jadwal tes')
    @push('script-head')
        <style type="text/css">
            .center {
                margin: 250px auto;
                width: 400px;
                align-content: center;
                text-align: center;
            }

        </style>
    @endpush

    @if (isset($student->jadwal))
        @section('content')
            <div class="center">
                <button class="button btn-sm">
                    <label for="">Tanggal</label>
                </button>
                <h1>
                    {{ \Carbon\Carbon::parse($student->jadwal->tanggal)->format('d M Y') }}
                </h1>
                <hr>
                <button class="button btn-sm">
                    <label for="">Jam</label>
                </button>
                <h1>{{ $student->jadwal->jam }}</h1>
            </div>
        @stop
    @else
        @section('content')
            <div class="center">
                <h1>Jadwal Tes<br></h1>
                <h4>Belum ditentukan oleh admin</h4>
            </div>
        @stop
    @endif
