<header class="flex items-center justify-between py-3 px-6 border-b border-gray-100">
    <div id="header-left" class="flex items-center">
        <div class="text-gray-800 font-semibold">
            <a href="{{ route('home') }}">
                <x-application-mark class="block h-9 w-auto" />
            </a>
        </div>
        <div class="top-menu ml-10">
            <ul class="flex space-x-4">
                <li>
                    <a class="flex space-x-2 items-center hover:text-violet-900 text-sm text-indigo-500"
                        href="http://127.0.0.1:8000">
                        Home
                    </a>
                </li>

                <li>
                    <a class="flex space-x-2 items-center hover:text-violet-500 text-sm text-gray-500"
                        href="http://127.0.0.1:8000/blog">
                        Blog
                    </a>
                </li>

                <li>
                    <a class="flex space-x-2 items-center hover:text-violet-500 text-sm text-gray-500"
                        href="http://127.0.0.1:8000/blog">
                        About Us
                    </a>
                </li>

                <li>
                    <a class="flex space-x-2 items-center hover:text-violet-500 text-sm text-gray-500"
                        href="http://127.0.0.1:8000/blog">
                        Contact Us
                    </a>
                </li>

                <li>
                    <a class="flex space-x-2 items-center hover:text-violet-500 text-sm text-gray-500"
                        href="http://127.0.0.1:8000/blog">
                        Terms
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div id="header-right" class="flex items-center md:space-x-6">

        @guest

            @include('layouts.includes.header-right-guest')

        @endguest

        @auth

            @include('layouts.includes.header-right-auth')

        @endauth

    </div>
</header>
