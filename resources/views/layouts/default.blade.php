<!DOCTYPE html>
<html data-theme="dark" lang="en">
    {{-- <html lang="en" data-theme="light" style="color-scheme: dark;" class=" "> --}}
    @include('partials.head')
    <body class="font-headings">
        {{-- <div class="w-full max-w-screen-xl m-auto relative"> --}}
        @include('partials.navbar')
        @include('partials.flash')
        {{-- </div> --}}
        <main class="mt-[60px]">
            @yield('content')
        </main>
        <div class="h-[60px]">
            @include('partials.footer')
        </div>
    </body>
</html>
