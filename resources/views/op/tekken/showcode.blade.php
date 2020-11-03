@extends('template.app.user')
@section('content')
    <form action="{{ route('useCode') }}" method="post">
        @csrf
        <input id="myInput" type="text" name="kode_tekken" value="{{ $kode_tekken }}">
        <br>
        <a class="button" onclick="window.location.reload(true)">Refresh</a>
        <button class="button" onclick="myFunction()">Use</button>
    </form>
    <a href="{{ route('exportToken') }}" class="button">Excel</a>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Token</th>
                <th>Status</th>
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
