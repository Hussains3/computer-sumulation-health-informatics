@extends('dashboard.layouts.app')
@section('title')
    Add Role
@endsection
@section('content')
<div class="bg-white">

    @include('dashboard.layouts.partials.notification')
    <div class="flex justify-between px-4 py-2.5 border-b-2 border-gray">
        <h2 class="font-bold">Add Role</h2>
        @can('role-create')
            <a class="bg-night hover:bg-leaf text-white  text-xs px-1.5 py-1" href="{{ route('roles.index') }}">Role List</a>
        @endcan
    </div>
    <div class="px-4 py-4 text-sm">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong class="text-red">Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('roles.store') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="text-sm">Role Name</label>
                <input value="{{ old('name') }}"
                    type="text"
                    class=""
                    name="name"
                    placeholder="Name" required>
            </div>
            <div class="flex items-center mb-2">

                <h2>Select Permissions</h2>
                <input class="ml-2" type="checkbox" name="all_permission" id="all_permission">

            </div>
            <ul class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 mb-4">
                @foreach($permissions as $permission)
                <li class="flex items-center">
                    <input class="mr-2" type="checkbox" name="permission[{{ $permission->name }}]" value="{{ $permission->name }}" class='permission'>
                    <p class="mx-2">{{ $permission->name }}</p>
                    <p class="mx-2 text-leaf text-xs">({{ $permission->guard_name }})</p>
                </li>
                @endforeach
            </ul>

            <a href="{{ route('roles.index') }}" class="bg-night hover:bg-transparent hover:border-night border-night border-2 text-white hover:text-night px-2 py-1 mr-2">Back</a>
            <button type="submit" class="bg-leaf border-leaf border-2 px-2 py-1 text-white hover:bg-transparent hover:text-leaf">Save</button>
        </form>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $("#all_permission").on('click', function() {


            if($(this).is(':checked')) {
                $.each($('.permission'), function() {
                    $(this).prop('checked',true);
                });
            } else {
                $.each($('.permission'), function() {
                    $(this).prop('checked',false);
                });
            }

        });
    });
</script>
@endsection
