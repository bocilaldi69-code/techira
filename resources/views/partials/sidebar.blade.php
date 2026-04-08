<div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
            <div :class="{'dark text-white-dark' : $store.app.semidark}">
    <nav x-data="sidebar" class="sidebar fixed bottom-0 top-0 z-50 h-full min-h-screen w-[260px] shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] transition-all duration-300">
        <div class="h-full bg-white dark:bg-[#0e1726]">
            <div class="flex items-center justify-between px-4 py-3">
                <a href="{{ route('admin.dashboard') }}" class="main-logo flex shrink-0 items-center">
                    <img class="ml-[5px] w-8 flex-none" src="{{ asset('assets/images/logo.png') }}" alt="image">
                    <span class="align-middle text-2xl font-semibold ltr:ml-1.5 rtl:mr-1.5 dark:text-white-light lg:inline">Techira Indonesia</span>
                </a>
                <a href="javascript:;" class="collapse-icon flex h-8 w-8 items-center rounded-full transition duration-300 hover:bg-gray-500/10 rtl:rotate-180 dark:text-white-light dark:hover:bg-dark-light/10" @click="$store.app.toggleSidebar()">
                    <svg class="m-auto h-5 w-5" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>

            <ul class="perfect-scrollbar relative h-[calc(100vh-80px)] space-y-0.5 overflow-y-auto overflow-x-hidden p-4 py-0 font-semibold"
    x-data="{ activeDropdown: 'dashboard' }">

    {{-- ===== DASHBOARD ===== --}}
    <li class="menu nav-item">
        <button type="button" class="nav-link group w-full"
            :class="{'active' : activeDropdown === 'dashboard'}"
            @click="activeDropdown === 'dashboard' ? activeDropdown = null : activeDropdown = 'dashboard'">
            <div class="flex items-center">
                <svg class="shrink-0 group-hover:!text-primary" width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.5" d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z" fill="currentColor"/>
                    <path d="M9 17.25C8.58579 17.25 8.25 17.5858 8.25 18C8.25 18.4142 8.58579 18.75 9 18.75H15C15.4142 18.75 15.75 18.4142 15.75 18C15.75 17.5858 15.4142 17.25 15 17.25H9Z" fill="currentColor"/>
                </svg>
                <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Dashboard</span>
            </div>
            <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'dashboard'}">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                    <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </button>
        <ul x-cloak x-show="activeDropdown === 'dashboard'" x-collapse class="sub-menu text-gray-500">
            <li>
        <a href="{{ route('admin.dashboard') }}"
           class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            Jumlah Layanan
        </a>
    </li>

    <li>
        <a href="{{ route('admin.dashboard') }}"
           class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            Jumlah Portfolio
        </a>
    </li>

    <li>
        <a href="{{ route('admin.dashboard') }}"
           class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            Pesan Masuk
        </a>
    </li>

        </ul>
    </li>

    {{-- ===== SECTION: APPS ===== --}}
    <h2 class="-mx-4 mb-1 flex items-center bg-white-light/30 px-7 py-3 font-extrabold uppercase dark:bg-dark dark:bg-opacity-[0.08]">
        <span>Apps</span>
    </h2>

    {{-- ===== SERVICES ===== --}}
    <li class="menu nav-item">
        <button type="button" class="nav-link group w-full"
            :class="{'active' : activeDropdown === 'services'}"
            @click="activeDropdown === 'services' ? activeDropdown = null : activeDropdown = 'services'">
            <div class="flex items-center">
                <svg class="shrink-0 group-hover:!text-primary" width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.5" d="M21 16V10C21 7 21 6 20 5C19 4 18 4 16 4H8C6 4 5 4 4 5C3 6 3 7 3 10V16C3 19 3 20 4 21C5 22 6 22 9 22H15C18 22 19 22 20 21C21 20 21 19 21 16Z" fill="currentColor"/>
                    <path d="M8 3.5C8 2.7 8.7 2 9.5 2H14.5C15.3 2 16 2.7 16 3.5V4.5C16 5.3 15.3 6 14.5 6H9.5C8.7 6 8 5.3 8 4.5V3.5Z" fill="currentColor"/>
                </svg>
                <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Services</span>
            </div>
            <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'services'}">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                    <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </button>
        <ul x-cloak x-show="activeDropdown === 'services'" x-collapse class="sub-menu text-gray-500">
            <li>
                <a href="{{ route('admin.services.index') }}"
                   class="{{ request()->routeIs('admin.services.index') ? 'active' : '' }}">
                   Daftar Services
                </a>
            </li>
            <li>
                <a href="{{ route('admin.services.create') }}"
                   class="{{ request()->routeIs('admin.services.create') ? 'active' : '' }}">
                   Tambah Service
                </a>
            </li>
        </ul>
    </li>

    {{-- ===== PORTFOLIO ===== --}}
    <li class="menu nav-item">
        <button type="button" class="nav-link group w-full"
            :class="{'active' : activeDropdown === 'portfolios'}"
            @click="activeDropdown === 'portfolios' ? activeDropdown = null : activeDropdown = 'portfolios'">
            <div class="flex items-center">
                <svg class="shrink-0 group-hover:!text-primary" width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.5" d="M2 6C2 4.34315 3.34315 3 5 3H19C20.6569 3 22 4.34315 22 6V18C22 19.6569 20.6569 21 19 21H5C3.34315 21 2 19.6569 2 18V6Z" fill="currentColor"/>
                    <path d="M2 9H22V11H2V9Z" fill="currentColor"/>
                </svg>
                <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Portfolio</span>
            </div>
            <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'portfolios'}">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                    <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </button>
        <ul x-cloak x-show="activeDropdown === 'portfolios'" x-collapse class="sub-menu text-gray-500">
            <li>
                <a href="{{ route('admin.portfolios.index') }}"
                   class="{{ request()->routeIs('admin.portfolios.index') ? 'active' : '' }}">
                   Daftar Portfolio
                </a>
            </li>
            <li>
                <a href="{{ route('admin.portfolios.create') }}"
                   class="{{ request()->routeIs('admin.portfolios.create') ? 'active' : '' }}">
                   Tambah Portfolio
                </a>
            </li>
        </ul>
    </li>

    {{-- ===== TEAM ===== --}}
    <li class="menu nav-item">
        <button type="button" class="nav-link group w-full"
            :class="{'active' : activeDropdown === 'teams'}"
            @click="activeDropdown === 'teams' ? activeDropdown = null : activeDropdown = 'teams'">
            <div class="flex items-center">
                <svg class="shrink-0 group-hover:!text-primary" width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.5" d="M9 10C11.2091 10 13 8.20914 13 6C13 3.79086 11.2091 2 9 2C6.79086 2 5 3.79086 5 6C5 8.20914 6.79086 10 9 10Z" fill="currentColor"/>
                    <path d="M9 13C4.58172 13 1 15.6863 1 19C1 19.5523 1.44772 20 2 20H16C16.5523 20 17 19.5523 17 19C17 15.6863 13.4183 13 9 13Z" fill="currentColor"/>
                    <path opacity="0.5" d="M17.5 13C19.9853 13 22 11.2091 22 9C22 6.79086 19.9853 5 17.5 5C17.1736 5 16.8535 5.03369 16.5444 5.09734C17.1356 5.96942 17.5 7.00776 17.5 8.13C17.5 9.5 17 10.75 16.15 11.71C16.57 12.55 17 13 17.5 13Z" fill="currentColor"/>
                </svg>
                <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Team</span>
            </div>
            <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'teams'}">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                    <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </button>
        <ul x-cloak x-show="activeDropdown === 'teams'" x-collapse class="sub-menu text-gray-500">
            <li>
                <a href="{{ route('admin.teams.index') }}"
                   class="{{ request()->routeIs('admin.teams.index') ? 'active' : '' }}">
                   Daftar Team
                </a>
            </li>
            <li>
                <a href="{{ route('admin.teams.create') }}"
                   class="{{ request()->routeIs('admin.teams.create') ? 'active' : '' }}">
                   Tambah Anggota
                </a>
            </li>
        </ul>
    </li>

    {{-- ===== MESSAGES ===== --}}
    <li class="menu nav-item">
        <button type="button" class="nav-link group w-full"
            :class="{'active' : activeDropdown === 'messages'}"
            @click="activeDropdown === 'messages' ? activeDropdown = null : activeDropdown = 'messages'">
            <div class="flex items-center">
                <svg class="shrink-0 group-hover:!text-primary" width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.5" d="M2 4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V16C22 16.5523 21.5523 17 21 17H7L3 21V4Z" fill="currentColor"/>
                    <path d="M7 9H17M7 12H13" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Messages</span>
            </div>
            <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'messages'}">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                    <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </button>
        <ul x-cloak x-show="activeDropdown === 'messages'" x-collapse class="sub-menu text-gray-500">
            <li>
                <a href="{{ route('admin.messages.index') }}"
                   class="{{ request()->routeIs('admin.messages.index') ? 'active' : '' }}">
                   Lihat Pesan Masuk
                </a>
            </li>
        </ul>
    </li>

    {{-- ===== COMPANY PROFILE ===== --}}
    <li class="menu nav-item">
        <button type="button" class="nav-link group w-full"
            :class="{'active' : activeDropdown === 'company'}"
            @click="activeDropdown === 'company' ? activeDropdown = null : activeDropdown = 'company'">
            <div class="flex items-center">
                <svg class="shrink-0 group-hover:!text-primary" width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.5" d="M3 22V8C3 6.34315 4.34315 5 6 5H18C19.6569 5 21 6.34315 21 8V22H3Z" fill="currentColor"/>
                    <path d="M2 22H22M9 5V2H15V5M9 11H11M13 11H15M9 15H11M13 15H15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Company Profile</span>
            </div>
            <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'company'}">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                    <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </button>
        <ul x-cloak x-show="activeDropdown === 'company'" x-collapse class="sub-menu text-gray-500">
            <li>
                <a href="{{ route('admin.company.edit') }}"
                   class="{{ request()->routeIs('admin.company.*') ? 'active' : '' }}">
                   Edit Profil Perusahaan
                </a>
            </li>
        </ul>
    </li>

</ul>
        </div>
    </nav>
</div>