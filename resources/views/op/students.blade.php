@extends('template.app.user')
@section('content')
    <a href="#" target="_blank" class="button">Export</a>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Lengkap</th>
                <th>Asal sekolah</th>
                <th>No HP Ibu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $key => $std)
                <tr>
                    <td>{{ $students->firstItem() + $key }}</td>
                    <td>{{ $std->full_name }}</td>
                    <td>{{ $std->school_origin }}</td>
                    <td>{{ $std->mom_phone }}</td>
                </tr>
            @endforeach
        </tbody>
        <tr>
        </tr>
    </table>
    {{ $students->links('vendor.pagination.custom') }}
@endsection
