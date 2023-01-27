@props(['recipe'])



    <div class="w-full md:h-[34rem] h-[24rem] relative overflow-hidden">
        <a href="/recipes/{{$recipe->slug}}">
            
            
            <img class=" object-cover h-5/6 mx-auto rounded-t-xl hover:scale-110 transition-transform duration-500"
            src="{{$recipe->image ? asset('storage/' . $recipe->image) : asset('images/no-image.jpg')}}" 
            alt="{{$recipe->title}}">
            
            <div class="absolute bottom-0 w-full h-1/6 px-4 md:px-6 bg-white border-t-2 rounded-b-xl flex items-center justify-center text-center text-xl md:text-lg">
                {{$recipe->title}}
            </div>
        </a>
    </div>
    
