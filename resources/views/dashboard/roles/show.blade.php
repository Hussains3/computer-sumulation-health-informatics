@extends('dashboard.layouts.app')
@section('title')
    {{$role->name}}
@endsection
@section('content')
<div class="bg-white">

    @include('dashboard.layouts.partials.notification')
    <div class="flex justify-between px-4 py-2.5 border-b-2 border-gray">
        <h2 class="font-bold">{{$role->name}}</h2>
        <div class="">
            <a class="bg-night hover:bg-leaf text-white  text-xs px-1.5 py-1" href="{{ route('roles.edit',$role->id) }}">Edit</a>
            <a class="bg-night hover:bg-leaf text-white  text-xs px-1.5 py-1" href="{{ route('roles.index') }}">Role List</a>
        </div>
    </div>
    <div class="px-4 py-4 text-sm">
        <ul class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 mb-4">
            @foreach($rolePermissions as $permission)
            <li class="flex items-center">
                <p class="mr-2">{{$loop->index+1}}. </p>
                <p class="mx-2"> {{ $permission->name }}</p>
                <p class="mx-2 text-leaf text-xs">({{ $permission->guard_name }})</p>
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
