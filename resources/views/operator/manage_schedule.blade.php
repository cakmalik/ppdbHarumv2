@extends('template.app.layout')
@section('title', 'Atur jadwal')
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
@section('content')
    <form method="POST" action="{{ route('post.jadwal') }}">
        @csrf
        @method('post')
        <div class="row mb-3">
            <div class="col-6">
                <label class="mb-2" for="tanggal">Tanggal</label>
                <input class="form-control" type="date" name="tanggal" id="tanggal">
                @error('tanggal')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-6">
                <label class="mb-2" for="jam">Jam</label>
                <input class="form-control" type="time" name="jam" id="jam">
                @error('jam')
                    <p style="color: red">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <table id="example" class="table table-striped" style="width:100%">
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
                            <a href="{{ route('edit.jadwal', $student->id) }}" class="btn btn-primary btn-sm"><i
                                    class="bi bi-pencil-square"></i></a>
                            <a href="{{ route('kirim.wa', $student->id) }}" class="btn btn-success btn-sm"><i
                                class="bi bi-whatsapp"></i></a>
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
@endsection
