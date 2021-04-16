<template>
    <div class="container my-5">
        <h2>Muebles</h2>

       <div class="row">
            <div class="col-md-4 mt-4" v-for="piece in this.furniture " v-bind:key="piece.id_product">
                <div class="card">
                    <img class="card-img-top" :src="`../storage/app/public/products/${piece.product_image}`" >
                    <div class="card-body">
                        <h3 class="card-title text-primary font-weight-bold"> {{ piece.product_name }} </h3>
                        <p class="card-text"> {{piece.product_description }}</p>
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
        axios.get('http://127.0.0.1/decoradorPYCCA/public/api/categories/muebles')
            .then(response => {
                this.$store.commit("ADD_FURNITURE", response.data);
            })
    },
    computed:{
        furniture(){
            return this.$store.state.furniture;
        }
    }
}
</script>
