<x-app-layout>
    <div class="p-4">
        <h2 class="text-xl font-bold">Edit Categories</h2>
    <x-forms.form>
        <label class="space-x-10">
            <span>Category name</span>
            <input type="text" name="name" placeholder="..." value="{{$category->name}}" class="tracking-wide rounded"/>
        </label>
        <label class="space-x-10">
            <span>Category Description</span>
            <input type="text" name="name" placeholder="..." value="{{$category->name}}" class="tracking-wide rounded"/>
        </label>
    </x-forms.form>    
    </div>
    
</x-app-layout>