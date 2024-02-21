<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListingRequest;
use App\Models\Listing;
use App\Repositories\ListingRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ListingController extends Controller
{
    private ListingRepository $listingRepository;

    public function __construct()
    {
        $this->listingRepository = new ListingRepository();
    }

    public function index(): View
    {
        $listings = $this->listingRepository->getAll(request()->all(), 8, 1);

        return view('listings.index', compact('listings'));
    }

    public function create(): View
    {
        return view('listings.create');
    }

    public function store(ListingRequest $request): RedirectResponse
    {
        $this->listingRepository->store($request);

        return redirect(route('index'))->with('success', 'Listing created successfully!');
    }

    public function show(Listing $listing): View
    {
        return view('listings.show', compact('listing'));
    }

    public function manage(): View
    {
        $listings = $this->listingRepository->getAll([], 8, 1, auth()->user()->listings());

        return view('listings.manage', compact('listings'));
    }

    public function edit(Listing $listing): View
    {
        return view('listings.edit', compact('listing'));
    }

    public function update(ListingRequest $request, Listing $listing): RedirectResponse
    {
        $this->listingRepository->update($listing, $request);

        return redirect(route('index'))->with('success', "$request->title updated!");
    }

    public function delete(Listing $listing): RedirectResponse
    {
        $this->listingRepository->delete($listing);

        return redirect(route('index'))->with('success', 'Listing deleted successfully!');
    }
}
