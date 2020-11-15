@extends('template.app.user')
@section('title', 'Telah dikonfirmasi')
@section('content')
    <table>
        <thead>
            <th>#</th>
            <th>Status</th>
            <th>Nama</th>
            <th>Asal sekolah</th>
            <th>Ganti</th>

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
                        if($student->status==2){
                        $sts = "Diterima";
                        }elseif($student->status==3){
                        $sts = "Ditolak";
                        }else{
                        $sts = "Menunggu";
                        }
                        @endphp

                        @if ($student->status == 2)
                            <i class="fas fa-heart green"></i>
                        @elseif($student->status==3)
                            <i class="fas fa-heart-broken red"></i>
                        @else
                            <a class="button btn-sm danger">
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
                            <a href="{{ route('ganti.tolak', $student->id) }}" class="button btn-sm danger"><i
                                    class="fas fa-thumbs-down"></i></a>
                            <a href="dfsd" class="button btn-sm dark"><i class="fas fa-cog fa-spin"></i></a>
                        @else
                            <a href="{{ route('ganti.terima', $student->id) }}" class="button btn-sm success"><i
                                    class="fas fa-thumbs-up"></i></a>
                            <a href="dfsd" class="button btn-sm dark"><i class="fas fa-cog fa-spin"></i></a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $students->links('vendor.pagination.custom') }}

@endsection
