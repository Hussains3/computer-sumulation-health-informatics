<nav class="bg-day border-gray-200 px-2 sm:px-4 py-6 rounded dark:bg-gray-800">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
      <a href="{{route('home.index')}}" class="flex">
        <img class="w-3/5 lg:w-full" src="{{ asset('images/journal.png') }}" alt="Computer Simulation and Health Informatics">
      </a>
      <button class="lg:hidden" id="mobileMenuToggle"><span class="iconify text-4xl" data-icon="charm:menu-hamburger"></span></button>
      <div class="w-full hidden md:block md:w-auto" id="mobileMenu">
        <div class="flex flex-col lg:flex-row">
            <a href="#" class="text-night  uppercase hover:underline hover:decoration-leaf hover:decoration-2 underline-offset-8 px-3 py-2  text-base font-bold">Article</a>
            <a href="#" class="text-night  uppercase hover:underline hover:decoration-leaf hover:decoration-2 underline-offset-8 px-3 py-2  text-base font-bold">Scope & Aim</a>
            <a href="{{route('editors.index')}}" class="text-night  uppercase hover:underline hover:decoration-leaf hover:decoration-2 underline-offset-8 px-3 py-2  text-base font-bold">Editorial Member</a>
            <a href="#" class="text-night  uppercase hover:underline hover:decoration-leaf hover:decoration-2 underline-offset-8 px-3 py-2  text-base font-bold">Author</a>
            <a href="#" class="text-night  uppercase hover:underline hover:decoration-leaf hover:decoration-2 underline-offset-8 px-3 py-2  text-base font-bold">Contact</a>
            <a href="#" class="text-night  uppercase hover:underline hover:decoration-leaf hover:decoration-2 underline-offset-8 px-3 py-2  text-base font-bold">Submission</a>
            <button class="px-3"><span class="iconify" data-icon="bi:search"></span></button>
            <button class="px-3 hidden lg:block"><span class="iconify" data-icon="charm:menu-hamburger"></span></button>
            {{-- @auth
                @if (Route::has('dashboard'))
                <a href="{{route('dashboard')}}" class="text-night uppercase hover:underline hover:decoration-leaf hover:decoration-2 underline-offset-8 px-3 py-2  text-base font-bold">Dashboard</a>
                @endif
            @else
                @if (Route::has('login'))

                <a href="{{ route('login') }}" class="text-night uppercase hover:underline hover:decoration-leaf hover:decoration-2 underline-offset-8 px-3 py-2  text-base font-bold">Log in</a>
                @endif

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                    class="text-night  uppercase hover:underline hover:decoration-leaf hover:decoration-2 underline-offset-8 px-3 py-2  text-base font-bold">Register</a>
                @endif
            @endauth --}}
        </div>
      </div>
    </div>
</nav>
