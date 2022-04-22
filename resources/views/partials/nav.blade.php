<!-- Header Area wrapper Starts -->
<header id="header-wrap" class="relative">
    <!-- Navbar Start -->
    <div class="navigation bg-blue-100 absolute top-0 left-0 w-full z-30 duration-300">
        <div class="container">
            <nav class="navbar py-2 navbar-expand-lg flex justify-between items-center relative duration-300">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo">
                </a>
                <div class="flex items-center">
                    <button class="navbar-toggler focus:outline-none block lg:hidden" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse hidden lg:block duration-300 shadow absolute top-full left-0 mt-full right-4 bg-white z-20 px-5 py-3 w-full lg:max-w-full lg:static lg:bg-transparent lg:shadow-none"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto justify-center items-center lg:flex">
                            <li class="nav-item group">
                                <a class="page-scroll {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
                            </li>
                            <li class="nav-item group">
                                <a class="page-scroll" href="/penilaian">Penilaian</a>
                            </li>
                            <li class="nav-item group">
                                <a class="page-scroll {{ ($active === "diskusi") ? 'active' : '' }}" href="/diskusi">Diskusi</a>
                            </li>
                            <li class="nav-item group">
                                <a class="page-scroll {{ ($active === "voting") ? 'active' : '' }}" href="/voting">Voting</a>
                            </li>
                            <li class="border border-r-slate-600"></li> 
                            @auth
                            <li class="nav-item group">
                                <div class="flex items-center">

                                    {{-- <a href="#"
                                        class="text-gray-500 p-2 rounded-full hover:text-blue-600 hover:bg-gray-200 cursor-pointer mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                            <path
                                                d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                            <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                                        </svg>
                                    </a> --}}
                
                                    <div class="relative" x-data="{ open: false }" x-cloak>
                                        <div @click="open = !open"
                                            class="cursor-pointer font-bold w-10 h-10 bg-blue-200 text-blue-600 flex items-center justify-center rounded-full">
                                            DA
                                        </div>
                
                                        <div x-show.transition="open" @click.away="open = false"
                                            class="absolute top-0 mt-12 right-0 w-48 bg-white py-2 shadow-md border border-gray-100 rounded-lg z-40">
                                            <a href="{{ url('/user') }}" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600">Dashboard</a>
                                            <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600">Account
                                                Settings</a>
                                            <form action="/logout" method="post">
                                                @csrf  
                                                <button type="submit" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600">logout</button>
                                            </form> 
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @else            
                            <li class="nav-item group">
                                <a class="page-scroll {{ ($active === "register") ? 'active' : '' }}"
                                href="{{ url('register') }}">Register</a>
                            </li>              
                            <li class="nav-item group">
                                <a class="page-scroll {{ ($active === "login") ? 'active' : '' }}"
                                href="{{ url('login') }}">Login</a>
                            </li>       
                            {{-- <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <li class="nav-item group">
                                    <button type="submit"class="page-scroll">logout</button>
                                </li> 
                            </form>    --}}
                            @endauth   
                        </ul>
                    </div>
                </div>             
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
</header>
<!-- Header Area wrapper End -->
