<x-layout>
<div class="flex items-center justify-center">

    <form class="my-6 mx-5 md:my-12 px-4 md:px-12 py-6 md:py-12 bg-gray-100 rounded-lg grid-cols-1 md:w-1/3" action="/users" method="post">
        @csrf

        <h1 class="text-xl font-bold mb-6">
            Créer un compte
        </h1>

        <div class="mb-6">
            <label class="inline-block text-lg mb-3 ml-1 font-semibold" for="title">Pseudo :</label>
            <input 
            class="border-2 border-black pl-2 py-1 w-full rounded-lg" 
            type="text" 
            id="name" 
            name="name"
            value="{{old('name')}}">

            @error('name')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
            
        </div>
        <div class="mb-6">
            <label class="inline-block text-lg mb-3 ml-1 font-semibold" for="email">Email :</label>
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
        
        <div class="mb-6">
            <label class="inline-block text-lg mb-3 ml-1 font-semibold" for="password">Confirmer le mot de passe :</label>
            <input class="border-2 border-black pl-2 py-1 w-full rounded-lg" 
            type="password" 
            id="password_confirmation" 
            name="password_confirmation">
            
            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        
        <input  class="mt-2 py-2 px-6 text-sm text-white bg-black hover:bg-gray-700 rounded-lg" 
        type="submit" value="ENREGISTRER">
        
    </form> 
</div>
</x-layout>