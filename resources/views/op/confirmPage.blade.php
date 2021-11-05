@extends('template.app.layout')
@section('title', 'Terima / tolak')
<<<<<<< HEAD
@section('header', 'Terima / tolak')

=======
@push('script-head')
    <script>
        function toggle(source) {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i] != source)
                    checkboxes[i].checked = source.checked;
            }
            @section('header', 'Atur jadwal')
        }
    </script>
@endpush
<x-tabeldata/>
>>>>>>> f38b5c90682a942f2e67b9833353090dab42d91a
@section('content')
<form method="POST">
    @csrf
    @method('post')
    <table  id="example" class="table table-striped" style="width:100%">
        <thead>
            <th>#</th>
            <th>Status</th>
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
                    <td>
                        <input type="checkbox" value="{{ $student->id }}" name="status[]">

                    </td>
                    <td>{{ $student->full_name }}</td>
                    <td>{{ $student->school_origin }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <input type="checkbox" onclick="toggle(this);" /> Pilih semua<br />
    <button onclick="confirm('Yakin akan menerima para pendaftar ini')" type="submit" class="btn btn-sm btn-success"
        value="terima" formaction="{{ url('terima') }}">Terima</button>
    <button type="submit" class="btn btn-sm btn-danger" value="tolak" formaction="{{ url('tolak') }}"
        onclick="confirm('Yakin akan menolak para pendaftar ini')">Tolak</button>
</form>
<<<<<<< HEAD
{{ $students->links('vendor.pagination.custom') }}
@endsection
@push('scripts')
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
=======
@endsection

>>>>>>> f38b5c90682a942f2e67b9833353090dab42d91a
