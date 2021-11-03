@extends('template2.layout')
@section('content')

<form action="{{ route('set.wa') }}" method="post">
    @csrf
    <textarea name="value" id="pesan_wa" class="form-control" rows="5">{{ $pesanwa->value }}</textarea><br>
    <button type="submit" class="btn btn-primary w-100">Update</button>
    {{-- <button onclick="Swal('hgf','jfjhfjfh','success')" type="submit" class="btn btn-primary">coba</button> --}}
</form>
<h5 class="mt-3">Gunakan ini :</h5>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Kode</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>*pesan*</td>
            <td> membuat tebal teks <br></td>
        </tr>
        <tr>
            <td>2</td>
            <td>_pesan_ </td>
            <td> membuat miring teks</td>
        </tr>
        <tr>
            <td>3</td>
            <td>%0a </td>
            <td> membuat baris baru </td>
        </tr>

    </tbody>

</table>

@stop

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.5.1/tinymce.min.js"
    integrity="sha512-rCSG4Ab3y6N79xYzoaCqt9gMHR0T9US5O5iBuB25LtIQ1Hsv3jKjREwEMeud8q7KRgPtxhmJesa1c9pl6upZvg=="
    crossorigin="anonymous">
</script>
<script>
    tinymce.init({
            selector: 'textarea.content',
            height: 350
        })

</script>


@endpush