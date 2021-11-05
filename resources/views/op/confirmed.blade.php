@extends('template.app.layout')
@section('title', 'Telah dikonfirmasi')
<x-tabeldata/>
@section('content')
<<<<<<< HEAD
    <table class="table">
=======
    <table  id="example" class="table table-striped" style="width:100%">
>>>>>>> f38b5c90682a942f2e67b9833353090dab42d91a
        <thead>
            <th>#</th>
            <th>Status</th>
            <th>Nama</th>
            <th>Asal sekolah</th>
<<<<<<< HEAD
            <th>Ganti</th>
=======
            <th>Ubah</th>
>>>>>>> f38b5c90682a942f2e67b9833353090dab42d91a

        </thead>
        <tbody>
            @foreach ($students as $key => $student)
                @php
                    $status = $student->status;
                @endphp
                <tr>
                    <td>{{ $key + $students->firstItem() }}</td>
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

                        @if ($student->status == 2)
<<<<<<< HEAD
                            <i class="bi bi-emoji-smile"></i>
                        @elseif($student->status==3)
                            <i class="bi bi-emoji-frown"></i>
=======
                            Diterima
                        @elseif($student->status==3)
                            Ditolak
>>>>>>> f38b5c90682a942f2e67b9833353090dab42d91a
                        @else
                            <a class="btn btn-sm danger">
                                {{ $sts }}
                            </a>
                        @endif
                    </td>
                    <td>
                        @if ($student->status == 2)
                            {{ $student->full_name }}
                        @else
                            <i class="red"> {{ $student->full_name }}</i>
                        @endif
                    </td>
                    <td>
                        {{ $student->school_origin }}
                    </td>
                    <td>
                        @if ($sts == 'Diterima')
                            <a href="{{ route('ganti.tolak', $student->id) }}" class="btn btn-sm btn-danger"><i
                                    class="bi bi-hand-thumbs-down"></i></a>
                            {{-- <a href="dfsd" class="button btn-sm dark"><i class="fas fa-cog fa-spin"></i></a> --}}
                        @else
                            <a href="{{ route('ganti.terima', $student->id) }}" class="btn btn-sm btn-success"><i
                                    class="bi bi-hand-thumbs-up"></i></a>
                            {{-- <a href="dfsd" class="btn btn-sm dark"><i class="fas fa-cog fa-spin"></i></a> --}}
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
<<<<<<< HEAD
    {{ $students->links('vendor.pagination.custom') }}

=======
>>>>>>> f38b5c90682a942f2e67b9833353090dab42d91a
@endsection
