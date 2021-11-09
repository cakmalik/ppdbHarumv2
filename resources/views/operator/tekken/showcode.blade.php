@extends('template.app.layout')
@section('title', 'Token Pendaftaran')
@section('header', 'Token Pendaftaran')
<x-tabeldata />
@section('content')
    <div class="my-3">
        <form action="{{ route('useCode') }}" method="post">
            @csrf
            <input id="myInput" class="form-control mb-3" type="text" name="kode_tekken" value="{{ $kode_tekken }}">
            <a class="btn btn-primary" onclick="window.location.reload(true)">Refresh</a>
            <button class="btn btn-primary" onclick="myFunction()">Use</button>

            <a href=" {{ route('exportToken') }}" class="btn btn-primary">Excel</a>
        </form>
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Token</th>
                <th>Status</th>
                <th>Kirim</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($token_table as $key => $item)
                @php
                    if ($item->level == 'member') {
                        $status = 'Belum terpakai';
                    } elseif ($item->level == 'registered') {
                        $status = 'Telah mendaftar';
                    } elseif ($item->level == 'accept') {
                        $status = 'Diterima';
                    } else {
                        $status = 'Ditolak';
                    }
                @endphp
                <tr>
                    <td>{{ $token_table->firstItem() + $key }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $status }}</td>
                    <td>
                        @php
                            $wa = DB::table('setups')
                                ->where('name', 'pesan_wa')
                                ->first();
                        @endphp
                        <a href="https://wa.me/?text= {{ $wa->value . $item->email }}" target="_blank"
                            class="btn btn-primary btn-sm">
                            <i class="bi bi-share" aria-hidden="true"></i>
                        </a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@push('script-head')
    <script>
        // paste code
        function myFunction() {
            var copyText = document.getElementById("myInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");
            // alert("Kode siap digunakan, PASTE LAH: " + copyText.value);
        }
    </script>
@endpush
