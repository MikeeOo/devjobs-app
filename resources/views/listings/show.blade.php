@extends('layouts.default')

@section('content')
    <div class="w-11/12 max-w-screen-sm mx-auto py-6">
        <div class="flex flex-col items-center justify-center text-center">
            <img
                src="{{ $listing->logo ? asset('storage/images/' . $listing->logo) : asset('storage/images/placeholder.png') }}"
                alt="logo"
                class="w-36 mb-6"
            />

            <h3 class="text-2xl mb-2">{{ $listing->title }}</h3>
            <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
            <x-listing-tags :tagsCsv="$listing->tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot text-content3 mr-2"></i>
                {{ $listing->location }}
            </div>
            <div class="divider w-full mt-2"></div>
            <div>
                <h3 class="text-3xl font-bold mb-4">Job Description</h3>
                <div class="text-lg space-y-6 px-6">
                    <p class="font-main">
                        {{ $listing->description }}
                    </p>
                    <a
                        href="mailto:{{ $listing->email }}"
                        class="btn btn-rounded btn-outline-secondary text-content1 btn-block mt-6 btn-lg hover:!text-white"
                    >
                        <i class="fa-solid fa-envelope pr-2"></i>
                        Contact Employer
                    </a>
                    <a
                        href="{{ $listing->website }}"
                        class="btn btn-rounded btn-solid-secondary btn-block mt-6 btn-lg"
                    >
                        <i class="fa-solid fa-globe pr-2"></i>
                        Visit Website
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
