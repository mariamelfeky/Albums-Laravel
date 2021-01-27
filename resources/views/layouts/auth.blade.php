@include('layouts.head')

<div class="logo text-center">
    <a class="navbar-brand" href="/"><img src="{{ asset('images/logo-m.png')}}" data-src="{{ asset('images/logo-m.png')}}"
        class="lazyload"></a>
</div>
<main class="py-4">
    @yield('content')
</main>

<footer class="pt-0"> 
    <div class="copyrights">
        <p>© All Rights reserved to Smart Movies website 2017</p>
    </div>
</footer>
<span class="scroll-top"> <a href="#"><i class="fas fa-chevron-up"></i></a> </span>

@include('layouts.scripts')