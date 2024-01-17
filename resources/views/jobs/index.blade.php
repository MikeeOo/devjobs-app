@extends('layouts.default')

@section('content')
    @include('partials.hero')
    @include('partials.search')
    <div class="w-11/12 mx-auto mt-12 max-w-screen-xl">
        <div class="lg:grid lg:grid-cols-2 lg:gap-4 mb-4">
            @foreach ($jobs as $job)
                <x-job-card :job="$job" />
            @endforeach
        </div>
    </div>
@endsection
