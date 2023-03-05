<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('movie.index') }}">
                        Home Page
                    </a>
                </div>

               <div class="flex justify-center">
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
            </div>



            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>


    </div>
</nav>
