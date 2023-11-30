@extends('components/layout')
@section('userLogin')
<div class="flex flex-col justify-center items-center p-24 space-y-5">
    <div class="text-2xl">
        Login
    </div>
    <div class="w-full max-w-xs ">
        <form action="/users/authenticate" method="POST"
            class="bg-white border border-gray-200 shadow-xl rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="jobtitle">
                    Email
                </label>
                <input name="email"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" value="{{old('emali')}}" type="email" placeholder="Example: John@mail.com">
                @error('email')
                <p class="text-red-500 text-xs italic">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="location">
                    Password
                </label>
                <input name="password"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="password" type="password">
                @error('password')
                <p class="text-red-500 text-xs italic">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col items-start justify-center space-y-5">
                <button type="submit"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="button">
                    Submit
                </button>
                <div class="flex space-x-2">
                    <p class="text-sm">Don't have an account?</p>
                    <a class="text-green-500 text-sm">Register</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection