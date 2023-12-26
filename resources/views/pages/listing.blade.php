@extends('layouts.default')

@section('content')
<div class="w-11/12 max-w-screen-sm mx-auto py-6">
    <div class="flex flex-col items-center justify-center text-center">
        <img class="w-36  mb-6" src="{{url('storage/images/digital-logo.png')}}" alt=""/>
        <h3 class="text-2xl mb-2">Full Stack JavaScript Developer</h3>
        <div class="text-xl font-bold mb-4">DigitalSprint Innovations</div>
        <ul class="flex">
            <li class="btn btn-solid-secondary btn-rounded mr-2 btn-sm"><a href="#">Node.js</a></li>
            <li class="btn btn-solid-secondary btn-rounded mr-2 btn-sm"><a href="#">React</a></li>
            <li class="btn btn-solid-secondary btn-rounded mr-2 btn-sm"><a href="#">API</a></li>
            <li class="btn btn-solid-secondary btn-rounded mr-2 btn-sm"><a href="#">Docker</a></li>
        </ul>
        <div class="text-lg mt-4"><i class="fa-solid fa-location-dot text-content3 mr-2"></i>Chicago, IL</div>
        <div class="divider w-full mt-2"></div>
        <div>
            <h3 class="text-3xl font-bold mb-4">Job Description</h3>
            <div class="text-lg space-y-6 px-6">
                <p class="font-main">
                    Vibecession heirloom ugh post-ironic scenester, edison bulb tote bag. Tbh praxis fingerstache, man braid gluten-free disrupt venmo roof party gentrify everyday carry dreamcatcher Brooklyn sriracha.
                </p>
                <p class="font-main">
                    Ethical biodiesel health goth cupping quinoa tumblr palo santo air plant, marfa everyday carry beard cloud bread live-edge. Jawn bushwick hashtag vinyl distillery, flannel lo-fi DSA four loko pabst photo booth.
                </p>
                <a href="" class="btn btn-rounded btn-outline-secondary text-content1 btn-block mt-6 btn-lg hover:!text-white"><i class="fa-solid fa-envelope pr-2"></i>Contact Employer</a>
                <a href="" class="btn btn-rounded btn-solid-secondary btn-block mt-6 btn-lg"><i class="fa-solid fa-globe pr-2"></i> Visit Website</a>
            </div>
        </div>
    </div>
</div>
@endsection
