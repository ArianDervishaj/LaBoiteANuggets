@extends('layout')

@section('content')

<div class="ml-5 mr-5">

    <h2 class="text-xl font-semibold mt-10 mb-6">{{$heading}}</h2>
    
    <div class="grid grid-cols-1 gap-5 ">
        
        @foreach ($recipes as $recipe)
        <div>
            <a href="/recipes/{{$recipe->slug}}">

                <h3 class="text-l font-bold">
                    {{$recipe->title}}
                </h3>
                
                <p>{{$recipe->instructions}}</p>
            </a>
        </div>
        
        @endforeach
    </div>
    
</div>

@endsection