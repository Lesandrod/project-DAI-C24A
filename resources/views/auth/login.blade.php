
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <style>
    #bola1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #bola2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -80px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }

  </style>
  
</head>
<body style="background: rgb(4,16,66);
      background: linear-gradient(138deg, rgba(4,16,66,1) 35%, rgba(0,52,255,1) 100%) fixed;
      background-repeat: no-repeat;">
  <br><br>
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
  
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          LAS MEJORES <br/>
          <span style="color: hsl(218, 81%, 75%)"> PELICULAS QUE PODRAS ENCONTRAR</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
          PI PI PI
        </p>
      </div>
      
      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="bola1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="bola2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
          <form method="POST" action="{{ route('login') }}">
          
                        @csrf
              <!-- correo -->
              <div class="form-outline mb-4">
                <label  class="form-label" for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo') }}</label>

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <!-- contra -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4">Contraseña</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

            
              <!-- logeo -->
              <div style="text-align:center;">
              <button type="submit" class="btn btn-primary" >
                {{ __('Iniciar sesión') }}
              </button>

              </div>
              <br>

              
              <div style="text-align:center;">
              @if (Route::has('password.request'))
              No tienes cuenta?
                <a class="btn btn-link" href="{{ route('register') }}" style="text-decoration: none;">
                 {{ __('Registrate') }}
                </a>
                @endif
              </div>
                
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--LOGIN DE PRUEBA-->

  
</body>
</html>