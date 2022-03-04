@extends('template.app.layout')
@section('title', 'Atur Kategori')
@section('judul', 'Atur Kategori')
@push('head')
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

    </style>
@endpush
@section('content')
    <button id="myBtn" class="btn btn-primary">Add Category</button>

    <table class="table">
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
                    $total = intval($fund->gedung + $fund->perpustakaan + $fund->kegiatan + $fund->bukumedia + $fund->seragam + $fund->jilbab + $fund->ipp);
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
                    <td>
                        <a class="btn btn-sm btn-primary" href="/fund/{{ $fund->id }}/edit">
                            <i class="bi bi-pencil-square" aria-hidden="true"></i>
                        </a>

                        <form action="{{ route('delete.fund', $fund->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure you want to Delete?')">
                                <i class="bi bi-trash" aria-hidden="true"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modaljudul">
                <p>Tambah kategori</p>
                <i id="tutup" class="fas fa-times-circle tutup"></i>
            </div>
            <div class="modalbody">
                <form action="{{ route('store.fund') }}" method="post">
                    @csrf
                    <input class="form-check-label" type="radio" name="gender" value="p"> Perempuan
                    <input class="form-check-label" type="radio" name="gender" value="l"> Laki-laki
                    <br>
                    <label for="name">Nama kategory</label>
                    <input class="form-control mb-2" name="name" type="text" value="{{ old('name') }}">
                    <label for="gedung">Uang gedung</label>
                    <input class="form-control mb-2" name="gedung" type="number" value="{{ old('gedung') }}">
                    <label for="perpustakaan">Uang perpustakaan</label>
                    <input class="form-control mb-2" name="perpustakaan" type="number" value="{{ old('perpustakaan') }}">
                    <label for="kegiatan">Uang kegiatan</label>
                    <input class="form-control mb-2" name="kegiatan" type="number" value="{{ old('kegiatan') }}">
                    <label for="bukumedia">Uang buku dan media</label>
                    <input class="form-control mb-2" name="bukumedia" type="number" value="{{ old('bukumedia') }}">
                    <label for="seragam">Uang seragam</label>
                    <input class="form-control mb-2" name="seragam" type="number" value="{{ old('seragam') }}">
                    <label for="jilbab">Uang jilbab</label>
                    <input class="form-control mb-2" name="jilbab" type="number" value="{{ old('jilbab') }}">
                    <label for="ipp">IPP</label>
                    <input class="form-control mb-2" name="ipp" type="number" value="{{ old('ipp') }}">

                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Trigger/Open The Modal -->

    <!-- The Modal -->
    {{-- <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Some text in the Modal..</p>
        </div>

    </div> --}}

@endsection
@push('foot')
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
@endpush
