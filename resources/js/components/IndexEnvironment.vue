<template>
    <div class="container my-5">
        <h2 class="text-center">Seleccione Ambiente a Personalizar</h2>

        <div class="row">
            <div class="col-md-4 mt-4" v-for="environment in this.environments" v-bind:key="environment.id_environment">
                <div class="card">
                    <img class="card-img-top" :src="`../storage/app/public/environments/${environment.environment_main_image}`" >
                    <div class="card-body">
                        <h3 class="card-title text-primary font-weight-bold"> {{ environment.environment_name }} </h3>
                        <p class="card-text"> {{environment.environment_description}}</p>
                        <a class="btn btn-primary d-block">Seleccionar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
export default {

    data: function(){
        return{
            environments:[]
        }
    },

    mounted() {
        axios.get('http://127.0.0.1/decoradorPYCCA/public/api/environments')
            .then(response => {
                this.environments = response.data;
            })
    }
}
</script>
