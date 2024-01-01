@extends("layouts.default")

@section("content")
    <div
        class="mx-auto flex w-11/12 sm:w-10/12 max-w-md flex-col gap-6 bg-backgroundSecondary sm:mt-36 py-8 px-4 sm:px-8 sm:py-8 rounded-lg"
    >
        <div class="text-center">
            <h2 class="text-2xl font-semibold mb-2">Sign Up</h2>
            <p class="text-sm">Create an account to post gigs</p>
        </div>

        <form action="">
            <div class="form-group">
                <div class="form-field relative pb-2">
                    <label for="name" class="form-label">Full Name</label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        placeholder="e.g., Bonnie Green"
                        class="input input-solid input-rounded max-w-full border border-content3 focus:border-secondary focus:placeholder-[#9750DD]"
                    />
                    <label class="form-label absolute bottom-0 left-0 translate-y-2/3">
                        <span class="form-label-alt text-error font-bold">Please enter a valid name.</span>
                    </label>
                </div>

                <div class="form-field relative pb-2">
                    <label for="email" class="form-label">Your email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Enter your email"
                        class="input input-solid input-rounded max-w-full border border-content3 focus:border-secondary focus:placeholder-[#9750DD]"
                    />
                    <label class="form-label absolute bottom-0 left-0 translate-y-2/3">
                        <span class="form-label-alt text-error font-bold">Please enter a valid email.</span>
                    </label>
                </div>

                <div class="form-field relative pb-2">
                    <label for="password" class="form-label">Password</label>
                    <div class="form-control">
                        <input
                            id="password"
                            name="password"
                            type="password"
                            placeholder="min. 8 chars, 1 special, 1 number"
                            class="input input-rounded input-solid max-w-full border border-content3 focus:border-secondary focus:placeholder-[#9750DD]"
                        />
                    </div>
                    <label class="form-label absolute bottom-0 left-0 translate-y-2/3">
                        <span class="form-label-alt text-error font-bold">Invalid password.</span>
                    </label>
                </div>

                <div class="form-field relative pb-2">
                    <label for="password" class="form-label">Confirm password</label>
                    <div class="form-control">
                        <input
                            id="password"
                            name="password"
                            type="password"
                            placeholder="Repeat your password"
                            class="input input-rounded input-solid max-w-full border border-content3 focus:border-secondary focus:placeholder-[#9750DD]"
                        />
                    </div>
                    <label class="form-label absolute bottom-0 left-0 translate-y-2/3">
                        <span class="form-label-alt text-error font-bold">Passwords do not match.</span>
                    </label>
                </div>

                <div class="form-field pt-5">
                    <div class="form-control">
                        <button type="submit" class="w-24 mx-auto">
                            <span class="btn btn-secondary btn-rounded btn-block">Sign up</span>
                        </button>
                    </div>
                </div>

                <div class="">
                    <div class="form-control justify-center">
                        <a class="link text-content3 text-sm link-underline-hover">Already have an account? Log in.</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
