@if (session()->has('success'))
    <script type="module">
        handleFlashMessage();
    </script>
    <div id="flash" class="bg-green-300 max-w-screen-xl m-auto relative">
        <div
            class="alert alert-success max-w-sm backdrop-blur-sm bg-green-600/40 z-50 absolute right-[50%] mt-[-60px] translate-x-[50%] rounded-t-none border-green-800 border-t-2"
        >
            <button id="flash-close" class="btn btn-circle btn-outline-success">
                <i class="fa-solid fa-check"></i>
            </button>
            <div class="flex w-full justify-between">
                <div class="flex flex-col">
                    <span>Message</span>
                    <span class="text-content2">{{ session('success') }}</span>
                </div>
            </div>
            <div id="counter" class="pr-2 text-content2">05...</div>
        </div>
    </div>
@endif
