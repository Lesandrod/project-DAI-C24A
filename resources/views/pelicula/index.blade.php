<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Peliculas') }}
        </h2>
    </x-slot>
    {{ csrf_field() }}
    <div class="pb-5 pt-3 " style="background-color:#81c9fa;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg " style="background-color:#EAEDED;">
            <div class="container mt-5 mb-5">
            <div class="row justify-content-center ">
                <div class="cold-md-10">
                    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">

                    </div>
                    </div>

                    @foreach ($peliculas as $pelicula)
                    <div class="card m-3" style="width: 18rem; gap:10px;">
                        <div class="card-header text-primary">
                           
                            <div style="text-align:center;">
                           
                            <a href="{{action('App\Http\Controllers\RentaController@create', $pelicula->id)}}"><button class="btn btn-success btn-block">Rentar  <b>ID : </b> {{$pelicula->id}}</button></a>
                            </div>
                        
                        </div> 

                    
                        <ul class="list-group list-group-flush ">
                            <li class="list-group-item"> <b> Nombre:</b> {{$pelicula->nombre}}</li>
                            <li class="list-group-item"> <b>Director : </b> {{$pelicula->director}}</li>
                            <li class="list-group-item"> <b>Genero : </b> {{$pelicula->genero}}</li>
                            <li class="list-group-item"> <b>Actor Principal : </b> {{$pelicula->actor1}}</li>
                            <li class="list-group-item"> <b>Actor Secundario : </b> {{$pelicula->actor2}}</li>
                            <li >
                           
                            </li>
                        </ul>
                        

                    </div>
                    
                    
                        
                    
                    @endforeach
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
</x-app-layout>

                            