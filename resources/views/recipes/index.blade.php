<x-layout>

    @include('partials._search')

    <h2 class="text-lg font-semibold ml-2 my-4">{{$heading}}</h2>
    <hr class="mb-4 h-1 bg-slate-300">

    <div class="mx-5 mb-5">
        
        <div class="grid grid-cols-1 gap-5">
            
            @foreach ($recipes as $recipe)

            <x-recipe-card :recipe="$recipe"/>
            
            @endforeach

        </div>
        
    </div>

</x-layout>