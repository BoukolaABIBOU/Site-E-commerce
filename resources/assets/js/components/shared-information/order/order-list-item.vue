<template>
    <div class="row order-list-item">
        <div class="order-list-blocks order-list-border">
            <h5><u>Date de la commande</u></h5>
            <p>
                Date de la commande: <strong>{{ order.order_date }}</strong>   <br />
                A été expédié: <strong>{{ shipped }}</strong>  <br />
                A été expédié: <strong v-if="order.ship_date">{{ order.ship_date }}</strong>
            </p>
        </div>
        <div class="order-list-blocks order-list-border">
            <h5><u>Détails de la commande</u></h5>
            <p>
                Sous-total: <strong>${{ order.cost.sub_total }}</strong> <br />
                Taxes : <strong>${{ order.cost.taxes }}</strong> <br />
                Total: <strong>${{ order.cost.total }}</strong>
            </p>
        </div>
        <div class="order-list-blocks">
            <h5><u>Addresse de la commande</u></h5>
            <p>
                {{ order.address.street_address }} <br />
                {{ order.address.city }}, {{ order.address.state }} {{ order.address.postal_code }}  <br />
            </p>
        </div>
    </div><!-- /.row -->
</template>
<script>
    export default {
        props: ['order'],

        data : function () {
            return {
                shipped : false
            }
        },

        mounted() {
            this.isShipped();
        },

        methods : {
            /**
             * sets the shipped property to if the
             *
             * @return void
             */
            isShipped() {
                this.shipped = (this.order.ship_date) ? 'Yes' : 'No';
            }
        }
    }
</script>

<style>
    .order-list-item {
        border-bottom: 1px solid #9BA2AB;
        display: inline-flex;
        padding: 5px 20px;
        margin: 5px;
        cursor: pointer;
    }

    .order-list-item :hover {
        border: 3px solid;
        border-radius: 5px;
    }

    .order-list-blocks {
        margin: 0 10px;
        width: 200px;
    }
    .order-list-border {
        border-right: 1px solid #9BA2AB;
    }

</style>