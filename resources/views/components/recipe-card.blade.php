@props(['recipe'])

    <div class="w-full h-[34rem] relative overflow-hidden">
        <a href="/recipes/{{$recipe->slug}}">

            
            <img class="w-full h-5/6 mx-auto rounded-t-xl hover:scale-125 transition-transform duration-500"
            src="{{$recipe->image ? asset('storage/' . $recipe->image) : asset('images/no-image.jpg')}}" 
            alt="{{$recipe->title}}">
            
            <div class="absolute bottom-0 w-full h-1/6 bg-white border-t-2 rounded-b-xl flex items-center justify-center text-center text-xl">
                {{$recipe->title}}
            </div>
        </a>
    </div>