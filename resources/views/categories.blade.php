<x-layout>

@php
    $categories = DB::table('recipes')->pluck('category')->toArray();
@endphp

<h3 class="text-lg font-semibold ml-2 my-4"">Categories</h3>
<hr class="mb-4 h-1 bg-slate-300">

<div class="mb-4 rounded-lg h-screen">
    
    <ul class=" text-center flex flex-row flex-wrap justify-center">
        
        @foreach($categories as $category)
        
        <li class="font-semibold text-lg bg-white rounded-lg py-4 px-4 mx-3 my-3 w-1/3">
            <a href="/recipes/?category={{$category}}">
                {{$category}}
            </a>
        </li>
        
        @endforeach
        
    </ul>
</div>


</x-layout>