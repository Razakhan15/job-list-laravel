@extends('components/layout')
@section('listingContent')
<div class="flex flex-col justify-center items-center m-10 border-2 p-5 space-y-8">
    <img class="w-48 mr-6 mb-6" src="{{asset('storage/'.$listing->logo)}}" alt="Sunset in the mountains">
    <p class="text-2xl font-bold md:text-4xl">Description</p>
    <p class="text-base md:text-xl">{{$listing->description}}</p>
</div>
@endsection