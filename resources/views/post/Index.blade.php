<x-app-layout>
    @if (count($posts) >= 1)
        <div class="container mx-auto">
            <h1 class="mb-6 text-2xl font-bold">Publicaciones</h1>
            {{-- <pre>{{$posts}}</pre> --}}
            <table class="table-auto ">
                <thead>
                    <tr class="text-white bg-gray-500">
                        <th>Id</th>
                        <th>Publicacion</th>
                        <th>Contenido</th>
                        <th>Categoria</th>
                        <th>Creacion</th>
                        <th>Acciones</th>
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
                        <td>
                            {{ $post->category->name }}
                        </td>
                        <td>
                            {{ $post->created_at }}
                        </td>
                        <td>
                            {{ $post->description }}
                        </td>
                        <td class="flex space-x-2">
                            <a href="{{url('/post/'.$post->id.'/edit')}}">
                                <x-heroicon-o-pencil class="w-6 h-6 mx-auto text-green-500" />
                            </a>
                            <a href="{{url('/post/'.$post->id.'/delete')}}">
                                <x-heroicon-o-trash class="w-6 h-6 mx-auto text-red-500" />
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif

</x-app-layout>
