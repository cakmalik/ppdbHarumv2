@extends('template.app.user')
@section('title', 'Edit Setup')
@section('header', 'Edit Setup')
@section('content')
    <form action="{{ route('update.setup', $setup->id) }}" method="POST">
        @csrf
        <label for="value">Value</label>
        <textarea name="value" id="value" cols="30" rows="10" class="content">{{ $setup->value }}</textarea>
        <br>
        <label for="info">Info</label>
        <input type="text" name="info" value="{{ $setup->info }}">
        <button type="submit">Ok</button>
    </form>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.5.1/tinymce.min.js"
        integrity="sha512-rCSG4Ab3y6N79xYzoaCqt9gMHR0T9US5O5iBuB25LtIQ1Hsv3jKjREwEMeud8q7KRgPtxhmJesa1c9pl6upZvg=="
        crossorigin="anonymous">
    </script>
    <script>
        tinymce.init({
            selector: 'textarea.content',
            height: 350,
            forced_root_block: "",
        })
    </script>


@endpush
