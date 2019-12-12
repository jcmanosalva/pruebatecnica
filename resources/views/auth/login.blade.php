@extends('layouts.loginvista') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 centradovertical">
             <div class="panel panel-default caja-login">
            <div class="panel-body">

                <div class="row text-center">

                <div class="col-md-12">
                    <h3 class="titulos">Sistema de Prueba</h3>
                </div>
                </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row justify-content-center mt-3">

                        <div class="col-md-5 text-center  margin-top10">
                        <img src="img/imagen_login.png" width="70%">
                        </div>
                         <small class="titulos">Inicie session para continuar</small>
                        <div class="col-md-5 mt-2 fondodiv ">
                       

                        <div class="input-group margin-top10">
                     <div class="input-group-btn iconos">

                        <span class="input-group-text" id="basic-addon1"> <i class='fas fa-user-circle verde'></i></span>
                     </div>
                    <input id="email" type="email" class="form-control sinborder @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="username" autofocus> @error('email')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> @enderror
                    
                  </div>

                   <div class="input-group margin-top10">
                     <div class="input-group-btn iconos">
                       <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock verde"></i></span>
                     </div>
                   <input id="password" type="password" class="form-control sinborder @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password"> @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                  </div>


                    
                     

                        <div class="form-group row mb-0 margin-top10">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn colorbtn btn-block">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>
                        </div>

</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection