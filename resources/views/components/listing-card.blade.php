@props(['listing'])

<div class="max-w-xs rounded overflow-hidden shadow-lg m-5">
  <img class="w-full"
    src="{{asset('storage/'.$listing->logo)}}"
    alt="Sunset in the mountains">
  <div class="px-6 py-4">
    <a href="{{route('listing.view',['listing'=>$listing->id])}}">
      <div class="font-bold text-xl mb-2">{{$listing->title}}</div>
    </a>
    <div class="text-gray-500 text-xl mb-2">{{$listing->company}}</div>
    <div class="flex flex-row items-center">
      <svg class="h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path
          d="M18,4.48a8.45,8.45,0,0,0-12,12l5.27,5.28a1,1,0,0,0,1.42,0L18,16.43A8.45,8.45,0,0,0,18,4.48ZM16.57,15,12,19.59,7.43,15a6.46,6.46,0,1,1,9.14,0ZM9,7.41a4.32,4.32,0,0,0,0,6.1,4.31,4.31,0,0,0,7.36-3,4.24,4.24,0,0,0-1.26-3.05A4.3,4.3,0,0,0,9,7.41Zm4.69,4.68a2.33,2.33,0,1,1,.67-1.63A2.33,2.33,0,0,1,13.64,12.09Z" />
      </svg>
      <div>{{$listing->location}}
      </div>
    </div>
    {{-- <p class="text-gray-700 text-base">
      {{$listing->description}}
    </p> --}}
  </div>
  <div class="px-6 pt-4 pb-2">
    <x-listing-tags :tagsCsv="$listing->tags" />
  </div>
</div>