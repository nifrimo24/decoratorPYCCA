<template>
    <div class="container my-5">
        <h2>Accesorios</h2>

        <div class="row">
            <div class="col-md-4 mt-4" v-for="accessory in this.accessories " v-bind:key="accessory.id_product">
                <div class="card">
                    <img class="card-img-top" :src="`../storage/app/public/products/${accessory.product_image}`" >
                    <div class="card-body">
                        <h3 class="card-title text-primary font-weight-bold"> {{ accessory.product_name }} </h3>
                        <p class="card-text"> {{accessory.product_description }}</p>
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
        axios.get('http://127.0.0.1/decoradorPYCCA/public/api/categories/accesorios')
            .then(response => {
                this.$store.commit("ADD_ACCESORIES", response.data);
            })
    },
    computed:{
        accessories(){
            return this.$store.state.accessories;
        }
    }
}
</script>
