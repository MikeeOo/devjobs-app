<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use App\Repositories\CompanyRepository;
use App\Repositories\ImageRepository;
use App\Repositories\JobRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class JobController extends Controller
{
    private JobRepository $jobRepository;

    private CompanyRepository $companyRepository;

    protected ImageRepository $imageRepository;

    public function __construct()
    {
        $this->jobRepository = new JobRepository();
        $this->companyRepository = new CompanyRepository();
        $this->imageRepository = new ImageRepository();
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
        $company = $this->companyRepository->create($request->all());

        $this->imageRepository->create($request->file('url'), $request->url->getClientOriginalName(), $company, 'logo');

        $this->jobRepository->create($request->all(), $company);

        return redirect(route('index'))->with('success', 'Listing created successfully!');
    }

    public function show(Job $job): View
    {
        return view('jobs.show', compact('job'));
    }

    public function manage(): View
    {
        $jobs = $this->jobRepository->getAll(8, 1);

        return view('jobs.manage', compact('jobs'));
    }

    public function edit(Job $job): View
    {
        return view('jobs.edit', compact('job'));
    }

    public function update(UpdateJobRequest $request, Job $job): RedirectResponse
    {
        $this->jobRepository->update($job, $request->only('title', 'body'));

        return redirect(route('index'))->with('success', 'Listing updated successfully!');
    }

    public function delete(Job $job): RedirectResponse
    {
        $this->jobRepository->delete($job);

        return redirect(route('index'))->with('success', 'Listing DESTROYED BUHAHAHA!!!');
    }
}
