@extends('template.app.layout')
@section('title', 'Data pendaftar')
<x-tabeldata />
@section('content')
    <div class="d-flex">
        <h3>Total pendaftar : {{ $jumlah_pendaftar ?? '' }} </h3>
        <a class="btn btn-primary mb-3 ms-3" href="{{ route('export.students') }}" target="_blank"
            class="button">Export</a>
    </div>
<<<<<<< HEAD
    <form action="{{ route('members.search') }}" method="get">
        @csrf
        <div class="row g-3 mb-3">
            <div class="col-10">
                <input type="text" class="form-control" name="search" id="search" value="{{ old('cari') }}"
                    placeholder="Cari pendaftar ..">
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-primary w-100" value="search">Cari</button>
            </div>
        </div>

    </form>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Lengkap</th>
                <th>Asal sekolah</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $key => $student)
                <tr>
                    <td>{{ $students->firstItem() + $key }}</td>
                    <td>{{ $student->full_name }}</td>
                    <td>{{ $student->school_origin }}</td>
                    <td>
                        @php
                            if ($student->status == 2) {
                                $sts = 'Diterima';
                            } elseif ($student->status == 3) {
                                $sts = 'Ditolak';
                            } else {
                                $sts = 'Menunggu';
                            }
                        @endphp
                        {{ $sts }}
                    </td>
                    <td>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">

                            <a class="btn btn-primary btn-sm" href="{{ route('students.show', $student->id) }}">
                                <i class="bi bi-search" aria-hidden="true">
                                </i>
                            </a>

                            <a class="btn btn-sm btn-primary" href="{{ route('students.edit', $student->id) }}">
                                <i class="bi bi-pencil-square" aria-hidden="true">
                                </i></a>

                            @csrf
                            @method('DELETE')

=======
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Lengkap</th>
                <th>Asal sekolah</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $key => $student)
                <tr>
                    <td>{{ $students->firstItem() + $key }}</td>
                    <td>{{ $student->full_name }}</td>
                    <td>{{ $student->school_origin }}</td>
                    <td>
                        @php
                            if ($student->status == 2) {
                                $sts = 'Diterima';
                            } elseif ($student->status == 3) {
                                $sts = 'Ditolak';
                            } else {
                                $sts = 'Menunggu';
                            }
                        @endphp
                        {{ $sts }}
                    </td>
                    <td>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">

                            <a class="btn btn-primary btn-sm" href="{{ route('students.show', $student->id) }}">
                                <i class="bi bi-search" aria-hidden="true">
                                </i>
                            </a>

                            <a class="btn btn-sm btn-primary" href="{{ route('students.edit', $student->id) }}">
                                <i class="bi bi-pencil-square" aria-hidden="true">
                                </i></a>

                            @csrf
                            @method('DELETE')

>>>>>>> f38b5c90682a942f2e67b9833353090dab42d91a
                            <button class="btn btn-danger btn-sm" type="submit"
                                onclick="return confirm('Are you sure you want to Delete?')"> <i class="bi bi-trash"
                                    aria-hidden="true">
                                </i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <div class="alert alert-success">
                    Data tidak ditemukan
                </div>
                {{-- <button class="button danger">Data tidak ditemukan</button> --}}
            @endforelse
        </tbody>
<<<<<<< HEAD
        <tr>
        </tr>
    </table>
    {{ $students->links('vendor.pagination.custom') }}
=======
    </table>
>>>>>>> f38b5c90682a942f2e67b9833353090dab42d91a
@endsection
