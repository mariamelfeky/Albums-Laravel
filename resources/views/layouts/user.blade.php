@include('layouts.head')
@include('layouts.userNavbar')

<main class="py-4">
    @yield('content')
</main>

@include('layouts.footer')
@include('layouts.scripts')