<x-layout>
    <div class="flex items-center justify-center">

    <form class="my-6 mx-5 md:my-12 px-4 md:px-12 py-6 md:py-12 bg-gray-100 rounded-lg grid-cols-1 md:w-1/2" action="/recipes" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex items-center justify-center text-center">
            <h1 class="text-xl font-bold mb-6">Nouvelle recette</h1>
        </div>

        <div class="mb-6">
            <label class="inline-block text-lg mb-3 ml-1 font-semibold" for="title">Nom de la recette :</label>
            <input 
            class="border-2 border-black pl-2 py-1 w-full rounded-lg" 
            type="text" 
            id="title" 
            name="title"
            value="{{old('title')}}">

            @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

        </div>

        <div class="mb-6">
            <label class="inline-block text-lg mb-3 ml-1 font-semibold" for="slug">SLUG :</label>
            <input class="border-2 border-black pl-2 py-1 w-full rounded-lg" 
            type="text" 
            id="slug" 
            name="slug"
            value="{{old('slug')}}">

            @error('slug')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

        </div>

        <div class="mb-6">
            <label class="inline-block text-lg mb-3 ml-1 font-semibold" for="ingredients">Ingredients :</label>
            <textarea 
            placeholder="Lister tous les ingredients en les séparant par une virgule. Ex : fromage, chocolat, tomates" 
            class="border-2 border-black pl-2 py-2 w-full rounded-lg"
            id="ingredients" 
            name="ingredients"
            >{{old('ingredients')}}</textarea>
            
            @error('ingredients')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

        </div>

        <div class="mb-6">
            <label class="inline-block text-lg mb-3 ml-1 font-semibold" for="category">Categorie :</label>
            <input 
            class="border-2 border-black pl-2 py-1 w-full rounded-lg" 
            type="text" 
            id="category" 
            name="category"
            value="{{old('category')}}">

            @error('category')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

        </div>

        <div class="mb-6">            
            <label class="inline-block text-lg mb-3 ml-1 font-semibold" for="instructions">Préparation :</label>
            <textarea 
            class="border-2 border-black pl-2 pt-1 pb-20 w-full rounded-lg" 
            id="instructions" 
            placeholder="Lister toutes les étapes en les séparant par un slash. Ex : cuire les pates/ mettre la sauce"
            name="instructions">{{old('instructions')}}</textarea>

            @error('instructions')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

        </div>

        <div class="mb-6">
            <label for="image" class="inline-block text-lg mb-3 ml-1 font-semibold">Image :</label>
            <input name="image" type="file" class="border-2 border-black pl-2 py-2 w-full rounded-lg bg-white" >

            @error('image')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <input  class="mt-2 py-2 px-6 text-sm md:text-base text-white bg-black hover:bg-gray-700 rounded-lg"  
        type="submit" value="ENREGISTRER">
      </form> 
    </div>
</x-layout>