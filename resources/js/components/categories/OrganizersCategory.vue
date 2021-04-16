<template>
    <div class="container my-5">
        <h2>Organizadores</h2>

        <div class="row">
            <div class="col-md-4 mt-4" v-for="organizer in this.organizers " v-bind:key="organizer.id_product">
                <div class="card">
                    <img class="card-img-top" :src="`../storage/app/public/products/${organizer.product_image}`" >
                    <div class="card-body">
                        <h3 class="card-title text-primary font-weight-bold"> {{ organizer.product_name }} </h3>
                        <p class="card-text"> {{organizer.product_description }}</p>
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
        axios.get('http://127.0.0.1/decoradorPYCCA/public/api/categories/organizadores')
            .then(response => {
                this.$store.commit("ADD_ORGANIZERS", response.data);
            })
    },
    computed:{
        organizers(){
            return this.$store.state.organizers;
        }
    }
}
</script>
