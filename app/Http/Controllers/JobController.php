<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobRequest;
use App\Repositories\JobRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class JobController extends Controller
{
    private JobRepository $jobRepository;

    public function __construct()
    {
        $this->jobRepository = new JobRepository();
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $jobs = $this->jobRepository->getAll();

        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateJobRequest $request): RedirectResponse
    {
        $this->jobRepository->create($request->all());

        return redirect('/')->with('success', 'Listing created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
