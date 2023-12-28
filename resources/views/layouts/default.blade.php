<!DOCTYPE html>
<html lang="en" data-theme="dark">
    {{-- <html lang="en" data-theme="light" style="color-scheme: dark;" class=" "> --}}
    @include("partials.head")
    <body class="font-headings">
        @include("partials.navbar")
        <main class="mt-[60px]">
            @yield("content")
        </main>
        <div class="h-[60px]">
            @include("partials.footer")
        </div>
    </body>
</html>
