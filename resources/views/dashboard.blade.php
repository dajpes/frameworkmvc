<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex mx-10 mt-4 space-x-5">
        <div class="p-10 border rounded shadow-xl">
            <x-heroicon-o-adjustments class="w-10 h-10 mx-auto text-green-500" />
            <h2 class="mt-6 text-xl font-bold">Categories</h2>
            <div class="mt-5">
                <a href="{{url('/categories/create')}}"class="p-2 font-bold text-white bg-green-400 rounded">Crear</a>
                <a href="{{url('/categories/index')}}"class="p-2 font-bold text-white bg-green-400 rounded">Ver</a>
            </div>
        </div>
    </div>
</x-app-layout>
