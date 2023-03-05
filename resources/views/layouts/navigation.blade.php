{{--<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">--}}
{{--    <!-- Primary Navigation Menu -->--}}
{{--    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">--}}
{{--        <div class="flex justify-between h-16">--}}
{{--            <div class="navigation-aligment">--}}
{{--                <!-- Logo -->--}}
{{--                <div class="shrink-0 flex items-center">--}}
{{--                    <a href="{{ route('movie.index') }}">Home Page</a>--}}
{{--                </div>--}}

{{--               <div class="flex justify-center">--}}
{{--                   <!-- Pages -->--}}
{{--                   <div class="flex">--}}
{{--                       <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">--}}
{{--                           <x-nav-link :href="route('directors.index')" :active="request()->routeIs('directors.index')">--}}
{{--                               {{ __('Movies by Directors') }}--}}
{{--                           </x-nav-link>--}}
{{--                       </div>--}}

{{--                       <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">--}}
{{--                           <x-nav-link :href="route('years.index')" :active="request()->routeIs('years.index')">--}}
{{--                               {{ __('Movies by Years') }}--}}
{{--                           </x-nav-link>--}}
{{--                       </div>--}}
{{--                   </div>--}}

{{--                   <!-- User drop-down -->--}}
{{--                     @if (Route::has('login'))--}}
{{--                       <div class="shrink-0 flex items-center justify-end">--}}
{{--                           @auth--}}
{{--                               @include('layouts.loggedInUserNav')--}}
{{--                           @else--}}
{{--                               <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>--}}

{{--                               @if (Route::has('register'))--}}
{{--                                   <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>--}}
{{--                               @endif--}}
{{--                           @endauth--}}
{{--                       </div>--}}
{{--                     @endif--}}
{{--               </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}


<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="navigation-aligment">
        <!-- Logo -->
        <div class="flex">
            <div class="shrink-0 flex">
                <a href="{{ route('movie.index') }}" class="font-black">Home Page</a>
            </div>

            <!-- Pages -->
            <div class="flex">
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('directors.index')" :active="request()->routeIs('directors.index')">
                        {{ __('Movies by Directors') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('years.index')" :active="request()->routeIs('years.index')">
                        {{ __('Movies by Years') }}
                    </x-nav-link>
                </div>
            </div>
        </div>

            <!-- User drop-down -->
            @if (Route::has('login'))
                <div class="shrink-0 flex items-center justify-end">
                    @auth
                        @include('layouts.loggedInUserNav')
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

    </div>

</nav>
