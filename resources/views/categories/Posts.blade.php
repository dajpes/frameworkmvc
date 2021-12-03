<x-app-layout>
    <div class="container mx-auto">
        <div class="flex flex-row-reverse justify-around">
            <div>
                <h1 class="mb-6 text-2xl font-bold">Crear Post de {{ $category->name }}</h1>
                <x-forms.form class="flex flex-col space-y-5" method="POST" action="create/post">
                    <label class="flex justify-between">
                        <span>Publication: </span>
                        <input type="text" name="publication" required />
                    </label>
                    <label class="flex justify-between">
                        <span>Content: </span>
                        <input type="text" name="content" required />
                    </label>
                    <label class="flex justify-between">
                        <span>State: </span>
                        <select name="state">
                            <option value="" selected disabled>Select Option</option>
                            @foreach ($postState as $state)
                                <option value="{{ $state }}">{{ $state }}</option>
                            @endforeach
                        </select>
                    </label>
                    <label class="flex justify-between">
                        <span>Publication Content: </span>
                        <input type="text" name="publication_content" required />
                    </label>
                    <input type="text" class="hidden" name="category_id" value="{{ $category->id }}" />
                    <button class="p-4 font-bold text-white bg-green-400 rounded" type="submit">Crear</button>
                </x-forms.form>
            </div>
            @if (count($posts) >= 1)

                <div>
                    <h1 class="mb-6 text-2xl font-bold">Posts de {{ $category->name }}</h1>
                    <table class="table-auto ">
                        <thead>
                            <tr class="text-white bg-gray-500">
                                <th>Id</th>
                                <th>Publicacion</th>
                                <th>Contenido</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr class="text-center border border-green-500">
                                    <td>
                                        {{ $post->id }}
                                    </td>
                                    <td>
                                        {{ $post->publication }}
                                    </td>
                                    <td>
                                        {{ $post->content }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>

    </div>

</x-app-layout>
