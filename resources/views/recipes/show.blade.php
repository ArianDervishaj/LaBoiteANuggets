@php
$listeIngredients = Str::of($recipe->ingredients)->explode(', ');
$listeCategories = Str::of($recipe->category)->explode(', ');
$listeInstruction = Str::of($recipe->instructions)->explode('/ ');
@endphp

<x-layout>

<div class="bg-white w-screen">

    
    <h2 class="mx-5 font-bold text-3xl pt-5 mb-5">{{$recipe->title}}</h2>
    
    <div class=" h-[34rem]">
    
        <img class="h-[34rem] bg-gray-200 w-full" 
        src="{{$recipe->image ? asset('storage/' . $recipe->image) : asset('images/no-image.jpg')}}" 
        alt="{{$recipe->title}}">
        
    </div>

    <div class="mt-5 mx-5">
        <h3 class="text-lg font-semibold">Catégories</h3>
        <div class="flex flex-wrap justify-center items-center mt-3">

                @foreach($listeCategories as $category)
                    <a
                    href="/recipes/?category={{$category}}" 
                    class="bg-gray-300 px-4 py-2 mx-2 my-2 rounded-xl text-black">
                        {{$category}}
                    </a>
                @endforeach

        </div>
    </div>


    <div x-data="{ showIngredients: {{ $showIngredients }}}" class="bg-white p-6 flex-col text-center">
        <button @click="showIngredients = !showIngredients" class="bg-black hover:bg-gray-500 text-white py-2 px-4 rounded">
            <span>Afficher  </span>
            <span x-text="showIngredients ? 'la preparation' : 'les ingredients'"></span>
        </button>
        <div class="text-left">
            <div class="my-5" x-show="showIngredients">
                <h2 class="text-lg font-semibold mb-2">Ingredients</h2>
                <ul>
                    @foreach($listeIngredients as $ingredient)
                    <li>
                        <input type="checkbox" name="ingredient">
                        <label class="ml-2" for="ingredient">{{$ingredient}}</label>
                    </li>
        
                    @endforeach
                </ul>
            </div>
            <div class="my-5" x-show="!showIngredients">
                <h2 class="text-lg font-semibold mb-2">Preparations</h2>
                <ul>
                    @foreach($listeInstruction as $instruction)

                    <li>
                        <input type="checkbox" name="instruction">
                        <label class="ml-2" for="instruction">{{$instruction}}</label>
                    </li>

                    @endforeach
                </ul>
            </div>
        </div>
    </div>


@auth
<div class="flex justify-between mx-4 pb-4">
    <a class="py-2 px-4 text-sm md:text-base text-white bg-black hover:bg-gray-500 rounded-lg" href="/recipes/{{$recipe->slug}}/edit">Modifier</a>
    
    <form action="/recipes/{{$recipe->slug}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="py-2 px-4 text-sm md:text-base text-white bg-red-700 hover:bg-red-500 rounded-lg">Supprimer</button>
        
    </form>
</div>
@endauth


</div>

</x-layout>


