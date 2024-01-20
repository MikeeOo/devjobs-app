@extends('layouts.default')

@section('content')
    <script type="module">
        handleErrors();
    </script>
    <div
        class="mx-auto flex w-11/12 max-w-md flex-col gap-6 rounded-lg bg-backgroundSecondary px-4 py-8 sm:mt-36 sm:w-10/12 sm:px-8 sm:py-8"
    >
        <div class="text-center">
            <h2 class="mb-2 text-2xl font-semibold">Sign In</h2>
            <p class="text-sm">Sign in to access your account</p>
        </div>
        <form method="post" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <div class="form-field relative pb-2">
                    <label for="email" class="form-label">Email address</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        value="{{ old('email') }}"
                        placeholder="Enter your email"
                        class="input input-rounded input-solid max-w-full border border-content3 focus:border-secondary focus:placeholder-[#9750DD]"
                    />
                    @error('email')
                        <label class="form-label absolute bottom-0 left-0 translate-y-2/3">
                            <span class="form-label-alt font-bold text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <div class="form-field relative pb-2">
                    <label for="password" class="form-label">Password</label>
                    <div class="form-control">
                        <input
                            id="password"
                            name="password"
                            type="password"
                            placeholder="Enter password"
                            autocomplete="on"
                            class="input input-rounded input-solid max-w-full border border-content3 focus:border-secondary focus:placeholder-[#9750DD]"
                        />
                    </div>
                    @error('password')
                        <label class="form-label absolute bottom-0 left-0 translate-y-2/3">
                            <span class="form-label-alt font-bold text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>
                {{-- Remember me & password recovery --}}
                {{-- <div class="form-field"> --}}
                {{-- <div class="form-control justify-between"> --}}
                {{-- <div class="flex gap-2"> --}}
                {{-- <input type="checkbox" class="checkbox" /> --}}
                {{-- <a href="#">Remember me</a> --}}
                {{-- </div> --}}
                {{-- <label class="form-label"> --}}
                {{-- <a class="link link-underline-hover link-primary text-sm">Forgot your password?</a> --}}
                {{-- </label> --}}
                {{-- </div> --}}
                {{-- </div> --}}
                <div class="form-field pt-5">
                    <div class="form-control">
                        <button type="submit" class="mx-auto w-24">
                            <span class="btn btn-secondary btn-block btn-rounded">Sign in</span>
                        </button>
                    </div>
                </div>

                <div class="form-control justify-center">
                    <a href="{{ route('signup') }}" class="link link-underline-hover text-sm text-content3">
                        Don't have an account yet? Sign up.
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection
