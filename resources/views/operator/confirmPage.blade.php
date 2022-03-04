@extends('template.app.layout')
@section('title', 'Terima / tolak')

<x-tabeldata />
@section('content')
    <form method="POST">
        @csrf
        @method('post')
        <table id="example" class="table table-striped" style="width:100%">
            <thead>

                <th>Status</th>
                <th>Nama</th>
                <th>Asal sekolah</th>
                <th>Terima</th>
            </thead>
            <tbody>
                @foreach ($students as $key => $student)
                    @php
                        $status = $student->status;
                    @endphp
                    <tr>
                        <td>{{ $key + $students->firstItem() }}</td>
                        <td>{{ $student->full_name }}</td>
                        <td>{{ $student->school_origin }}</td>
                        <td><a href="{{ route('ganti.terima', $student->id) }}" class="btn btn-primary">TERIMA</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </form>
@endsection
