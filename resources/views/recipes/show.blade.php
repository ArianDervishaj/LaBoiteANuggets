@php
$listeIngredients = Str::of($recipe->ingredients)->explode(', ');
$listeCategories = Str::of($recipe->category)->explode(', ');
$listeInstruction = Str::of($recipe->instructions)->explode('/ ');
@endphp

<x-layout>

<div class="bg-white w-screen md:flex md:flex-wrap">

    
    <h2 class="mx-5 font-bold text-3xl pt-5 mb-5 md:w-full md:text-5xl md:mt-7 md:mb-10 md:mx-10">{{$recipe->title}}</h2>
    
    <div class="h-[34rem] md:w-1/2 md:h-[50rem] md:ml-10">
    
        <img class="h-[34rem] md:h-[50rem] object-cover bg-gray-200 w-full" 
        src="{{$recipe->image ? asset('storage/' . $recipe->image) : asset('images/no-image.jpg')}}" 
        alt="{{$recipe->title}}">
        
    </div>

    <div class="mt-5 mx-5 md:ml-10 md:w-1/3">
        <h3 class="text-lg font-semibold md:text-3xl">Catégories</h3>
        <div class="flex flex-wrap justify-center items-center mt-3">

                @foreach($listeCategories as $category)
                    <a
                    href="/recipes/?category={{$category}}" 
                    class="bg-gray-300 hover:bg-gray-400 px-4 py-2 mx-2 my-2 rounded-xl text-black md:text-xl">
                        {{$category}}
                    </a>
                @endforeach

        </div>
    </div>


    <div x-data="{ showIngredients: {{ $showIngredients }}}" class="bg-white p-6 flex-col text-center md:w-full md:mt-10">
        <button @click="showIngredients = !showIngredients" class="bg-black hover:bg-gray-500 text-white py-2 px-4 rounded md:text-3xl">
            <span>Afficher  </span>
            <span x-text="showIngredients ? 'la preparation' : 'les ingredients'"></span>
        </button>
        <div class="md:border-2 md:border-black md:p-5 md:mt-8 md:mx-5">
        <div class="text-left">
            <div class="my-5" x-show="showIngredients">
                <h2 class="text-lg md:text-3xl font-semibold mb-2">Ingredients</h2>
                <ul>
                    @foreach($listeIngredients as $ingredient)
                    <li>
                        <input type="checkbox" name="ingredient">
                        <label class="ml-2 md:text-2xl" for="ingredient">{{$ingredient}}</label>
                    </li>
        
                    @endforeach
                </ul>
            </div>
            <div class="my-5" x-show="!showIngredients">
                <h2 class="text-lg md:text-3xl font-semibold mb-2">Preparations</h2>
                <ul>
                    @foreach($listeInstruction as $instruction)

                    <li>
                        <input type="checkbox" name="instruction">
                        <label class="ml-2 md:text-2xl" for="instruction">{{$instruction}}</label>
                    </li>

                    @endforeach
                </ul>
            </div>
        </div>
        </div>
    </div>


@auth
<div class="flex justify-between mx-4 md:ml-10 md:mt-10 pb-4">
    <a class="py-2 px-4 text-sm md:text-lg text-white bg-black hover:bg-gray-500 rounded-lg" href="/recipes/{{$recipe->slug}}/edit">Modifier</a>
    
    <form action="/recipes/{{$recipe->slug}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="py-2 px-4 text-sm md:text-lg md:ml-4 text-white bg-red-700 hover:bg-red-500 rounded-lg">Supprimer</button>
        
    </form>
</div>
@endauth


</div>

</x-layout>


