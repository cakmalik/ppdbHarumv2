@extends('template.app.user')
@section('title', 'Atur jadwal')
@section('header', 'Atur jadwal')
    @push('script-head')
        <script>
            function toggle(source) {
                var checkboxes = document.querySelectorAll('input[type="checkbox"]');
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i] != source)
                        checkboxes[i].checked = source.checked;
                }
            }

        </script>
    @endpush
@section('content')
@section('header', 'Atur jadwal')
    <form method="POST">
        @csrf
        @method('post')
        <table>
            <thead>
                <th>#</th>
                <th>Nama</th>
                <th>Asal sekolah</th>
            </thead>
            <tbody>
                @foreach ($students as $key => $student)
                    @php
                    $status = $student->status;
                    @endphp
                    <tr>
                        <td>{{ $key + $students->firstItem() }}</td>
                        <td>{{ $student->full_name }}</td>
                        <td>{{ $student->school_origin }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <input type="checkbox" onclick="toggle(this);" /> Pilih semua<br />
        <button onclick="confirm('Yakin akan menerima para pendaftar ini')" type="submit" class="button btn-sm success"
            value="terima" formaction="{{ url('terima') }}">Terapkan</button>
    </form>
    {{ $students->links('vendor.pagination.custom') }}
@endsection
