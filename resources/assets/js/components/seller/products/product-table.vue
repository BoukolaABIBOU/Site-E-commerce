<template>
    <div v-if="products">
        <div class="pull-right">
            <button class="btn btn-primary" @click="show.form = true">Créer un nouveau produit</button>
        </div><!-- /.row -->
        <full-screen v-if="show.form" :close="close">
            <h3 slot="header">{{ form.header }}</h3>
            <div slot="body">
                <product-form :reset="getProducts"
                              :oldProduct="form.product"
                              :cancel="close">

                </product-form>
            </div>
        </full-screen>
        <table class="table">
            <thead>
            <tr>
                <th>Titre</th>
                <th>Catégorie</th>
                <th>Prix</th>
                <th>En vente</th>
                <th>Editer la vente</th>
                <th>Mise à jour du produit</th>
                <th>Supprimer le produit</th>
            </tr>
            </thead>
            <tbody>
            <product-row v-for="product in products"
                         :key="product.id"
                         :product="product"
                         :onEdit="openEdit"
                         :reset="getProducts">

            </product-row>
            </tbody>
        </table>
        <paginate-items :number="last_page"
                        :current="page"
                        @select-page="setPage">

        </paginate-items>
    </div>
</template>

<script>
    export default {
        data : function() {
            return {
                products : null,
                page : 1,
                lastPage : {required :true, type : Number},
                pages : [],
                show : {
                    form : false
                },
                form : {
                    header : 'Add a Product',
                    isEdit : false,
                    product : null
                }
            }
        },

        created() {
            Event.$on('reset-products',
                () => this.getProducts()
            );
        },

        mounted() {
            console.log('eoaijeoidj')
            this.getProducts();
        },

        methods : {
            /**
             * sets the new page
             * @param page
             * @return void
             */
            setPage(page) {
                this.page = page;
                this.getProducts();
            },

            /**
             * closes the form
             * @return void
             */
            close() {
                this.show.form = false;
                this.form.product = null;
            },

            openEdit(product) {
                this.show.form = true;
                this.form.header = 'Edit this Product!'
                this.form.product = product;
            },

            /**
             * sets the products property with an ajax request
             * @return void
             */
            getProducts() {
                let self = this;
                axios.get(window.Laravel.urls.product_api_url + '?page=' + this.page)
                    .then(function (response) {
                        console.log(response);
                        self.page = response.data.products.current_page;
                        self.products = response.data.products.data.filter(product => product.owner_id === this.seller_id);
                        self.last_page = response.data.products.last_page;
                    })
                    .catch(
                        () => self.updateError()
                    );
            },

            /**
             * sends an error if ajax request fails
             * @return void
             */
            updateError(){
                Event.$emit('update-user-error', 'An error has occurred please try again!')
            }
        }
    }
</script>