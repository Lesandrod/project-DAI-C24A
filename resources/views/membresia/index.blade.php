<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Membresias') }}
        </h2>
    </x-slot>

    <div class="pb-5 pt-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="pull-right">
                <div class="block mb-8">
                    <a href="{{ route('membresia.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"" >Añadir Membresia</a>
                </div>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="table table-hover">
                    <thead class="text-xs text-center text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fecha de expedición
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fecha de expiración
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Editar
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-center">
                    @if($membresias->count())  
                    @foreach($membresias as $membresia) 
                    <tr class="table-warning">
                            <th scope="row" class="px-6 py-4">
                                {{$membresia->id}}
                            </th>
                            <td class="px-6 py-4">
                                {{$membresia->f_expedicion}}
                            </td>
                            <td class="px-6 py-4">
                                {{$membresia->f_expiracion}}
                            </td>
                            <td class="px-6 py-4 ">
                                <a href="{{action('App\Http\Controllers\MembresiaController@edit', $membresia->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                </a>
                                
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
