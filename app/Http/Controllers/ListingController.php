<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Listing;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ListingController extends Controller
{
    public function __construct()
    {
    }

    public function index(): View
    {
        $jobs = $this->jobRepository->getAll(8, 1);

        return view('jobs.index', compact('jobs'));
    }

    public function create(): View
    {
        return view('jobs.create');
    }

    public function store(CreateJobRequest $request): RedirectResponse
    {
        $this->jobRepository->create($request->all());

        return redirect(route('index'))->with('success', 'Listing created successfully!');
    }

    public function show(Listing $listing): View
    {
        return view('jobs.show', compact('listing'));
    }

    public function manage(): View
    {
        $jobs = $this->jobRepository->getAll(8, 1);

        return view('jobs.manage', compact('jobs'));
    }

    public function edit(Listing $job): View
    {
        return view('jobs.edit', compact('job'));
    }

    public function update(UpdateJobRequest $request, Listing $listing): RedirectResponse
    {
        $this->jobRepository->update($listing, $request->only('title', 'body'));

        return redirect(route('index'))->with('success', 'Listing updated successfully!');
    }

    public function delete(Listing $listing): RedirectResponse
    {
        $this->jobRepository->delete($listing);

        return redirect(route('index'))->with('success', 'Listing DESTROYED BUHAHAHA!!!');
    }
}
