@props(['recipe'])

<div class="w-100 ">
    <a 
    href="/recipes/?category={{$recipe->category}}"
    class="font-light text-sm"
    >
        {{$recipe->category}}
    </a>
    <figure class="mb-3 hover:scale-110 transition duration-500 cursor-pointer object-cover">
        <a href="/recipes/{{$recipe->slug}}">

            <img class="w-full h-36 rounded-lg" 
            src="{{$recipe->image ? asset('storage/' . $recipe->image) : asset('images/no-image.jpg')}}" 
            alt="{{$recipe->title}}">
            
            <figcaption class="text-black text-sm text-center font-semibold mt-2 w-100">
                {{$recipe->title}}
            </figcaption>
        </a>
    </figure>
</div>