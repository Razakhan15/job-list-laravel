@extends('components/layout')
@section('manageList')
    <div class="flex flex-col justify-center items-center p-10 space-y-5">
        <p class="uppercase text-xl font-bold">Manage Listings</p>
        <ul class="w-9/12 space-y-5 font-bold text-lg">
            @unless ($listings->isEmpty())
                @foreach ($listings as $listing)  
                {{$listing->user_id}}
                <li class="flex flex-col lg:flex-row justify-center lg:justify-between border border-gray-600 p-5">
                    <p>{{$listing->title}}</p>
                    <a class="text-green-500" href="/listings/{{$listing->id}}/edit"> Edit
                    </a>
                    <form method="POST" action="/listings/{{$listing->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">Delete</button>
                    </form>
                </li>
                @endforeach
                @else
                <li><p class="text-center">No Listings Found</p></li>
            @endunless
            
        </ul>
    </div>
@endsection