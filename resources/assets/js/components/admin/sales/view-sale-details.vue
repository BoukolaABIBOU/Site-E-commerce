<template>
    <div v-if="sale">
        <div class="row">
            <h4 class="mid_center">Détails du produit</h4>
            <div class="col-sm-6">
                <img :src="sale.product_thumbnail" :alt="'Image of ' + sale.product_title">
            </div><!-- /.col -->
            <div class="col-sm-6">
                <strong>Produit: </strong>{{ sale.product_title }}
                <br />
                <strong>Catégorie: </strong>{{ sale.category }}
                <br />
            </div><!-- /.col -->
        </div><!-- /.row -->
        <hr>
        <div class="row">
            <h4 class="mid_center">Details de vente</h4>
            <div class="col-sm-6">
                <strong>Réduction: </strong>{{ sale.discount }}
                <br />
                <span class="product-title">Prix: </span>
                <span class="price-cut">{{ sale.product_price }}</span>
                <br />
                <span class="product-title">Réduction Prix: </span>
                <span class="price-amount">{{ sale.discount_price }}</span>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <strong>Date de début de la vente :: </strong>{{ sale.sale_start }}
                <br />
                <strong>Date de fin de la vente : </strong>{{ sale.sale_finish }}
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <button type="button" class="btn btn-danger" @click="cancel">Annuler</button>
        </div><!-- /.row -->
    </div>

</template>



<script type="text/javascript">
    export default {
        props : ['sale-id', 'cancel'],

        data () {
            return {
                sale : null
            }
        },

        mounted() {
            this.getSale();
        },

        methods : {
            getSale(){
                let self = this;
                axios.get(window.Laravel.urls.sale_url + '/' + this.saleId)
                    .then(
                        (response) => self.sale = response.data.sale
                    )
                    .catch();
            }
        }
    }
</script>