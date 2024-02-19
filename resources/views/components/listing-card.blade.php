@props([
    'listing',
])
<div class="bg-backgroundSecondary rounded-lg mb-4 lg:mb-0">
    <div class="flex">
        @if ($listing->logo)
            <img
                src="{{ str_starts_with($listing->logo, 'https://via.placeholder.com/') ? $listing->logo : asset('storage/images/' . $listing->logo) }}"
                alt="logo"
                class="hidden md:block rounded-l-lg w-48 h-48"
            />
        @endif

        <div class="flex justify-center items-center md:ml-6 md:py-0 pr-3 ml-8 py-4">
            <div>
                <h3 class="text-2xl link-underline-hover hover:text-content2">
                    <a href="{{ route('listings.show', $listing->id) }}">{{ $listing->title }}</a>
                </h3>
                <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
                <x-listing-tags :tagsCsv="$listing->tags" />
                <div class="text-lg mt-4">
                    <i class="fa-solid fa-location-dot text-content3 mr-2"></i>
                    {{ $listing->location }}
                </div>
            </div>
        </div>
    </div>
</div>
