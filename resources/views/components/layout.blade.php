
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/1b6e9af371.js" crossorigin="anonymous"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/css/app.css')
    <title>La Boite A Nuggets</title>
</head>
<body class="bg-zinc-200">

    <x-flash-message />

    <x-header />
    
    {{$slot}}

    <x-footer/>

</body>
</html>