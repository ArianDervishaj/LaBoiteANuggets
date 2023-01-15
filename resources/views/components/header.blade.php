<div class="flex flex-row-reverse justify-between w-full items-center bg-black text-white h-20 md:h-24">

    <div class="grid grid-cols-2 items-center">
        
        @auth
            <form action="/logout" method="POST" class="text-white text-2xl rounded-lg items-center">
                @csrf
                <button type="submit ">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </button>
            </form>
        @else
            <a href="/login" class="text-white text-2xl rounded-lg items-center"><i class="fa-solid fa-user"></i></a>
        @endauth

        <div class="relative mr-6" x-data="{ menuOpen : false }">
            <button class="flex items-center rounded text-white text-2xl" @click="menuOpen = !menuOpen">
                <i class="fa-solid fa-bars"></i>
            </button>
            <ul class="absolute top-0 right-7 text-white bg-black opacity-80 rounded-lg md:text-3xl" x-show="menuOpen" x-cloak>
                <li><a href="/recipes" class="block py-2 px-3 md:py-4 md:px-6" x-cloak>Accueil</a></li>
                <li><a href="/recipes" class="block py-2 px-3 md:py-4 md:px-6" x-cloak>Recettes</a></li>
                <li><a href="/categories" class="block py-2 px-3 md:py-4 md:px-6" x-cloak>Categories</a></li>
            </ul>
        </div>

    </div>

</div>