@extends('dashboard.layouts.app')
@section('title')
    Permissions
@endsection
@section('content')
<div class="bg-white">

    @include('dashboard.layouts.partials.notification')
    <div class="flex justify-between px-4 py-2.5 border-b-2 border-gray">
        <h2 class="font-bold">Permissions</h2>
    </div>
    <div class="px-4 py-4 text-sm">
        <form action="{{route('permissions.store')}}" method="post">
            @csrf
            <label for="name">Permission Name</label>
            <input type="text" name="name" required placeholder="Permission Name">
            <button type="submit" class="bg-leaf border-2 border-leaf hover:text-leaf text-white hover:bg-transparent py-2 px-4">Save</button>
        </form>
    </div>
    <div class="px-4 py-4 text-sm">
        <h2>Permissions</h2>
        <ul class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 mb-4">
            @foreach ($permissions as $permission)

            <li class="flex items-center">
                <p>{!! $loop->index+1 .'. '.$permission->name !!} <span class="text-xs text-leaf">({{$permission->guard_name}})</span></p>
            </li>
            @endforeach
        </ul>

    </div>
</div>
@endsection
@section('script')
<script>
</script>
@endsection
