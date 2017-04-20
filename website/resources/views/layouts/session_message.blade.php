@if ($flash = session('message'))
<div class="alert-success alert-flash" role="alert">
    <h4>{{ $flash }}</h4>
</div>
@endif

