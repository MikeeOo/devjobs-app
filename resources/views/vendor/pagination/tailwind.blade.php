@if ($paginator->hasPages())
    <nav role="navigation" class="flex items-center justify-center" aria-label="{{ __('Pagination Navigation') }}">
        <div class="flex justify-between flex-1 sm:hidden">
            @if ($paginator->onFirstPage())
                <button disabled class="btn btn-solid-secondary hover:!btn-secondary">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M18 17L13 12L18 7M11 17L6 12L11 7"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-solid-secondary hover:!btn-secondary">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M18 17L13 12L18 7M11 17L6 12L11 7"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </a>
            @endif
            <div class="flex items-center justify-between text-center">
                <div>
                    <p class="text-sm text-content2 leading-5">
                        @if ($paginator->firstItem())
                            <span class="font-medium">{{ $paginator->currentPage() }}</span>
                        @else
                            {{ $paginator->count() }}
                        @endif
                        {!! __('of') !!}
                        <span class="font-medium">{{ $paginator->lastPage() }}</span>
                        {!! __('pages') !!}
                    </p>
                </div>
            </div>

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-solid-secondary hover:!btn-secondary">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M6 17L11 12L6 7M13 17L18 12L13 7"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </a>
            @else
                <button disabled class="btn btn-solid-secondary hover:!btn-secondary">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M6 17L11 12L6 7M13 17L18 12L13 7"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </button>
            @endif
        </div>

        <div class="sm:pagination hidden">
            <span class="relative z-0 inline-flex shadow-sm rounded-md">
                {{-- Previous Page Link --}}

                @if ($paginator->onFirstPage())
                    <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                        <button disabled class="btn mx-0.5 hidden" aria-hidden="true">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </button>
                    </span>
                @else
                    <a
                        href="{{ $paginator->previousPageUrl() }}"
                        class="btn btn-solid-secondary hover:!btn-secondary mx-0.5"
                        aria-label="{{ __('pagination.previous') }}"
                        rel="prev"
                    >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </a>
                @endif
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <span aria-disabled="true">
                            <button disabled class="btn mx-0.5">
                                {{ $element }}
                            </button>
                        </span>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span aria-current="page">
                                    <span class="btn btn-active hover:btn-secondary mx-0.5">
                                        {{ $page }}
                                    </span>
                                </span>
                            @else
                                <a
                                    href="{{ $url }}"
                                    class="btn hover:!btn-secondary mx-0.5"
                                    aria-label="{{ __('Go to page :page', ['page' => $page]) }}"
                                >
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}

                @if ($paginator->hasMorePages())
                    <a
                        href="{{ $paginator->nextPageUrl() }}"
                        class="btn btn-solid-secondary hover:!btn-secondary mx-0.5"
                        aria-label="{{ __('pagination.next') }}"
                        rel="next"
                    >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </a>
                @else
                    <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                        <button disabled class="btn hover:!btn-secondary hidden" aria-hidden="true">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </button>
                    </span>
                @endif
            </span>
        </div>
    </nav>
@endif
