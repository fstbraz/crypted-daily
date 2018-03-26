<footer class="footer">
    @if($show_donate_button)
        <button type="button" class="btn btn-secondary btn-sm pull-right" data-toggle="modal" data-target="#myModal">Donate</button>
    @endif
    Copyright © {{ date('Y') }} {{ $app_name }}.<br/>
</footer>