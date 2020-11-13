@extends('template.app.user')
@section('content')

    <form action="{{ route('set.wa') }}" method="post">
        @csrf
        <textarea name="value" id="pesan_wa" cols="30" rows="10">{{ $pesanwa->value }}</textarea><br>
        <button type="submit" class="button">Update</button>
        <button onclick="Swal('hgf','jfjhfjfh','success')" type="submit" class="button">coba</button>
    </form>
    <p>
        Gunakan ini: <br>
        *pesan* = membuat tebal teks<br>
        _pesan_ = membuat miring teks <br>
        %0a = membuat baris baru <br>
    </p>

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
