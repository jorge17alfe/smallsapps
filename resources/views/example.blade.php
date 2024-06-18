<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Example') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're in Example") }}
                    
                </div>
            </div> --}}
            @livewire('users')
           @livewireScripts
        </div>
    </div>
</x-app-layout>

{{-- <script>
    document.getElementById("search").addEventListener("input", (e) => {
        console.log(e.target.value)
        fetch('/example1?user=' + e.target.value)
            .then(res => res.text())
            .then(html => {
                document.getElementById("result").innerHTML = html
            })
    })
</script> --}}
