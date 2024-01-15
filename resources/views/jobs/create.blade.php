@extends('layouts.default')

@section('content')
    <div class="w-11/12 max-w-md mx-auto py-6">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Create a Gig</h2>
            <p class="mb-4">Post a gig to find a developer</p>
        </header>
        <form action="">
            <div class="form-group">
                <div class="form-field mb-2 relative pb-2">
                    <label for="company" class="form-label text-lg">Company Name</label>
                    <input
                        id="company"
                        name="company"
                        type="text"
                        placeholder="e.g., Acme Corp"
                        class="input input-solid max-w-full border border-content3 focus:border-2 focus:border-secondary focus:placeholder-[#9750DD]"
                    />
                    <label class="form-label absolute bottom-0 left-0 translate-y-2/3">
                        <span class="form-label-alt text-error font-bold">Please enter a valid company name.</span>
                    </label>
                </div>
                <div class="form-field mb-2 relative pb-2">
                    <label for="title" class="form-label text-lg">Job Title</label>
                    <input
                        id="title"
                        name="title"
                        type="text"
                        placeholder="e.g., Senior Laravel Developer"
                        class="input input-solid max-w-full border border-content3 focus:border-2 focus:border-secondary focus:placeholder-[#9750DD]"
                    />
                    <label class="form-label absolute bottom-0 left-0 translate-y-2/3">
                        <span class="form-label-alt text-error font-bold">Please enter a valid job title.</span>
                    </label>
                </div>
                <div class="form-field mb-2 relative pb-2">
                    <label for="location" class="form-label text-lg">Job Location</label>
                    <input
                        id="location"
                        name="location"
                        type="text"
                        placeholder="e.g., Remote, Boston MA, etc"
                        class="input input-solid max-w-full border border-content3 focus:border-2 focus:border-secondary focus:placeholder-[#9750DD]"
                    />
                    <label class="form-label absolute bottom-0 left-0 translate-y-2/3">
                        <span class="form-label-alt text-error font-bold">Please enter a valid job location.</span>
                    </label>
                </div>
                <div class="form-field mb-2 relative pb-2">
                    <label for="email" class="form-label text-lg">Contact Email</label>
                    <input
                        id="email"
                        name="email"
                        type="text"
                        placeholder="e.g., work@company.com"
                        class="input input-solid max-w-full border border-content3 focus:border-2 focus:border-secondary focus:placeholder-[#9750DD]"
                    />
                    <label class="form-label absolute bottom-0 left-0 translate-y-2/3">
                        <span class="form-label-alt text-error font-bold">Please enter a valid email.</span>
                    </label>
                </div>
                <div class="form-field mb-2 relative pb-2">
                    <label for="website" class="form-label text-lg">Website/Application URL</label>
                    <input
                        id="website"
                        name="website"
                        type="text"
                        placeholder="e.g., www.work.company.com"
                        class="input input-solid max-w-full border border-content3 focus:border-2 focus:border-secondary focus:placeholder-[#9750DD]"
                    />
                    <label class="form-label absolute bottom-0 left-0 translate-y-2/3">
                        <span class="form-label-alt text-error font-bold">Please enter a valid company website.</span>
                    </label>
                </div>
                <div class="form-field mb-2 relative pb-2">
                    <label for="tags" class="form-label text-lg">Tags (Comma Separated)</label>
                    <input
                        id="tags"
                        name="tags"
                        type="text"
                        placeholder="e.g., Laravel, Backend, Postgres, etc."
                        class="input input-solid max-w-full border border-content3 focus:border-2 focus:border-secondary focus:placeholder-[#9750DD]"
                    />
                    <label class="form-label absolute bottom-0 left-0 translate-y-2/3">
                        <span class="form-label-alt text-error font-bold">Please enter a valid tags.</span>
                    </label>
                </div>
                <div class="form-field mb-2 relative pb-2">
                    <label for="logo" class="form-label text-lg">Company Logo</label>
                    <input
                        id="logo"
                        name="logo"
                        type="file"
                        class="input-file max-w-full bg-transparent file:bg-[#9750DD] border border-[#767676] file:text-white"
                    />
                    <label class="form-label absolute bottom-0 left-0 translate-y-2/3">
                        <span class="form-label-alt text-error font-bold">Please choose a file.</span>
                    </label>
                </div>
                <div class="form-field mb-2 relative pb-2">
                    <label for="description" class="form-label text-lg">Job Description</label>
                    <textarea
                        id="description"
                        name="body"
                        rows="10"
                        placeholder="Include tasks, requirements, salary, etc"
                        class="textarea textarea-solid max-w-full focus:border-2 focus:border-secondary focus:placeholder-[#9750DD]"
                    ></textarea>
                    <label class="form-label absolute bottom-0 left-0 translate-y-2/3">
                        <span class="form-label-alt text-error font-bold">Please enter a valid description.</span>
                    </label>
                </div>
                <div class="flex mt-2 btn-group btn-group-scrollable">
                    <div class="form-control">
                        <button type="submit">
                            <span class="btn btn-secondary text-base rounded-none rounded-l-lg">Create Gig</span>
                        </button>
                    </div>
                    <div>
                        <a href="/" class="btn btn-solid-secondary text-base rounded-none rounded-r-lg">Back</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
