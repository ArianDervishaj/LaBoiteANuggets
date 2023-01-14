<x-layout>

    <div class="flex items-center justify-center">
    <form class="my-6 mx-5 md:my-12 px-4 md:px-12 py-6 md:py-12 bg-gray-100 rounded-lg grid-cols-1 md:w-1/2" action="/recipes/{{$recipe->slug}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="flex items-center justify-center text-center">
            <h1 class="text-xl font-bold mb-4">Modifier la recette</h1>
        </div>
            
        <div class="mb-6">
            <label class="inline-block text-lg mb-3 ml-1 font-semibold" for="title">Title:</label>
            <input 
            class="border-2 border-black pl-2 py-1 w-full rounded-lg" 
            type="text" 
            id="title" 
            name="title"
            value="{{$recipe->title}}">

            @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

        </div>

        <div class="mb-6">
            <label class="inline-block text-lg mb-3 ml-1 font-semibold" for="slug">Slug:</label>
            <input class="border-2 border-black pl-2 py-1 w-full rounded-lg" 
            type="text" 
            id="slug" 
            name="slug"
            value="{{$recipe->slug}}">

            @error('slug')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

        </div>

        <div class="mb-6">
            <label class="inline-block text-lg mb-3 ml-1 font-semibold" for="ingredients">Ingredients:</label>
            <textarea 
            placeholder="Lister tous les ingredients en les séparant par une virgule. Ex : fromage, chocolat, tomates" 
            class="border-2 border-black pl-2 py-2 w-full rounded-lg"
            id="ingredients" 
            name="ingredients"
            >{{$recipe->ingredients}}</textarea>
            
            @error('ingredients')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

        </div>

        <div class="mb-6">
            <label class="inline-block text-lg mb-3 ml-1 font-semibold" for="category">Category:</label>
            <input 
            class="border-2 border-black pl-2 py-1 w-full rounded-lg" 
            type="text" 
            id="category" 
            name="category"
            value="{{$recipe->category}}">

            @error('category')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

        </div>

        <div class="mb-6">            
            <label class="inline-block text-lg mb-3 ml-1 font-semibold" for="instructions">Instructions:</label>
            <textarea 
            class="border-2 border-black pl-2 pt-1 pb-20 w-full rounded-lg" 
            id="instructions" 
            placeholder="Lister toutes les étapes en les séparant par un slash. Ex : cuire les pates/ mettre la sauce"
            name="instructions">{{$recipe->instructions}}</textarea>

            @error('instructions')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

        </div>

        <div class="mb-6">
            <label for="image" class="inline-block text-lg mb-3 ml-1 font-semibold">Image :</label>
            <input name="image" type="file" class="border-2 border-black pl-2 py-2 w-full rounded-lg bg-white" >
            <img class="ml-auto mr-auto w-11/12 rounded-md mt-3" 
            src="{{$recipe->image ? asset('storage/' . $recipe->image) : asset('images/no-image.jpg')}}" 
            alt="{{$recipe->title}}">

            @error('image')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <input  class="mt-2 py-2 px-6 text-sm md:text-base text-white bg-black hover:bg-gray-700 rounded-lg"
        type="submit" value="Submit">
      </form> 
    </div>
</x-layout>