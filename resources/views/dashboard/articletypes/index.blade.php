@extends('dashboard.layouts.app')
@section('title')
    Article Types
@endsection
@section('content')
<div class="bg-white">

    @include('dashboard.layouts.partials.notification')
    <div class="flex justify-between px-4 py-2.5 border-b-2 border-gray">
        <h2 class="font-bold">Article Types</h2>
    </div>
    <div class="px-4 py-4 text-sm">
        <form action="{{route('articletypes.store')}}" method="post">
            @csrf
            <input type="text" name="name" required placeholder="Type Name">
            <button type="submit" class="bg-leaf border-2 border-leaf hover:text-leaf text-white hover:bg-transparent py-2 px-4">Save</button>
        </form>
    </div>
    <div class="px-4 py-4 text-sm">
        <table class="w-full text-left text-sm" id="articletypeTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th class="w-24">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $type->name }}</td>
                    <td class="text-right flex items-center justify-end w-24">
                        @can('articletype-edit')
                            <a class="bg-leaf p-1 rounded-sm inline-block mr-2" href="{{ route('articletypes.edit',$type->id) }}"><span class="iconify text-white hover:text-night" data-icon="clarity:note-edit-solid"></span></a>
                        @endcan
                        @can('articletype-delete')
                            <form action="{{route('articletypes.destroy', $type->id)}}" class="inline-block" method="POST">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="{{$type->id}}">
                                <button type="submit" class="bg-red p-1 rounded-sm"><span class="iconify text-white hover:text-night" data-icon="dashicons:trash"></span></button>
                            </form>
                        @endcan
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('script')
<script>
</script>
@endsection
