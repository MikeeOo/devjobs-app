<section class="align-center mx-auto flex w-11/12 flex-col justify-center py-12 text-center">
    <h1 class="text-6xl uppercase">
        <span class="text-secondary">FIND</span>
        A NEW JOB...
    </h1>
    <p class="my-4 text-2xl text-content2">or something...</p>
    <div>
        @guest
            <a
                href="{{ route('register.view') }}"
                class="btn btn-outline-secondary navbar-item px-6 uppercase hover:!text-white"
            >
                Sign Up to List a Gig
            </a>
        @endguest

        @auth
            <a
                href="{{ route('jobs.create') }}"
                class="btn btn-outline-secondary navbar-item px-6 uppercase hover:!text-white"
            >
                Create a Gig
            </a>
        @endauth
    </div>
</section>
