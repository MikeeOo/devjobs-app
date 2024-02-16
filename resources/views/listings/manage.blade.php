@extends('layouts.default')

@section('content')
    <h1 class="text-3xl text-center font-bold py-6 uppercase">Manage Gigs</h1>
    <div class="mx-4">
        <div class="mx-auto w-full max-w-screen-md overflow-x-auto">
            <table class="table">
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
                                <a href="{{ route('jobs.delete', $listing) }}" class="btn btn-solid-error">
                                    <i class="fa-solid fa-trash-can pr-1"></i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-6 p-4 mb-20">{{ $listings->links('vendor.pagination.tailwind') }}</div>
        </div>
    </div>
@endsection
