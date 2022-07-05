@extends('dashboard.layouts.app')
@section('title')
    Role Management
@endsection
@section('content')
<div class="bg-white">

    @include('dashboard.layouts.partials.notification')
    <div class="flex justify-between px-4 py-2.5 border-b-2 border-gray">
        <h2 class="font-bold">Roles</h2>
        @can('role-create')
            <a class="bg-night hover:bg-leaf text-white  text-xs px-1.5 py-1" href="{{ route('roles.create') }}">Role +</a>
        @endcan
    </div>
    <div class="px-4 py-4 text-sm">
        <table class="w-full text-left text-sm" id="roleTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $key => $role)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $role->name }}</td>
                    <td class="text-right">
                        <a class="bg-green p-1 rounded-sm inline-block" href="{{ route('roles.show',$role->id) }}"><span class="iconify text-white hover:text-night" data-icon="akar-icons:eye"></span></a>
                        @can('role-edit')
                            <a class="bg-leaf p-1 rounded-sm inline-block" href="{{ route('roles.edit',$role->id) }}"><span class="iconify text-white hover:text-night" data-icon="clarity:note-edit-solid"></span></a>
                        @endcan
                        @can('role-delete')
                            <form action="{{route('roles.destroy', $role->id)}}" method="DELETE" class="inline-block mt-0">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id">
                                <button type="submit" class="bg-red p-1 rounded-sm"><span class="iconify text-white hover:text-night" data-icon="dashicons:trash"></span></button>
                            </form>
                        @endcan
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {!! $roles->render() !!}
</div>
@endsection
@section('script')
<script>
    $('#roleTable').dataTable();
</script>
@endsection
