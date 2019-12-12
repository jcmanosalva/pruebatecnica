<template>
      <div class="card text-center">
                <div class="card-header colores">Ingrese el tiempo y la cantidad</div>

                <div class="card-body">
                <div class="form-group row justify-content-center ">

                    <form method="post" action="/store">
                    <div class="col-sm-12 text-center">
                    <label for="formGroupExampleInput">Tiempo</label>
                    <input type="number" class="form-control" >
                    </div>
                    <div class="col-sm-12 text-center mt-3">
                    <label for="formGroupExampleInput">Cantidad</label>
                    <input type="number" class="form-control">
                    </div>
                    <div class="col-sm-12 text-center mt-3">
                    <button class="btn btn-success"><i class="fas fa-plus"></i> Agregar Valores</button>
                    </div>
                    </form>
                  </div>
                </div>
            </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
