<x-app-layout>
    @if (count($categories) >= 1)
        <div class="container mx-auto">
            <h1 class="mb-6 text-2xl font-bold">Categorias</h1>
            <table class="table-auto ">
                <thead>
                    <tr class="text-white bg-gray-500">
                        <th>Id</th>
                        <th>Categoria</th>
                        <th>Creacion</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)
                    <tr class="text-center border border-green-500">
                        <td>
                            {{ $category->id }}
                        </td>
                        <td>
                            {{ $category->name }}
                        </td>
                        <td>
                            {{ $category->created_at }}
                        </td>
                        <td>
                            {{ $category->description }}
                        </td>
                        <td class="flex space-x-2">
                            <a href="{{url('/categories/'.$category->id.'/edit')}}">
                                <x-heroicon-o-pencil class="w-6 h-6 mx-auto text-green-500" />
                            </a>
                            <a href="{{url('/categories/'.$category->id.'/delete')}}">
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
