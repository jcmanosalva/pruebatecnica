<template>
<div class="row">
<div class="col-md-6">  <div class="card text-center">
                <div class="card-header colores">Ingrese el tiempo y la cantidad</div>

                <div class="card-body">
                <div class="form-group row justify-content-center ">

                    <form v-on:submit.prevent="crearRegistro" method="post">
                    <div class="col-sm-12 text-center">
                    <label for="formGroupExampleInput">Tiempo</label>
                    <input type="number" class="form-control" v-model="datos.valor1">
                    </div>
                    <div class="col-sm-12 text-center mt-3">
                    <label for="formGroupExampleInput">Cantidad</label>
                    <input type="number" class="form-control" v-model="datos.valor2">
                    </div>
                    <div class="col-sm-12 text-center mt-3">
                    <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Agregar Valores</button>
                    </div>
                    </form>
                  </div>
                </div>
            </div></div>
<div class="col-md-6">   <div class="card text-center ">
      
                <div class="card-header colores">Tabla de Registros</div>

                <div class="card-body">




                  <table class="table table-hover">
                  <thead>
                  <th>Tiempo</th>
                  <th>Cantidad</th>
                 
                  </thead>
                  <tbody>
                    <datos v-for="datos in traerRegistros"f v-bind:datos="datos"></datos>

                  </tbody>
                  </table>
                </div>
                <div class="card-footer">

               
                </div>
            </div></div>
 </div>     
   
</template>


<script>



import datos from './Customer.vue';
    export default {
        data(){
          return{
            traerRegistros: [],
            datos:{
              valor1:'',
              valor2:''
            }
          }
        },
        components:{datos},
        created(){
          this.rescateDatos();
        },
        methods:{
          rescateDatos(){
            this.$http.get("datos").then( response => { this.traerRegistros 
            = response.data.datos});
          },
          crearRegistro(){

            this.$http.post("/datos/",this.datos).then(response => {this.datos 
            = response.data.datos;
        
            });
          }

        }
    }
</script>
