<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

    <body x-data="main" class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased" :class="[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ?  'dark' : '', $store.app.menu, $store.app.layout,$store.app.rtlClass]">


    @include('partials.sidebar')
    @include('partials.navbar')

    @yield('content')
    @include('layouts.footer')
</body>
</html>
