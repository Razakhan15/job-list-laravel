@auth
<span class="text-sm lg:text-lg font-bold uppercase">{{auth()->user()->name}}</span>
<a href="/listings/manage"
    class="text-sm lg:text-lg py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">Manage
    Listings</a>   
    <form action="/logout" method="post">
        @csrf
        <button type="submit" class="font-bold text-green-500 hover:text-green-400 transition duration-300">Logout</button>
    </form> 
@else
<a href="/login"
    class="text-sm lg:text-lg py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">Log
    In</a>
<a href="/register"
    class="text-sm lg:text-lg py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">Sign
    Up</a>
@endauth