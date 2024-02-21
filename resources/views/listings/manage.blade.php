@extends('layouts.default')

@section('content')
    <h1 class="text-3xl text-center font-bold py-6 uppercase">Manage Gigs</h1>
    <div class="mx-4">
        <div class="mx-auto w-full max-w-screen-md overflow-x-auto">
            <table class="table">
                @if (count($listings))
                    <tr>
                        <th>Listing Title</th>
                        <td></td>
                        <td></td>
                    </tr>
                    <tbody>
                    @foreach ($listings as $listing)
                        <tr>
                            <td class="text-lg">
                                <a href="{{ route('listings.show', $listing) }}" class="link link-underline-hover">
                                    {{ $listing->title }}
                                </a>
                            </td>
                            <td class="text-lg">
                                <a href="{{ route('listings.edit', $listing) }}" class="btn btn-solid-primary">
                                    <i class="fa-solid fa-pen-to-square pr-1"></i>
                                    Edit
                                </a>
                            </td>
                            <td class="text-lg">
                                <label for="modal-{{ $listing->id }}" class="btn btn-solid-error">
                                    <i class="fa-solid fa-trash-can pr-1"></i>
                                    Delete
                                </label>
                                <input id="modal-{{ $listing->id }}" type="checkbox" class="modal-state" />
                                <div class="modal">
                                    <label for="modal-{{ $listing->id }}" class="modal-overlay"></label>
                                    <div class="modal-content flex flex-col gap-5">
                                        <h2 class="text-xl">
                                            <span class="text-warning">Delete:</span>
                                            "{{ $listing->title }}"
                                            <span class="text-warning">?</span>
                                        </h2>
                                        <div class="flex gap-3">
                                            <a
                                                href="{{ route('listings.delete', $listing) }}"
                                                class="btn btn-solid-error"
                                            >
                                                <i class="fa-solid fa-trash-can pr-1"></i>
                                                Delete
                                            </a>
                                            <label for="modal-{{ $listing->id }}" class="btn btn-block">Cancel</label>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @else
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <p class="text-center">No Listings Found</p>
                            </td>
                        </tr>
                    @endif
                    </tbody>
            </table>
            <div class="mt-6 p-4 mb-20">{{ $listings->links('vendor.pagination.tailwind') }}</div>
        </div>
    </div>
@endsection
