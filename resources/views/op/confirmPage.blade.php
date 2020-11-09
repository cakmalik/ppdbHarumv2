@extends('template.app.user')
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
        <button type="submit" class="button btn-sm success" value="terima" formaction="{{ url('terima') }}">Terima</button>
        <button type="submit" class="button btn-sm danger" value="terima" formaction="{{ url('tolak') }}">Tolak</button>
    </form>
    {{ $students->links('vendor.pagination.custom') }}
@endsection
