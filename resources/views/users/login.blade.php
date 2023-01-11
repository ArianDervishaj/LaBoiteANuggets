<x-layout>

    <h3 class="my-4 ml-2 font-semibold text-lg">Connexion</h3>
    <hr>

    <form class="my-6 mx-5 px-4 py-6 bg-gray-100 rounded-lg grid-cols-1" action="/users/authenticate" method="post">
        @csrf
        <div class="mb-6">
            <label class="inline-block text-lg mb-3 ml-1 font-semibold" for="title">Email :</label>
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
            <label class="inline-block text-lg mb-3 ml-1 font-semibold" for="password">Mot de passe :</label>
            <input class="border-2 border-black pl-2 py-1 w-full rounded-lg" 
            type="password" 
            id="password" 
            name="password">
            
            @error('password')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        
        <input  class="mt-2 py-2 px-6 text-sm text-white bg-black hover:bg-gray-700 rounded-lg" 
        type="submit" value="SE CONNECTER">
    </form> 

</x-layout>