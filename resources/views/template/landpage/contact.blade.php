@extends('template.landpage.master')
@section('content')
    <div class="container tengah">
        <h1>Kontak</h1>
        <div class="card">
            <div class="garis"></div>
            <div class="isi">
                <div class="cardbagian">
                    <table class="table">
                        @php
                        $contacts = DB::table('contacts')->get();
                        @endphp
                        @foreach ($contacts as $contact)
                            <p> Alamat : {{ $contact->address }}</p>
                            <p> Kota : {{ $contact->city }}</p>
                            <p> Telp : {{ $contact->telp }}</p>
                            <p> Whatsapp : {{ $contact->whatsapp }}</p>
                            <p>
                                <a target="_blank" href="{{ $contact->facebook }}">FB</a> |
                                <a target="_blank" href="{{ $contact->instagram }}">IG</a> |
                                <a target="_blank" href="{{ $contact->youtube }}">YOUTUBE</a>
                            </p>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
