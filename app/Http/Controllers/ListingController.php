<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateListingRequest;
use App\Http\Requests\UpdateListingRequest;
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
        $listings = $this->listingRepository->getScopedAndPaginated(request(['tag', 'search']), 8, 1);

        return view('listings.index', compact('listings'));
    }

    public function create(): View
    {
        return view('jobs.create');
    }

    public function store(CreateListingRequest $request): RedirectResponse
    {
        $this->listingRepository->create($request->all());

        return redirect(route('index'))->with('success', 'Listing created successfully!');
    }

    public function show(Listing $listing): View
    {
        return view('listings.show', compact('listing'));
    }

    public function manage(): View
    {
        $listings = $this->listingRepository->getAll(8, 1);

        return view('jobs.manage', compact('listings'));
    }

    public function edit(Listing $listing): View
    {
        return view('jobs.edit', compact('listing'));
    }

    public function update(UpdateListingRequest $request, Listing $listing): RedirectResponse
    {
        $this->listingRepository->update($listing, $request->all());

        return redirect(route('index'))->with('success', 'Listing updated successfully!');
    }

    public function delete(Listing $listing): RedirectResponse
    {
        $this->listingRepository->delete($listing);

        return redirect(route('index'))->with('success', 'Listing DESTROYED BUHAHAHA!!!');
    }
}
