@props([
    'tagsCsv',
])
@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="inline-block">
    @foreach ($tags as $tag)
        <li class="btn btn-solid-secondary btn-rounded px-3 mr-2 mt-1 mb-1 btn-xs">
            <a href="/?tag={{ $tag }}">{{ $tag }}</a>
        </li>
    @endforeach
</ul>
