@extends('template.app.master')
@section('content')
    <form action="{{ route('useCode') }}" method="post">
        @csrf
        <input id="myInput" type="text" name="kode_tekken" value="{{ $kode_tekken }}">
        <br>
        <br>
        <button class="button">Refresh</button>
        <button class="button" onclick="myFunction()">Use</button>
    </form>
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
