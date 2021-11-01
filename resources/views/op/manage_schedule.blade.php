@extends('template2.layout')
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
<form method="POST" action="{{ route('post.jadwal') }}">
    @csrf
    @method('post')
    <div class="row mb-3">
        <div class="col-6">
            <label for="tanggal">Tanggal</label>
            <input class="form-control" type="date" name="tanggal" id="tanggal">
            @error('tanggal')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-6">
            <label for="jam">Jam</label>
            <input class="form-control type=" time" name="jam" id="jam">
            @error('jam')
                <p style="color: red">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <table class="table">
        <thead>
            <th>#</th>
            <th>Pilih</th>
            <th>Nama</th>
            <th>Time</th>
            <th>Edit</th>
        </thead>
        <tbody>
            @foreach ($students as $key => $student)
                @php
                    $status = $student->status;
                @endphp
                <tr>
                    <td>
                        {{ $students->firstItem() + $key }}
                    </td>
                    <td>
                        <input type="checkbox" name="nilai[]" id="student_id" value="{{ $student->id }}">
                    </td>
                    <td>{{ $student->full_name }}</td>
                    <td>
                        @if (isset($student->jadwal))
                            {{ $student->jadwal->tanggal }}
                            {{ $student->jadwal->jam }}
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('edit.jadwal', $student->id) }}" class="button btn-sm"><i
                                class="fas fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @error('nilai')
        <p style="color: red">{{ $message }}</p>
    @enderror
    <input class="form-check-input" type="checkbox" onclick="toggle(this);" /> Pilih semua
    <br /> <br />
    <button class="btn btn-primary" type="submit">Terapkan</button>
</form>
{{ $students->links('vendor.pagination.custom') }}
@endsection
