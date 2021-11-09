@extends('template.app.layoutMember')
@section('title', 'Informasi Biaya')
@section('content')
    <img class="img-fluid mb-3" src="{{ asset('img/rincian.svg') }}" alt="">
    <p>Ketika pelaksanaan psikotest harap membawa Surat Pernyataan yang dapat di download di link berikut ini</p>
    <a class="btn btn-primary" href="{{ asset('img/Surat_Pernyataan.pdf') }}" target="blank">Surat Pernyataan</a>
@endsection
