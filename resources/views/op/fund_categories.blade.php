@extends('template.app.user')
@section('content')
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
                <th>Act</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($funds as $key => $fund)
                @php
                $total = intval($fund->gedung +$fund->perpustakaan + $fund->kegiatan +$fund->bukumedia +$fund->seragam
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
                    {{-- <td>
                        <form action="{{ route('students.destroy', $fund->id) }}" method="POST">

                            <a class="button btn-sm" href="{{ route('students.show', $fund->id) }}">
                                <i class="fa fa-search-plus" aria-hidden="true">
                                </i>
                            </a>

                            <a class="button btn-sm primary" href="{{ route('students.edit', $fund->id) }}">
                                <i class="fa fa-edit" aria-hidden="true">
                                </i></a>

                            @csrf
                            @method('DELETE')

                            <button class="button btn-sm secondary" type="submit"
                                onclick="return confirm('Are you sure you want to Delete?')"> <i class="fa fa-trash"
                                    aria-hidden="true">
                                </i></button>
                        </form>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
