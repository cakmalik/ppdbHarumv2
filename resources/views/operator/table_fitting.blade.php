@extends('template.app.layout')
@section('title', 'Ukuran baju')
<x-tabeldata/>
@section('content')
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <th>#</th>
            <th>Nama</th>
            <th>Atasan</th>
            <th>Bawahan</th>
            <th>Jilbab</th>
            <th>Act</th>
        </thead>
        <tbody>
            @foreach ($sizes as $key => $size)
                <tr>
                    <td>{{ $sizes->firstItem() + $key }}</td>
                    <td>{{ $size->student->full_name }}</td>
                    <td>{{ $size->atasan }}</td>
                    <td>{{ $size->bawahan }}</td>
                    <td>{{ $size->jilbab ?? '-' }}</td>
                    <td><button class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i> </button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
