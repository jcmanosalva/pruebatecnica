@extends('layouts.barrahome')

@section('content')
<div class="container-fluid">
   <div class="row mt-3" id="app">
    
<div class="col-md-4">

      <div class="panel panel-default text-center">
                <div class="panel-heading colores">Ingrese el tiempo y la cantidad</div>

                <div class="panel-body">
                <div class="form-group row justify-content-center ">

                    <form method="POST" v-on:submit.prevent="guardarRegistro">
                    <div class="col-sm-12 text-center">
                    <label for="formGroupExampleInput">Tiempo</label>
                    <input type="number" name="valor1" class="form-control" v-model="valor1">
                    </div>
                    <div class="col-sm-12 text-center margin-top10">
                    	<label for="formGroupExampleInput">Valor</label>
                        <input type="number" name="valor2" class="form-control" v-model="valor2">
                    
                    </div>
                    <div class="col-sm-12 text-center margin-top10">
                        <input type="submit" class="btn btn-primary" value="Guardar Registro">
                 
                    </div>
                    </form>
                  </div>
                </div>
            </div>

    
       
        <table class="table table-hover table-striped text-center">
            <thead>
                <tr>
                    <th>Registro</th>
                    <th>Tiempo</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in datos">
                    <td>@{{ item.id }}</td>
                    <td>@{{ item.valor1 }}</td>
                    <td>@{{ item.valor2 }}</td>
                   
                </tr>
            </tbody>
        </table>
     
      
    </div>


<div class="col-md-8">
<div class="panel panel-default text-center">
                <div class="panel-heading colores">Grafico</div>

                <div class="panel-body">
                <div class="form-group row justify-content-center ">

                  <grafi></grafi>
                </div>
            </div>

    
       
     
     
      
    </div>



    </div>
   
</div>
</div>
@endsection
