<nav class="navbar navbar-glass navbar-sticky">
    <div class="w-full max-w-screen-xl m-auto flex">
        <div class="navbar-start">
            <a href="/" class="btn btn-ghost text-2xl navbar-item">
                <span class="text-secondary font-bold">DEV</span>
                JOBS
            </a>
        </div>
        <ul class="navbar-end uppercase">
            @guest
                <li>
                    <a href="{{ route('login') }}" class="link navbar-item text-sm text-content1 link-underline-hover">
                        Log in
                    </a>
                </li>
                <li>
                    <a href="{{ route('signup') }}" class="btn btn-outline-secondary navbar-item hover:!text-white">
                        Sign up
                    </a>
                </li>
            @endguest

            @auth
                <li>
                    <a
                        href="{{ route('jobs.manage') }}"
                        class="link navbar-item text-sm text-content1 link-underline-hover"
                    >
                        Manage jobs
                    </a>
                </li>
                <li>
                    <a
                        href="{{ route('jobs.create') }}"
                        class="link navbar-item text-sm text-content1 link-underline-hover"
                    >
                        Create a job
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" class="btn btn-outline-secondary navbar-item hover:!text-white">
                        Log out
                    </a>
                </li>
            @endauth
        </ul>
    </div>
</nav>
