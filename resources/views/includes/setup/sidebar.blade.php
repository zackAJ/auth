<div :class="{ '-translate-x-80' : !sidebar, 'translate-x-0' : sidebar }" class="fixed left-0 z-50 w-72 h-screen duration-300 ease-out bg-zinc-50" x-cloak>
    <div class="flex justify-between items-center px-5 py-5 w-full">
        <div class="flex relative items-center space-x-1.5">
            <x-auth::elements.logo class="w-auto h-7"></x-auth::elements.logo>
            <h1 class="text-base font-bold leading-none">Setup</h1>
        </div>
        <x-auth::setup.top-button
            icon="x-bold"
            @click="sidebar=false"
            ::class="{ 'translate-x-1' : fullscreen }"
        >Close</x-auth::setup.top-button>
    </div>
    <div class="px-5 py-2">
        <a href="https://auth.devdojo.com/docs" target="_blank" class="block p-5 text-xs bg-white rounded-xl border duration-300 ease-out hover:shadow-md opacity-[0.98] hover:opacity-100 border-zinc-200">
            <span class="flex flex-col">
                <span class="font-semibold">Learn about configs & setup</span>
                <span class="underline">Visit the documenation here</span>
            </span>
        </a>
    </div>
    <x-auth::setup.sidebar-links :page="$page"></x-auth::setup.sidebar-links>
</div>
<div x-show="sidebar" @click="sidebar=false" class="fixed z-40 w-screen h-screen bg-black/50" x-cloak></div>