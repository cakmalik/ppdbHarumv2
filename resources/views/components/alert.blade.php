<div class="alert">
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    <div class="alert-header">
        {{ $judul }}
    </div>
    
    {{-- children component --}}
    {{ $slot }}

    <div class="footer">
        {{ $footer }}
    </div>

</div>