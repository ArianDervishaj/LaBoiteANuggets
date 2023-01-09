<x-layout>

@include('partials._search')

<div class="ml-5 mr-5">

    <h2 class="text-xl font-semibold py-6">{{$heading}}</h2>
    
    <div class="grid grid-cols-2 gap-5">
        
        @foreach ($recipes as $recipe)

        <x-recipe-card :recipe="$recipe"/>
        
        @endforeach
    </div>
    
</div>

<div class="mt-6 p-4">{{$recipes->links()}}</div>

</x-layout>