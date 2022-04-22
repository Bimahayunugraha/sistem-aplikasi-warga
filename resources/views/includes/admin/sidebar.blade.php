<div class="md:hidden">
    <div @click="sidemenu = false"
        class="fixed inset-0 z-30 bg-gray-600 opacity-0 pointer-events-none transition-opacity ease-linear duration-300"
        :class="{'opacity-75 pointer-events-auto': sidemenu, 'opacity-0 pointer-events-none': !sidemenu}"></div>

    <!-- Small Screen Menu -->
    <div class="fixed inset-y-0 left-0 flex flex-col z-40 max-w-xs w-full bg-white transform ease-in-out duration-300 -translate-x-full"
        :class="{'translate-x-0': sidemenu, '-translate-x-full': !sidemenu}">

        <!-- Brand Logo / Name -->
        <div class="flex items-center px-6 py-3 h-16">
            <div class="text-2xl font-bold tracking-tight text-gray-800">Dashboard Admin.</div>
        </div>
        <!-- @end Brand Logo / Name -->

        <div class="px-4 py-2 flex-1 h-0 overflow-y-auto">
            <ul>
                <li>
                    <a href="#"
                        class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "dashboardadmin") ? 'active' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <rect x="4" y="4" width="6" height="6" rx="1" />
                            <rect x="14" y="4" width="6" height="6" rx="1" />
                            <rect x="4" y="14" width="6" height="6" rx="1" />
                            <rect x="14" y="14" width="6" height="6" rx="1" />
                        </svg>
                        Dashboard
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <line x1="4" y1="19" x2="20" y2="19" />
                            <polyline points="4 15 8 9 12 11 16 6 20 10" />
                        </svg>
                        Data Warga
                    </a>
                </li>

                <li>
                    <a href="/admin/datakeluhan"
                        class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "datakeluhan") ? 'active' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <polyline points="14 3 14 8 19 8" />
                            <path d="M17 21H7a2 2 0 0 1 -2 -2V5a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                            <line x1="9" y1="9" x2="10" y2="9" />
                            <line x1="9" y1="13" x2="15" y2="13" />
                            <line x1="9" y1="17" x2="15" y2="17" />
                        </svg>
                        Data Keluhan
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium hover:text-blue-600 hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <circle cx="12" cy="12" r="9" />
                            <polyline points="12 7 12 12 9 15" />
                        </svg>
                        Data Diskusi
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <path
                                d="M16 6h3a 1 1 0 011 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                            <line x1="8" y1="8" x2="12" y2="8" />
                            <line x1="8" y1="12" x2="12" y2="12" />
                            <line x1="8" y1="16" x2="12" y2="16" />
                        </svg>
                        Data Voting
                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/categories') }}"
                        class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <path
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                        Data Kategori Keluhan
                    </a>
                </li>
            </ul>
        </div>

    </div>
    <!-- @end Small Screen Menu -->
</div>

<!-- Menu Above Medium Screen -->
<div class="bg-white w-64 min-h-screen overflow-y-auto hidden md:block shadow relative z-30">

    <!-- Brand Logo / Name -->
    <div class="flex items-center px-6 py-3 h-16">
        <div class="text-2xl font-bold tracking-tight text-gray-800">Dashing Admin.</div>
    </div>
    <!-- @end Brand Logo / Name -->

    <div class="px-4 py-2">
        <ul>
            <div class="text-base text-gray-400 font-bold flex px-2 py-2">Dsahboard</div>
            <li>
                <a href="{{ url('/admin') }}"
                    class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "dashboardadmin") ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                        <rect x="4" y="4" width="6" height="6" rx="1" />
                        <rect x="14" y="4" width="6" height="6" rx="1" />
                        <rect x="4" y="14" width="6" height="6" rx="1" />
                        <rect x="14" y="14" width="6" height="6" rx="1" />
                    </svg>
                    Dashboard
                </a>
            </li>

            <div class="text-base text-gray-400 font-bold flex px-2 py-2">Data</div>

            <li>
                <a href="#"
                    class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "datawarga") ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                        <line x1="4" y1="19" x2="20" y2="19" />
                        <polyline points="4 15 8 9 12 11 16 6 20 10" />
                    </svg>
                    Data Warga
                </a>
            </li>

            <li>
                <a href="/admin/datakeluhan"
                    class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "datakeluhan") ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                        <polyline points="14 3 14 8 19 8" />
                        <path d="M17 21H7a2 2 0 0 1 -2 -2V5a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                        <line x1="9" y1="9" x2="10" y2="9" />
                        <line x1="9" y1="13" x2="15" y2="13" />
                        <line x1="9" y1="17" x2="15" y2="17" />
                    </svg>
                    Data Keluhan
                </a>
            </li>

            <li>
                <a href="{{ route('tanggapan.index') }}"
                    class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "datatanggapan") ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                        <polyline points="14 3 14 8 19 8" />
                        <path d="M17 21H7a2 2 0 0 1 -2 -2V5a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                        <line x1="9" y1="9" x2="10" y2="9" />
                        <line x1="9" y1="13" x2="15" y2="13" />
                        <line x1="9" y1="17" x2="15" y2="17" />
                    </svg>
                    Data Tanggapan
                </a>
            </li>

            <li>
                <a href="#"
                    class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium hover:text-blue-600 hover:bg-gray-200 {{ ($active === "datadiskusi") ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                        <circle cx="12" cy="12" r="9" />
                        <polyline points="12 7 12 12 9 15" />
                    </svg>
                    Data Diskusi
                </a>
            </li>

            <li>
                <a href="{{ route('datavoting.index') }}"
                    class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "datavoting") ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                        <path
                            d="M16 6h3a 1 1 0 011 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                        <line x1="8" y1="8" x2="12" y2="8" />
                        <line x1="8" y1="12" x2="12" y2="12" />
                        <line x1="8" y1="16" x2="12" y2="16" />
                    </svg>
                    Data Voting
                </a>
            </li>

            <li>
                <a href="{{ url('admin/kategorikeluhan') }}"
                    class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "kategoriskeluhan") ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                        <path
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <circle cx="12" cy="12" r="3" />
                    </svg>
                    Data Kategori Keluhan
                </a>
            </li>
        </ul>

        <div class="bg-orange-200 mb-10 p-6 rounded-lg mt-16">
            <h2 class="text-gray-800 text-lg leading-tight">Try <strong class="font-bold">Dashing
                    Admin.</strong></h2>
            <p class="text-gray-800 text-lg mb-4 leading-tight">Premium for free!</p>

            <button
                class="shadow text-center w-full block bg-blue-500 hover:bg-blue-600 focus:outline-none focus:shadow-outline text-white font-semibold py-2 px-4 rounded-lg">
                30 Days Free Trail
            </button>
        </div>
    </div>
</div>
<!-- @end Menu Above Medium Screen -->
