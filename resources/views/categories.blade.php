<x-layout>

@php
    $categories = DB::table('recipes')->pluck('category')->toArray();
@endphp

<h3 class="my-4 ml-2 font-semibold text-lg ">Categories</h3>
<hr class="mb-4">

<div class="mx-5 px-4 mb-4 rounded-lg grid-cols-1">
    
    <ul class=" text-center">
        
        @foreach($categories as $category)
        
        <li class="font-semibold text-md">
            <a href="/recipes/?category={{$category}}">
                {{$category}}
            </a>
        </li>
        
        @endforeach
        
    </ul>
</div>
</x-layout>