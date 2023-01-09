<x-layout>

    <form class="m-5" action="/recipes" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label class="inline-block text-lg mb-2" for="title">Title:</label>
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
            <label class="inline-block text-lg mb-2" for="slug">Slug:</label>
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
            <label class="inline-block text-lg mb-2" for="ingredients">Ingredients:</label>
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
            <label class="inline-block text-lg mb-2" for="category">Category:</label>
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
            <label class="inline-block text-lg mb-2" for="instructions">Instructions:</label>
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
            <label for="image" class="inline-block text-lg mb-2">Image :</label>
            <input name="image" type="file" class="border-2 border-black pl-2 py-2 w-full rounded-lg" >

            @error('image')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <input  class="py-1 px-2 border-2 border-orange-600 text-white bg-orange-400 hover:bg-orange-500 rounded-lg" 
        type="submit" value="Submit">
      </form> 
</x-layout>