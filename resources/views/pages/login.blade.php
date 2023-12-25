@extends('layouts.default')

@section('content')
<div class="mx-auto flex w-11/12 sm:w-10/12 max-w-md flex-col gap-6 bg-backgroundSecondary sm:mt-36 py-8 px-4 sm:px-8 sm:py-8 rounded-lg">
    <div class="text-center">
        <h2 class="text-2xl font-semibold mb-2">Sign In</h2>
        <p class="text-sm">Sign in to access your account</p>
    </div>

    <form action="">
        <div class="form-group">
            <div class="form-field relative pb-2">
                <label class="form-label" for="email">Email address</label>
                <input placeholder="Enter your email" type="email" name="email" id="email"
                        class="input input-solid input-rounded max-w-full border border-content3 focus:border-secondary focus:placeholder-[#9750DD]" />

                <label class="form-label absolute bottom-0 left-0 translate-y-2/3"><span class="form-label-alt text-error font-bold">Please enter a valid email.</span></label>

            </div>

            <div class="form-field relative pb-2">
                <label class="form-label" for="password">Password</label>
                <div class="form-control">
                    <input placeholder="Enter password" type="password" name="password" id="password"
                            class="input input-rounded input-solid max-w-full border border-content3 focus:border-secondary focus:placeholder-[#9750DD]" />
                </div>

                <label class="form-label absolute bottom-0 left-0 translate-y-2/3"><span class="form-label-alt text-error font-bold">Invalid password.</span></label>

            </div>

{{--Remember me & password recovery--}}
{{--            <div class="form-field">--}}
{{--                <div class="form-control justify-between">--}}
{{--                    <div class="flex gap-2">--}}
{{--                        <input type="checkbox" class="checkbox" />--}}
{{--                        <a href="#">Remember me</a>--}}
{{--                    </div>--}}
{{--                    <label class="form-label">--}}
{{--                        <a class="link link-underline-hover link-primary text-sm">Forgot your password?</a>--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="form-field pt-5">
                <div class="form-control">
                    <button type="submit" class="w-24 mx-auto"><span class="btn btn-secondary btn-rounded btn-block">Sign in</span></button>
                </div>
            </div>

            <div class="">
                <div class="form-control justify-center">
                    <a class="link text-content3 text-sm link-underline-hover">Don't have an account yet? Sign up.</a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
