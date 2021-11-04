@extends('landingpage._layout')
@push('style')
@endpush
@section('judul', 'Jadwal')
@section('content')
<section class="pt-0 pb-5 pt-md-5">
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <img src="{{ asset('img/jadwal.svg') }}" class="img-fluid" alt="jadwal">
            </div>
        </div>
    </div>
</section>
@endsection