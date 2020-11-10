@extends('template.app.user')
@section('content')
    <a href="{{ route('export.students') }}" target="_blank" class="button">Export</a>
    <form action="{{ route('members.search') }}" method="get">
        @csrf
        <input type="text" name="search" id="search" value="{{ old('cari') }}" placeholder="Cari pendaftar ..">
        {{-- <button type="submit" class="button btn-sm" value="search">Cari</button>
        --}}
    </form>
    <table>
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

                            <a class="button btn-sm" href="{{ route('students.show', $student->id) }}">
                                <i class="fa fa-search-plus" aria-hidden="true">
                                </i>
                            </a>

                            <a class="button btn-sm primary" href="{{ route('students.edit', $student->id) }}">
                                <i class="fa fa-edit" aria-hidden="true">
                                </i></a>

                            @csrf
                            @method('DELETE')

                            <button class="button btn-sm danger" type="submit"
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
