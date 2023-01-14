@if(session()->has('message'))

    <div x-data="{show:true}" x-init="setTimeout(() => show = false, 1500)" 0
        x-show="show" 
        class="fixed top-2 left-1/2 transform -translate-x-1/2 bg-zinc-200 text-black px-6 py-3 mt-2 rounded-lg">
        <p>
            {{session('message')}}
        </p>
    </div>

@endif