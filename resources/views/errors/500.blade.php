@extends('errors.master')
@section('title', '500')
@section('content')
    <h1>Uhhh.. Maaf <b>:(</b></h1>
    <h2>
        <p>Kamu bisa kembali ke <a href="/">Beranda</a>.
            <br>Atau hubungi <a
                href="https://wa.me/+6285333920007?text=Assalamualaikum Pak, aku menemukan error 500 disini {{ Request::url() }}."
                target="_blank" rel="noopener noreferrer">Kami</a>
        </p>
    </h2>
@endsection
