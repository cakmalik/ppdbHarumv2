<div>
    <script src="{{ asset('js/tata.js') }}"></script>
    <script>
        var pesan = "<?php echo "$pesan"; ?>";
        var halo = "<?php echo "$halo"; ?>";
    </script>
    <script>
        tata.success(halo, pesan, {
            animate: 'slide',
            // position: 'mm'
        })
    </script>

    {{-- dokumentasi disini https://www.cssscript.com/toast-prompt-tata/ --}}
</div>
