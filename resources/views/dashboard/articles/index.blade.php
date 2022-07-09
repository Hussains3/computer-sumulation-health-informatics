@extends('dashboard.layouts.app')
@section('title')
    Articles
@endsection
@section('content')
<div class="bg-white">

    @include('dashboard.layouts.partials.notification')
    <div class="flex justify-between px-4 py-2.5 border-b-2 border-gray">
        <h2 class="font-bold">Articles</h2>
        @can('role-create')
            <a class="bg-night hover:bg-leaf text-white  text-xs px-1.5 py-1" href="{{ route('articles.create') }}">Article +</a>
        @endcan
    </div>
    <div class="px-4 py-4 text-sm">

    </div>
</div>
@endsection
@section('script')
<script>
</script>
@endsection
