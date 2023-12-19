@extends('layouts.default')

@section('content')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-2 md:space-y-0 mx-4">

        <div class="bg-gray-900 rounded p-6">
            <div class="flex">
                <a href="{{route('post_view')}}" >
                    <div class="w-48 h-48 bg-gray-500 flex justify-center items-center rounded">
                        IMG PLACEHOLDER
                    </div>
                </a>
                <div>
                    <h3 class="text-2xl pl-4">
                        <a href="{{route('post_view')}}">Post title</a>
                    </h3>
                </div>
            </div>
        </div>
    </div>

@endsection
