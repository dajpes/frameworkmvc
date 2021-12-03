<x-app-layout>
    <div class="w-1/4 p-4">
        <h2 class="mb-10 text-xl font-bold">Edit Post</h2>
        <x-forms.form method="POST" action="{{ URL::current() }}">
            @method('patch')
            <div class="flex flex-col space-y-4">
                <label class="flex justify-between">
                    <span>Publication: </span>
                    <input type="text" class="rounded" name="publication" value="{{ $post->publication}}" required />
                </label>
                <label class="flex justify-between">
                    <span>Content: </span>
                    <input type="text" class="rounded" name="content" value="{{ $post->content}}" required />
                </label>
                <label class="flex justify-between">
                    <span>State: </span>
                    <select name="state">
                        <option value="" disabled>Select Option</option>
                        @foreach ($states as $state)
                            <option value="{{ $state }}" {{$post->state == $state ?'selected' : ''}}>{{ $state }}</option>
                        @endforeach
                    </select>
                </label>
                <input type="text" class="hidden" name="category_id" value="{{$post->category_id}}" />
                <label class="flex justify-between">
                    <span>Publication Content: </span>
                    <input type="text" class="rounded" name="publication_content" value="{{$post->publication_content}}" required />
                </label>
                <button class="p-4 ml-4 font-bold text-white bg-green-500 rounded">Actualizar</button>
            </div>
        </x-forms.form>
    </div>

</x-app-layout>
