<header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3 bg-gray-50 rounded-b-[10px]">
    <div class="flex lg:justify-center lg:col-start-2">
        <a href="/" wire:navigate>
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" width="300" />
        </a>
    </div>
    @if (Route::has('login'))
        <livewire:welcome.navigation />
    @endif
</header>
