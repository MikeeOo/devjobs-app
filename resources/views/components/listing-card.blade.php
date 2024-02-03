@props([
    'listing',
])
<div class="bg-backgroundSecondary rounded-lg mb-4 lg:mb-0">
    <div class="flex">
        <img
            src="{{ url('storage/images/' . $listing->logo) }}"
            alt=""
            class="hidden md:block rounded-l-lg w-48 h-48"
        />
        <div class="flex justify-center items-center md:ml-6 md:py-0 pr-3 ml-8 py-4">
            <div>
                <h3 class="text-2xl link-underline-hover hover:text-content2">
                    <a href="{{ route('jobs.show', $listing->id) }}">{{ $listing->title }}</a>
                </h3>
                <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
                <ul class="flex">
                    <li class="btn btn-solid-secondary btn-rounded px-3 mr-2 btn-xs">
                        <a href="#">Node.js</a>
                    </li>
                    <li class="btn btn-solid-secondary btn-rounded px-3 mr-2 btn-xs">
                        <a href="#">React</a>
                    </li>
                    <li class="btn btn-solid-secondary btn-rounded px-3 mr-2 btn-xs">
                        <a href="#">API</a>
                    </li>
                    <li class="btn btn-solid-secondary btn-rounded px-3 mr-2 btn-xs">
                        <a href="#">Docker</a>
                    </li>
                </ul>
                <div class="text-lg mt-4">
                    <i class="fa-solid fa-location-dot text-content3 mr-2"></i>
                    {{ $listing->location }}
                </div>
            </div>
        </div>
    </div>
</div>
