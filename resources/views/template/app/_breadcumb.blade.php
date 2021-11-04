{{-- <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-light p-2 rounded">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <?php $segments = ''; ?>
        @foreach (Request::segments() as $segment)
            <?php $segments .= '/' . $segment; ?>
            <li class="breadcrumb-item">
                <a href="{{ $segments }}">{{ $segment }}</a>
            </li>
        @endforeach
    </ol>
</nav> --}}
