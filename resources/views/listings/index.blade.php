@extends('layouts.default')

@section('content')
    <section class="align-center mx-auto flex w-11/12 flex-col justify-center py-12 text-center">
        <h1 class="text-6xl uppercase">
            <span class="text-secondary">FIND</span>
            A NEW JOB...
        </h1>
        <p class="my-4 text-2xl text-content2">or something...</p>
        <div>
            @guest
                <a
                    href="{{ route('signup') }}"
                    class="btn btn-outline-secondary navbar-item px-6 uppercase hover:!text-white"
                >
                    Sign Up to List a Gig
                </a>
            @endguest

            @auth
                <a
                    href="{{ route('listings.create') }}"
                    class="btn btn-outline-secondary navbar-item px-6 uppercase hover:!text-white"
                >
                    Create a Gig
                </a>
            @endauth
        </div>
    </section>
    @include('partials.search')
    <div class="w-11/12 mx-auto mt-12 max-w-screen-xl">
        @if (count($listings))
            <div class="lg:grid lg:grid-cols-2 lg:gap-4 mb-4">
                @foreach ($listings as $listing)
                    <x-listing-card :listing="$listing" />
                @endforeach
            </div>
        @else
            <div class="text-center">
                <p>No listings found</p>
            </div>
        @endif
        <div class="mt-6 p-4 mb-20">
            {{ $listings->appends(request()->query())->links('vendor.pagination.tailwind') }}
        </div>
    </div>
@endsection
