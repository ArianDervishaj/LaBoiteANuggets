<x-layout>

@php
$categories = DB::table('recipes')->pluck('category')->toArray();
@endphp

<div class="ml-5">

    <h3 class="font-semibold text-xl mb-7">Categories</h3>
    
    <ul class="grid grid-cols-4 gap-5 text-center">
        
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