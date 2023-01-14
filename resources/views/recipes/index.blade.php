<x-layout>

    @include('partials._search')

    <h2 class="text-lg md:text-xl font-semibold ml-2 md:ml-4 my-4 md:my-6">Toutes les recettes</h2>
    <hr class="mb-4 h-1 bg-slate-300">


    <div class="mx-5 mb-5 md:w-3/5 md:mx-auto">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-7 md:place-content-center">
            
            @foreach ($recipes as $recipe)
            
            <x-recipe-card :recipe="$recipe"/>
            
            @endforeach
            
            {{ $recipes->links() }}
        </div>
        
    </div>
        
</x-layout>