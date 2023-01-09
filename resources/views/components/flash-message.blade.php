@if(session()->has('message'))

    <div x-data="{show:true}" x-init="setTimeout(() => show = false, 1500)" x-show="show" class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-orange-600 text-white px-6 py-3 mt-2 rounded-lg">
        <p>
            {{session('message')}}
        </p>
    </div>

@endif