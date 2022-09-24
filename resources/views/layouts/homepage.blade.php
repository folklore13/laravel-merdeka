<!DOCTYPE html>
<html lang="en">
    <head>
        <title> @yield('title') </title>
        {{--Style--}}
        @stack('prepend-style')
        @include('includes.homepage.style')
        @stack('addon-style')
    </head>
    <body>
        {{-- Header --}}
        @include('includes.homepage.header')
        <main>
            @yield('about')
            @yield('discography')
        </main>
        {{-- Footer --}}
        @include('includes.homepage.footer')

        {{-- Script --}}
        @stack('prepend-script')
        @include('includes.homepage.script')
        @stack('addon-script')
    </body>
</html>