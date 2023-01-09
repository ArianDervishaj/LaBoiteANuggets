
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/css/app.css')
    <title>La Boite A Nuggets</title>
</head>
<body>

    <x-flash-message />

    <div class="flex justify-between w-full items-center font-bold bg-orange-200 text-white h-24 mb-7"">

        <a href="/recipes">
            <img class="w-44 mb-7 mt-5" src="{{asset('images/logoBoiteANuggets.png')}}" alt="logo">
        </a>

        <select class="h-10 bg-orange-900 pl-2" name="menu" id="menu" onchange="location = this.value;">
            <option value="">Menu</option>
            <option value="/recipes">Recettes</option>
            <option value="/categories">Categories</option>
        </select>
        @auth
            <form action="/logout" method="POST" class="mr-3 bg-orange-700 hover:bg-orange-800 p-2 rounded-lg">
            @csrf
                <button type="submit ">
                    Logout
                </button>
            </form>
        @else
        <a href="/login" class="mr-3 bg-orange-700 hover:bg-orange-800 p-2 rounded-lg">login</a>

        @endauth
    </div>
    {{$slot}}

    <footer class="w-full flex items-center justify-between font-bold bg-orange-500 text-white h-24
    mt-24 opacity-90">

        
        @auth
        <a href="/recipes/create"
        class="abosulte top-1/3 right-10 bg-orange-900 text-white mr-3 py-2 px-5 opacity-100 rounded-lg">
        Nouvelle Recette
        
        </a>
        <a href="/register" class="mr-3 bg-orange-700 hover:bg-orange-800 p-2 rounded-lg">S'inscrire</a>

        @endauth
        
    </footer>
</body>
</html>