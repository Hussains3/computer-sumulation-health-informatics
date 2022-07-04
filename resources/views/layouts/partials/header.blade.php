<nav class="bg-day border-gray-200 px-2 sm:px-4 py-6 rounded dark:bg-gray-800">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
      <a href="{{route('home.index')}}" class="flex">
        <img class="w-3/5 lg:w-full" src="{{ asset('images/journal.png') }}" alt="Computer Simulation and Health Informatics">
      </a>
      <button class="lg:hidden" id="mobileMenuToggle"><span class="iconify text-4xl" data-icon="charm:menu-hamburger"></span></button>
      <div class="w-full hidden md:block md:w-auto" id="mobileMenu">
        <div class="flex flex-col lg:flex-row relative">
            <a href="#" class="text-night  uppercase hover:underline hover:decoration-leaf hover:decoration-2 underline-offset-8 px-3 py-2  text-base font-bold">Article</a>
            <a href="#" class="text-night  uppercase hover:underline hover:decoration-leaf hover:decoration-2 underline-offset-8 px-3 py-2  text-base font-bold">Scope & Aim</a>
            <a href="{{route('editors.index')}}" class="text-night  uppercase hover:underline hover:decoration-leaf hover:decoration-2 underline-offset-8 px-3 py-2  text-base font-bold">Editorial Member</a>
            <a href="#" class="text-night  uppercase hover:underline hover:decoration-leaf hover:decoration-2 underline-offset-8 px-3 py-2  text-base font-bold">Author</a>
            <a href="#" class="text-night  uppercase hover:underline hover:decoration-leaf hover:decoration-2 underline-offset-8 px-3 py-2  text-base font-bold">Contact</a>
            <a href="#" class="text-night  uppercase hover:underline hover:decoration-leaf hover:decoration-2 underline-offset-8 px-3 py-2  text-base font-bold">Submission</a>
            <button class="px-3"><span class="iconify" data-icon="bi:search"></span></button>
            <button class="px-3" id="mobileProfileMenuToggle"><span class="iconify text-3xl" data-icon="healthicons:ui-user-profile"></span></button>
            <div class="hidden absolute right-0 bg-night top-14 lg:top-20" id="profileMenu">
                <ul class="text-sm text-white p-4">
                    @auth
                        @if (Route::has('profile'))
                        <li><a href="{{route('profile')}}" class="hover:text-leaf uppercase hover:underline hover:decoration-leaf hover:decoration-2 underline-offset-8 px-3 py-2  text-base font-bold">Profile</a></li>
                        @endif
                        @if (Route::has('dashboard'))
                        <li>
                            <a href="{{route('dashboard')}}" class="hover:text-leaf uppercase hover:underline hover:decoration-leaf hover:decoration-2 underline-offset-8 px-3 py-2  text-base font-bold">Dashboard</a>
                        </li>
                        @endif
                        @if (Route::has('logout'))
                        <li>
                            <a href="{{route('logout')}}" class="hover:text-leaf uppercase hover:underline hover:decoration-leaf hover:decoration-2 underline-offset-8 px-3 py-2  text-base font-bold">Dashboard</a>
                        </li>
                        @endif
                        @if (Route::has('logout'))
                        <li><a href="{{route('logout')}}" class="hover:text-leaf uppercase hover:underline hover:decoration-leaf hover:decoration-2 underline-offset-8 px-3 py-2  text-base font-bold">Logout</a></li>
                        @endif
                    @else
                        @if (Route::has('login'))
                        <li>
                            <a href="{{ route('login') }}" class="hover:text-leaf uppercase hover:underline hover:decoration-leaf hover:decoration-2 underline-offset-8 px-3 py-2  text-base font-bold">Log in</a>
                        </li>
                        @endif
                        @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}"
                            class="hover:text-leaf  uppercase hover:underline hover:decoration-leaf hover:decoration-2 underline-offset-8 px-3 py-2  text-base font-bold">Register</a>
                        </li>
                        @endif
                    @endauth
                </ul>
            </div>
            <button class="px-3 hidden lg:block"><span class="iconify" data-icon="charm:menu-hamburger"></span></button>

        </div>
      </div>
    </div>
</nav>
