@extends('template.app.layout')
@section('title', 'Telah dikonfirmasi')
<x-tabeldata/>
@section('content')
    <table  id="example" class="table table-striped" style="width:100%">
        <thead>
            <th>#</th>
            <th>Status</th>
            <th>Nama</th>
            <th>Asal sekolah</th>
            <th>Ubah</th>

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
                            Diterima
                        @elseif($student->status==3)
                            Ditolak
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
@endsection
