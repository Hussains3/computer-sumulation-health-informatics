@extends('dashboard.layouts.app')
@section('title')
    Article Types
@endsection
@section('content')
<div class="bg-white">

    @include('dashboard.layouts.partials.notification')
    <div class="flex justify-between px-4 py-2.5 border-b-2 border-gray">
        <h2 class="font-bold">Article Types</h2>
        @can('articletype-list')
            <a class="bg-night hover:bg-leaf text-white  text-xs px-1.5 py-1" href="{{ route('articletypes.index') }}">Type List</a>
        @endcan
    </div>
    <div class="px-4 py-4 text-sm">
        <form action="{{route('articletypes.update',$type->id)}}" method="post">
            @csrf
            <input type="text" name="name" required placeholder="Type Name">
            <button type="submit" class="bg-leaf border-2 border-leaf hover:text-leaf text-white hover:bg-transparent py-2 px-4">Update</button>
        </form>
    </div>
</div>
@endsection
@section('script')
<script>
</script>
@endsection
