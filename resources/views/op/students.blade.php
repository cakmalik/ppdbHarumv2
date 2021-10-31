@extends('template2.layout')
@section('title', 'Data pendaftar')
    {{-- @section('header', 'Token Pendaftaran') --}}
@section('content')
    <h3>Total pendaftar : {{ $jumlah_pendaftar }} </h3>
    <a class="btn btn-primary mb-3" href="{{ route('export.students') }}" target="_blank" class="button">Export</a>
    <form action="{{ route('members.search') }}" method="get">
        @csrf
        <input type="text" class="form-control" name="search" id="search" value="{{ old('cari') }}" placeholder="Cari pendaftar ..">
        {{-- <button type="submit" class="btn btn-sm" value="search">Cari</button>
        --}}
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
                        if($student->status==2){
                        $sts = "Diterima";
                        }elseif($student->status==3){
                        $sts = "Ditolak";
                        }else{
                        $sts = "Menunggu";
                        }
                        @endphp
                        {{ $sts }}
                    </td>
                    <td>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">

                            <a class="btn btn-primary btn-sm" href="{{ route('students.show', $student->id) }}">
                                <i class="fa fa-search-plus" aria-hidden="true">
                                </i>
                            </a>

                            <a class="btn btn-sm btn-primary" href="{{ route('students.edit', $student->id) }}">
                                <i class="fa fa-edit" aria-hidden="true">
                                </i></a>

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm" type="submit"
                                onclick="return confirm('Are you sure you want to Delete?')"> <i class="fa fa-trash"
                                    aria-hidden="true">
                                </i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <div class="alert alert-success">
                    Data tidak ditemukan
                </div>
                {{-- <button class="button danger">Data tidak ditemukan</button>
                --}}
            @endforelse
        </tbody>
        <tr>
        </tr>
    </table>
    {{ $students->links('vendor.pagination.custom') }}
@endsection
