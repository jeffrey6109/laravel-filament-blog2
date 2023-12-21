<nav class="flex items-center justify-between py-3 px-6 border-b border-gray-100">

    <div id="nav-left" class="flex items-center">

        <div class="text-gray-800 font-semibold">

            <a href="{{ route('home') }}">
                <x-application-mark class="block h-9 w-auto" />
            </a>
        </div>

        <div class="top-menu ml-10">

            <div class="flex space-x-4">

                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>

                <x-nav-link href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')">
                    {{ __('Blog') }}
                </x-nav-link>

            </div>

        </div>

    </div>

    <div id="nav-right" class="flex items-center md:space-x-6">

        @auth
            @include('layouts.includes.header-right-auth')
        @else
           @include('layouts.includes.header-right-guest')
        @endauth

    </div>

</nav>
