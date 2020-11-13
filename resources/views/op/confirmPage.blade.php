@extends('template.app.user')
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

    <form method="POST">
        @csrf
        @method('post')
        <table>
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
        {{-- <input type="checkbox" id="semua"> Pilih semua<br>
        --}}
        <input type="checkbox" onclick="toggle(this);" /> Pilih semua<br />
        <button onclick="confirm('Yakin akan menerima para pendaftar ini')" type="submit" class="button btn-sm success"
            value="terima" formaction="{{ url('terima') }}">Terima</button>
        <button type="submit" class="button btn-sm danger" value="terima" formaction="{{ url('tolak') }}"
            onclick="confirm('Yakin akan menolak para pendaftar ini')">Tolak</button>
    </form>
    {{ $students->links('vendor.pagination.custom') }}
@endsection
