@extends('template.app.layout')
@section('title', 'Ukuran baju')
<x-tabeldata/>
@section('content')
<<<<<<< HEAD
    <table class="table">
=======
    <table id="example" class="table table-striped" style="width:100%">
>>>>>>> f38b5c90682a942f2e67b9833353090dab42d91a
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
