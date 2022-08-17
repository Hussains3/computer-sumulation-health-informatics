<div class="shadow hidden lg:block" id="mobileMenu">
    <ul>
        <li class="px-4 py-3 hover:bg-gray active:bg-gray hover:text-leaf active:text-leaf"><a href="{{route('dashboard.index')}}" class="flex items-center text-sm"><span class="iconify" data-icon="material-symbols:space-dashboard-outline-rounded"></span><p class="menuText ml-4 hidden lg:block" title="Dashboard">Dashboard</p></a></li>
        <li class="px-4 py-3 hover:bg-gray active:bg-gray hover:text-leaf active:text-leaf"><a href="{{route('users.index')}}" class="flex items-center text-sm"><span class="iconify" data-icon="ant-design:user-outlined"></span><p class="menuText ml-4 hidden lg:block" title="User Management">User</p></a></li>
        <li class="px-4 py-3 hover:bg-gray active:bg-gray hover:text-leaf active:text-leaf"><a href="{{route('roles.index')}}" class="flex items-center text-sm"><span class="iconify" data-icon="ant-design:user-switch-outlined"></span><p class="menuText ml-4 hidden lg:block" title="Role Management">Role</p></a></li>
        <li class="px-4 py-3 hover:bg-gray active:bg-gray hover:text-leaf active:text-leaf"><a href="{{route('permissions.index')}}" class="flex items-center text-sm"><span class="iconify" data-icon="carbon:settings-view"></span><p class="menuText ml-4 hidden lg:block" title="Permission Management">Permission</p></a></li>
        <li class="px-4 py-3 hover:bg-gray active:bg-gray hover:text-leaf active:text-leaf"><a href="{{route('articletypes.index')}}" class="flex items-center text-sm"><span class="iconify" data-icon="material-symbols:article-outline-sharp"></span><p class="menuText ml-4 hidden lg:block" title="Permission Management">Article Type</p></a></li>
        {{-- <li class="px-4 py-3 hover:bg-gray active:bg-gray hover:text-leaf active:text-leaf"><a href="{{route('articles.index')}}" class="flex items-center text-sm"><span class="iconify" data-icon="material-symbols:article-outline-sharp"></span><p class="menuText ml-4 hidden lg:block" title="Permission Management">Articles</p></a></li> --}}
    </ul>
</div>
