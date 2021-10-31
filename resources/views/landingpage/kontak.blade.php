@extends('landingpage._layout')
@section('title', 'Kontak')
@section('judul', 'Kontak')
@section('content')
    <section class="pt-0 pb-5 pt-md-5">
        <div class="container">
            <div class="card shadow">
                <div class="card-body text-center">
                   <table class="table">
                        @php
                        $contacts = DB::table('contacts')->get();
                        @endphp
                        @foreach ($contacts as $contact)
                            <p> Alamat : {{ $contact->address }}</p>
                            <p> Kabupaten/Kota : {{ $contact->city }}</p>
                            <p> Whatsapp Admin : {{ $contact->whatsapp }}</p>
                            <p> Whatsapp Bu Nafi : {{ $contact->telp }}</p>
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
    </section>
@endsection
