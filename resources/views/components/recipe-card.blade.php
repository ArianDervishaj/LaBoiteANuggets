@props(['recipe'])

    <div class="mb-3 hover:scale-110 transition duration-500 cursor-pointer bg-gray-200 rounded-lg">
        <a href="/recipes/{{$recipe->slug}}">

            
            <img class="rounded-t-lg object-cover" 
            src="{{$recipe->image ? asset('storage/' . $recipe->image) : asset('images/no-image.jpg')}}" 
            alt="{{$recipe->title}}">
            
            <p class="text-black text-sm text-center font-semibold mt-2">
                {{$recipe->title}}
            </p>
        </a>
    </div>