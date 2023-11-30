@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

@foreach ($tags as $tag)
<a href="?tag={{$tag}}"><span
class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$tag}}</span></a>
@endforeach