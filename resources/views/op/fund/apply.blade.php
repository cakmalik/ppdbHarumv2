@extends('template2.layout')
@section('title', 'Tentukan nominal')
{{-- @section('header', 'Token Pendaftaran') --}}
@section('content')

<div class="accordion" id="accordionExample">
    <div class="accordion-item border">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                Kategori Biaya Daftar Ulang
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kategori</th>
                            <th>Jk</th>
                            <th>gedung</th>
                            <th>perpustakaan</th>
                            <th>kegiatan</th>
                            <th>buku & media</th>
                            <th>seragam</th>
                            <th>jilbab</th>
                            <th>IPP</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($funds as $key => $fund)
                        @php
                        $total = intval($fund->gedung +$fund->perpustakaan + $fund->kegiatan +$fund->bukumedia
                        +$fund->seragam
                        +$fund->jilbab
                        +$fund->ipp);
                        @endphp
                        <tr>
                            <td>{{ $fund->id }}</td>
                            <td>{{ $fund->name }} </td>
                            <td>{{ $fund->gender }} </td>
                            <td>@currency($fund->gedung) </td>
                            <td>@currency($fund->perpustakaan) </td>
                            <td>@currency($fund->kegiatan) </td>
                            <td>@currency($fund->bukumedia) </td>
                            <td>@currency($fund->seragam) </td>
                            <td>@currency($fund->jilbab) </td>
                            <td>@currency($fund->ipp) </td>
                            <td>@currency($total)</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>

<table class="table mt-3">
    <thead>
        <th>#</th>
        <th>Nama</th>
        <th>Status</th>
        <th>Pilih</th>
        <th>Act</th>
        <th>Telah bayar</th>

    </thead>
    <tbody>
        @foreach ($students as $key => $student)
        <tr>
            <td>{{ $key + $students->firstItem() }}</td>
            <td>
                {{ $student->full_name }}
            </td>
            <td>
                @if ($student->daftarulang)
                @php
                $tipe = DB::table('fund_categories')->where('id',$student->daftarulang)->first();
                echo $tipe->name;
                @endphp
                @else
                {{ 'Belum ditentukan' }}
                @endif
                @if ($student->telahbayar == 1)
                - {{ 'lunas' }}

                @endif
            </td>
            <form action="{{ route('apply.daftarulang', $student->id) }}" method="POST">
                @csrf
                <td>
                    @php
                    if($student->gender=="perempuan"){
                    $jk = 'p';
                    }else{
                    $jk='l';
                    }
                    $ktg = DB::table('fund_categories')->where('gender', $jk)->get();
                    @endphp
                    <select name="daftarulang" class="form-select form-select-sm" id="">
                        <option selected disabled>Pilih</option>
                        @foreach ($ktg as $ktg)
                        <option value="{{ $ktg->id }}">{{ $ktg->name }}</option>
                        @endforeach
                    </select>

                </td>
                <td>
                    <button class="btn btn-primary btn-sm" type="submit">apply</button>
                </td>
                <td>
                    <a href="{{ route('lunas.daftarulang', $student->id) }}" class="btn btn-sm btn-success">lunas</a>
                </td>
            </form>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $students->links('vendor.pagination.custom') }}


@endsection