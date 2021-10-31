@extends('template2.layout')
@section('title', 'Token Pendaftaran')
@section('header', 'Token Pendaftaran')
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
    <table class="table mt-3">
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
                if($item->level=="member"){
                $status = "Belum terpakai";
                }elseif($item->level=="registered"){
                $status = "Telah mendaftar";
                }else{
                $status = "Ditolak";
                }
                @endphp
                <tr>
                    <td>{{ $token_table->firstItem() + $key }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $status }}</td>
                    <td>
                        @php
                        $wa =DB::table('setups')->where('name','pesan_wa')->first();
                        @endphp
                        <a href="https://wa.me/?text= {{ $wa->value . $item->email }}" target="_blank" class="button xxx">
                            <i class="fa fa-share-alt" aria-hidden="true"></i>
                        </a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $token_table->links('vendor.pagination.custom') }}
@endsection
@push('scripts')
    <script>
        function myFunction() {
            var copyText = document.getElementById("myInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999)
            document.execCommand("copy");
            alert("Kode siap digunakan, PASTE LAH: " + copyText.value);
        }

    </script>

@endpush
