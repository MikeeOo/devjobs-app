@props([
    'tagsCsv',
])
@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
    @foreach ($tags as $tag)
        <li class="btn btn-solid-secondary btn-rounded px-3 mr-2 btn-xs">
            <a href="#">{{ $tag }}</a>
        </li>
    @endforeach
</ul>
