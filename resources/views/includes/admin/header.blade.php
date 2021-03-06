<div class="px-4 md:px-8 py-2 h-16 flex justify-between items-center shadow-sm bg-white">
    <div class="flex items-center w-2/3">
        <input
            class="bg-gray-200 focus:outline-none focus:shadow-outline focus:bg-white border border-transparent focus:border-gray-300 rounded-lg py-2 px-4 w-full appearance-none leading-normal hidden md:block placeholder-gray-700 mr-10"
            type="text" placeholder="Search...">

        <div class="p-2 rounded-full hover:bg-gray-200 cursor-pointer md:hidden" @click="sidemenu = !sidemenu">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-600" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                <line x1="4" y1="6" x2="20" y2="6" />
                <line x1="4" y1="12" x2="20" y2="12" />
                <line x1="4" y1="18" x2="20" y2="18" />
            </svg>
        </div>
        <div class="text-xl font-bold tracking-tight text-gray-800 md:hidden ml-2">Dashing Admin.</div>
    </div>
    <div class="flex items-center">

        <a href="#"
            class="text-gray-500 p-2 rounded-full hover:text-blue-600 hover:bg-gray-200 cursor-pointer mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                <path
                    d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
            </svg>
        </a>
        @auth
        <div class="relative" x-data="{ open: false }" x-cloak>
            <div @click="open = !open"
                class="cursor-pointer font-bold w-10 h-10 bg-blue-200 text-blue-600 flex items-center justify-center rounded-full">
                DA
            </div>

            <div x-show.transition="open" @click.away="open = false"
                class="absolute top-0 mt-12 right-0 w-48 bg-white py-2 shadow-md border border-gray-100 rounded-lg z-40">
                <h4 class="block px-4 py-2 text-gray-600 hover:bg-gray-100 border border-b-slate-400">Welcome back, {{ Auth::user()->name }} <br> As {{ Auth::user()->roles }}</h4>
                <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600">Edit
                    Profile</a>
                <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600">Account
                    Settings</a>
                <form action="/logout" method="post">
                    @csrf  
                    <button type="submit" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600">logout</button>
                </form> 
            </div>
        </div>
        @endauth
    </div>
</div>