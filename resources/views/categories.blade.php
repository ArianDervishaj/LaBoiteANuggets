<x-layout>

@php
    $categories = DB::table('recipes')->pluck('category')->toArray();
    $listeCategories = array();

    foreach ($categories as $category) {
        if(mb_strpos($category, ", ") !== false){
            $arrayCategories = explode(', ',$category);
            foreach ($arrayCategories as $oneCategory) {
                array_push($listeCategories, $oneCategory);
            }
        }else{
            array_push($listeCategories, $category);
        }
    }

@endphp

@include('partials._search')

<h2 class="text-lg md:text-xl font-semibold ml-2 md:ml-4 my-4 md:my-6">Categories</h2>
<hr class="mb-4 h-1 bg-slate-300">

<div class="mb-4 rounded-lg h-screen">
    
    <ul class=" text-center flex flex-row flex-wrap justify-center">
        @php
        
        @endphp
        @foreach($listeCategories as $category)
        
        <li class="font-semibold text-lg bg-white rounded-lg py-4 px-4 mx-3 my-3 w-1/3">
            <a href="/recipes/?category={{$category}}">

                    {{$category}}

            </a>
        </li>
        
        @endforeach
        
    </ul>
</div>


</x-layout>