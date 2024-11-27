<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    <h4>Admin Dashboard Page</h4>

                </div>
                <!-- Authentication -->
           <form method="POST" action="{{ route('admin.logout') }}">
               @csrf

               <x-responsive-nav-link :href="route('logout')"
                       onclick="event.preventDefault();
                                   this.closest('form').submit();">
                   {{ __('Log Out') }}
               </x-responsive-nav-link>
           </form>
            </div>
        </div>
    </div>
</x-app-layout>
