@extends('components/layout')
@section('createListing')
<div class="flex flex-col justify-center items-center p-24 space-y-4">
    <h1 class="text-4xl">Edit</h1>
  <div class="w-full max-w-xs ">
    <form action="/listings/{{$listing->id}}" method="POST" class="bg-white border border-gray-200 shadow-xl rounded px-8 pt-6 pb-8 mb-4"
      enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="cname">
          Company Name
        </label>
        <input value="{{$listing->company}}" name="company"
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          id="cname" type="text" placeholder="Example: Amazon">
        @error('company')
        <p class="text-red-500 text-xs italic">Please enter your company name.</p>
        @enderror
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="jobtitle">
          Job Title
        </label>
        <input value="{{$listing->title}}" name="title"
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
          id="jobtitle" type="text" placeholder="Example: Laravel Developer">
        @error('title')
        <p class="text-red-500 text-xs italic">Please enter job title.</p>
        @enderror
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="location">
          Location
        </label>
        <input value="{{$listing->location}}" name="location"
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
          id="location" type="text" placeholder="Example: Laravel Developer">
        @error('location')
        <p class="text-red-500 text-xs italic">Please enter location.</p>
        @enderror
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
          Email
        </label>
        <input value="{{$listing->email}}" name="email"
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
          id="email" type="email" placeholder="Example: dev@code.com">
        @error('email')
        <p class="text-red-500 text-xs italic">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="site">
          Website/Application URL
        </label>
        <input value="{{$listing->website}}" name="website"
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
          id="site" type="text">
        @error('website')
        <p class="text-red-500 text-xs italic">Please enter your website.</p>
        @enderror
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="tags">
          Tags(Comma Separated)
        </label>
        <input value="{{$listing->tags}}" name="tags"
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
          id="tags" type="text" placeholder="Example: PHP, Larvel, Blade">
        @error('tags')
        <p class="text-red-500 text-xs italic">Please enter tags.</p>
        @enderror
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="clogo">
          Company Logo
        </label>
        <input name="logo"
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
          id="clogo" type="file" placeholder="">
          <img class="w-48 mr-6 mb-6" src="{{asset('storage/'.$listing->logo)}}" alt="Sunset in the mountains">
        @error('logo')
        <p class="text-red-500 text-xs italic">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="desc">
          Job Description
        </label>
        <textarea name="description"
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
          name="" id="" cols="20" rows="10" placeholder="Include tasks, requirements, salary, etc">{{$listing->description}}</textarea>
        @error('description')
        <p class="text-red-500 text-xs italic">Please enter job description.</p>
        @enderror
      </div>
      <div class="flex items-center justify-between">
        <button type="submit"
          class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
          type="button">
          Update
        </button>
      </div>
    </form>
  </div>
</div>
@endsection