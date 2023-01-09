<x-layout>

    <h3>Login</h3>
    <form class="m-5" action="/users/authenticate" method="post">
        @csrf

        <div class="mb-6">
            <label class="inline-block text-lg mb-2" for="title">email :</label>
            <input 
            class="border-2 border-black pl-2 py-1 w-full rounded-lg" 
            type="text" 
            id="email" 
            name="email"
            value="{{old('email')}}">

            @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

        </div>
        <div class="mb-6">
            <label class="inline-block text-lg mb-2" for="slug">Password :</label>
            <input class="border-2 border-black pl-2 py-1 w-full rounded-lg" 
            type="password" 
            id="password" 
            name="password">

            @error('password')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <input  class="py-1 px-2 border-2 border-orange-600 text-white bg-orange-400 hover:bg-orange-500 rounded-lg" 
        type="submit" value="Submit">
      </form> 
</x-layout>