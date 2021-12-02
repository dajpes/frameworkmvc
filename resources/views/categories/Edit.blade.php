<x-app-layout>
    <div class="p-4">
        <h2 class="text-xl font-bold">Edit Categories</h2>
    <x-forms.form method="POST" action="{{URL::current()}}">
        @method('patch')
        <label class="space-x-10">
            <span>Category name</span>
            <input type="text" name="name" placeholder="..." value="{{$category->name}}" class="tracking-wide rounded"/>
        </label>
        <label class="space-x-10">
            <span>Category Description</span>
            <input type="text" name="description" placeholder="..." value="{{$category->description}}" class="tracking-wide rounded"/>
        </label>
        <button class="p-4 ml-4 font-bold text-white bg-green-500 rounded">Actualizar</button>
    </x-forms.form>    
    </div>
    
</x-app-layout>