@extends('template.app.user')
@section('content')
    <a href="{{ route('export.students') }}" target="_blank" class="button">Export</a>
    <input type="text" name="" id="">
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
            @foreach ($students as $key => $student)
                <tr>
                    <td>{{ $students->firstItem() + $key }}</td>
                    <td>{{ $student->full_name }}</td>
                    <td>{{ $student->school_origin }}</td>
                    <td>
                        @php
                        if($student->status==1){
                        $sts = "Menunggu";
                        }elseif($student->status==99){
                        $sts = "Diterima";
                        }else{
                        $sts = "Ditolak";
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

                            <button class="button btn-sm secondary" type="submit"
                                onclick="return confirm('Are you sure you want to Delete?')"> <i class="fa fa-trash"
                                    aria-hidden="true">
                                </i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tr>
        </tr>
    </table>
    {{ $students->links('vendor.pagination.custom') }}
@endsection
