@extends('components/layout')
@section('content')
<div class="flex flex-row flex-wrap justify-center ">
  @unless (count($listings) == 0)
  @foreach ($listings as $listing)
  <x-listing-card :listing="$listing" />
  @endforeach
  @endunless
</div>
<div class="mt-6 p-4">
  {{$listings->links()}}
</div>
@endsection