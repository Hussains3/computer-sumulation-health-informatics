@extends('dashboard.layouts.app')
@section('title')
    Dashboard
@endsection
@section('content')
<div class="bg-white">

    @include('dashboard.layouts.partials.notification')
    <div class="flex justify-between px-4 py-2.5 border-b-2 border-gray">
        <h2 class="font-bold">Dashboard</h2>
        <p>{{date('d-M-y');}}</p>
    </div>
    <div class="px-4 py-4 text-sm">

    </div>
</div>
@endsection
@section('script')
<script>
</script>
@endsection
