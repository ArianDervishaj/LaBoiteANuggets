<x-layout>

    <h3>Edit {{$recipe->title}}</h3>
    <form class="m-5" action="/recipes/{{$recipe->slug}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label class="inline-block text-lg mb-2" for="title">Title:</label>
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
            <label class="inline-block text-lg mb-2" for="slug">Slug:</label>
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
            <label class="inline-block text-lg mb-2" for="ingredients">Ingredients:</label>
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
            <label class="inline-block text-lg mb-2" for="category">Category:</label>
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
            <label class="inline-block text-lg mb-2" for="instructions">Instructions:</label>
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
            <label for="image" class="inline-block text-lg mb-2">Image :</label>
            <input name="image" type="file" class="border-2 border-black pl-2 py-2 w-full rounded-lg" >
            <img class="ml-auto mr-auto w-11/12 rounded-md mt-3" 
            src="{{$recipe->image ? asset('storage/' . $recipe->image) : asset('images/no-image.jpg')}}" 
            alt="{{$recipe->title}}">

            @error('image')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <input  class="py-1 px-2 border-2 border-orange-600 text-white bg-orange-400 hover:bg-orange-500 rounded-lg" 
        type="submit" value="Submit">
      </form> 
</x-layout>