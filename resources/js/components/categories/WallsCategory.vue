<template>
    <div class="container my-5">
        <h2>Paredes</h2>

        <div class="row">
            <div class="col-md-4 mt-4" v-for="wall in this.walls " v-bind:key="wall.id_product">
                <div class="card">
                    <img class="card-img-top" :src="`../storage/app/public/products/${wall.product_image}`" >
                    <div class="card-body">
                        <h3 class="card-title text-primary font-weight-bold"> {{ wall.product_name }} </h3>
                        <p class="card-text"> {{wall.product_description }}</p>
                        <a class="btn btn-primary d-block">Seleccionar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

    mounted() {
        axios.get('http://127.0.0.1/decoradorPYCCA/public/api/categories/paredes')
            .then(response => {
                this.$store.commit("ADD_WALLS", response.data);
            })
    },
    computed:{
        walls(){
            return this.$store.state.walls;
        }
    }
}
</script>
