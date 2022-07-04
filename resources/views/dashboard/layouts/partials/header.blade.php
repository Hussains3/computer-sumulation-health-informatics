<nav class="bg-day border-gray-200 px-2 sm:px-4 py-6 rounded dark:bg-gray-800">
    <div class="flex flex-wrap justify-center lg:justify-between items-center mx-auto relative">
      <button class="lg:hidden absolute inset-y-auto left-4" id="mobileMenuToggle"><span class="iconify text-4xl" data-icon="charm:menu-hamburger"></span></button>
      <a href="{{route('home.index')}}" class="flex justify-center lg:justify-start">
        <img class="w-2/5" src="{{ asset('images/journal.png') }}" alt="Computer Simulation and Health Informatics">
      </a>
      <button class="absolute inset-y-auto right-4" id="mobileProfileMenuToggle"><span class="iconify text-3xl" data-icon="healthicons:ui-user-profile"></span></button>
      <div class="hidden absolute right-0 bg-night top-14 lg:top-10" id="profileMenu">
        <ul class="text-sm text-white p-4">
            <li><a href="" class="hover:text-leaf">Profile</a></li>
            <li><a href="" class="hover:text-leaf">Logout</a></li>
        </ul>
      </div>
    </div>
</nav>
