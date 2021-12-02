<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container m-4 mx-auto">
        <x-forms.form class="flex space-x-10">
            <label>
                <span class="mr-4">Nombre Categoria</span>
                <input type="text" class="rounded" name="name"/>
            </label>
            <label>
                <span class="mr-4">Descripcion</span>
                <input type="text" class="rounded" name="description"/>
            </label>
            <button type="submit" class="p-4 text-white bg-green-500 rounded">Crear</button>
        </x-forms.form>
    </div>

</x-app-layout>
