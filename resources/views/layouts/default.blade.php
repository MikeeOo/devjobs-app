<!doctype html>
<html lang="en" data-theme="dark">
{{--<html lang="en" data-theme="light" style="color-scheme: dark;" class=" ">--}}
@include('partials.head')
<body>
@include('partials.navbar')
<main class="mt-[60px]">
@yield('content')
</main>
</body>
</html>
