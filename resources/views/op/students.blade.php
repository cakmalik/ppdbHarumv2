@extends('template.app.user')
@section('content')
    <a href="{{ route('export.students') }}" target="_blank" class="button">Export</a>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Lengkap</th>
                <th>Asal sekolah</th>
                <th>No HP Ibu</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $key => $student)
                <tr>
                    <td>{{ $students->firstItem() + $key }}</td>
                    <td>{{ $student->full_name }}</td>
                    <td>{{ $student->school_origin }}</td>
                    <td>{{ $student->mom_phone }}</td>
                    <td>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">

                            <a class="button" href="{{ route('students.show', $student->id) }}">S</a>

                            <a class="button" href="{{ route('students.edit', $student->id) }}">E</a>

                            @csrf
                            @method('DELETE')

                            <button class="button" type="submit">D</button>
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
