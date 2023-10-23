<nav class="absolute md:relative w-64 transform -translate-x-full md:translate-x-0 h-screen overflow-y-scroll bg-black transition-all duration-300"
    :class="{ '-translate-x-full': !navOpen }">
    <div class="flex flex-col justify-between h-full">
        <div class="p-4">
            <!-- LOGO -->

            <x-nav.logo/>

            <!-- SEARCH BAR -->
            <x-nav.search-Bar/>

            <!-- NAV LINKS -->
            <x-nav.nav-Links/>

        </div>
        <!-- PROFILE -->
        <x-nav.profile/>

    </div>
</nav>
