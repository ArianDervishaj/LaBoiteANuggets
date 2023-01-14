<footer class="flex justify-between w-full items-center font-bold bg-black text-white h-20">
    
    @auth
        <a href="/recipes/create"
        class="ml-6 text-white text-2xl rounded-lg">
            <i class="fa-solid fa-square-plus"></i>
        </a>
    @endauth
        <p class="text-white text-sm mx-auto">Arian Dervishaj ®</p>

    @auth
        <a href="/register" class="text-white text-2xl rounded-lg mr-6">
            <i class="fa-solid fa-user-plus"></i>
        </a>
    @endauth
    
</footer>