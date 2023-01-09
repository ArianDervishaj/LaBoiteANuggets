<x-layout>

<div class="flex-column">

    <div class="w-full">
        
        <h2 class="ml-5 font-bold text-2xl mb-4">{{$recipe->title}}</h2>
        
        <img class="ml-auto mr-auto w-11/12 rounded-md " 
        src="{{$recipe->image ? asset('storage/' . $recipe->image) : asset('images/no-image.jpg')}}" 
        alt="{{$recipe->title}}">
        
    </div>
    
    <div class="ml-5">
    <ul>
        @php
            $listeIngredients = Str::of($recipe->ingredients)->explode(', ')
            @endphp

    <h4 class="mt-7 mb-3 text-lg font-semibold">Ingredients</h4>

    @foreach($listeIngredients as $ingredient)
    <li>
        <input type="checkbox" name="ingredient" value="{{$ingredient}}">
        <label class="text-lg" for="ingredient">{{$ingredient}}</label>
    </li>

    @endforeach
    </ul>

    <ol class="text-lg list-decimal">
        <h4 class="mt-7 mb-3 font-semibold">Instructions </h4>
        
        @php
                $listeInstruction = Str::of($recipe->instructions)->explode('/ ')
                @endphp

    @foreach($listeInstruction as $instruction)

    <li class=" ml-5">
        {{$instruction}}
    </li>

    @endforeach
    </ol>

    </div>
</div>

<div class="mt-4 p-2 flex space-x-6">
    <a href="/recipes/{{$recipe->slug}}/edit">edit</a>

    <form action="/recipes/{{$recipe->slug}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="text-red-500">Delete</button>
    
    </form>
</div>
</x-layout>