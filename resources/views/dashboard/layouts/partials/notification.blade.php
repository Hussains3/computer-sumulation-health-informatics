@if ($message = Session::get('success'))
    <div class="px-4 py-1 bg-green  text-sm">
        <p>{{ $message }}</p>
    </div>
@endif

