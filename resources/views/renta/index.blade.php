<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Rentas') }}
        </h2>
    </x-slot>

    <div class="pb-5 pt-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="pull-right">
            
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="table table-hover">
                    <thead class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                PELICULA_ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                PELICULA
                            </th>
                            <th scope="col" class="px-6 py-3">
                                FECHA DE REGISTRO
                            </th>
                            <th scope="col" class="px-6 py-3">
                                FECHA DE ENTREGA
                            </th>
                            <th scope="col" class="px-6 py-3">
                                FECHA DE DEVOLUCIÓN
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-center">
                    @if($rentas->count())  
                    @foreach($rentas as $renta) 
                        <tr class="table-warning">
                            <th scope="row" class="px-6 py-4 ">
                                {{$renta->id}}
                            </th>
                            <td class="px-6 py-4">
                                {{$renta->pelicula_id}}
                            </td>
                            <td class="px-6 py-4">
                                {{$renta->nombre}}
                            </td>
                            <td class="px-6 py-4">
                                {{$renta->f_registro}}
                            </td>
                            <td class="px-6 py-4">
                                {{$renta->f_entrega}}
                            </td>
                            <td class="px-6 py-4">
                                {{$renta->f_devolucion}}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{action('App\Http\Controllers\RentaController@edit', $renta->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                            </td>
                        </tr>
                        @endforeach 
                        @else
                        <tr>
                        <td colspan="8">No hay registro !!</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>