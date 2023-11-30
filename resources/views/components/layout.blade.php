@include('components.header')

    <x-flash-message/>
    @yield('content')
    @yield('listingContent')
    @yield('createListing')
    @yield('userRegister')
    @yield('userLogin')
    @yield('manageList')
    @yield('mainPage')

@include('components.footer')
    