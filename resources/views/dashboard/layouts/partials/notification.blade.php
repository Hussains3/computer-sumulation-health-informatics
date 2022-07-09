@if ($message = Session::get('success'))
    <div class="px-4 py-1 bg-green  text-sm hidden text-white" id="popNotification">
        <p>{{ $message }}</p>
    </div>
@endif

