<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('INICIO') }}
        </h2>
    </x-slot>

    <div class="pb-5 pt-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-3 mt-3">
                <div class="card-header bg-dark text-warning">{{ __('Información de Perfil') }}</div>
                <div class="card-body">

                   
                    
                    <div class="row mb-3 justify-content-center">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Nombre :</label>
                        <div class="col-sm-4">
                           <input type="text" class="form-control" id="colFormLabel" value="{{ Auth::user()->name }}" disabled>
                        </div>
                    </div>
                   
                    
                    <div class="row mb-3 justify-content-center">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Correo :</label>
                        <div class="col-sm-4">
                           <input type="text" class="form-control" id="colFormLabel" value="{{ Auth::user()->email }}" disabled>
                        </div>
                    </div>
                    
                    <div class="row mb-3 justify-content-center">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Rol :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="colFormLabel" value="{{Auth::user()->rol}}" disabled>
                        </div>                        
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">ID :</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="colFormLabel" value="{{ Auth::user()->id }}" disabled>
                        </div>                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
</x-app-layout> 
