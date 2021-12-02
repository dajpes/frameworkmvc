<x-app-layout>
    @if (count($posts) >= 1)
        <div class="container mx-auto">
            <h1 class="mb-6 text-2xl font-bold">Posts de {{$category->name}}</h1>
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

</x-app-layout>
