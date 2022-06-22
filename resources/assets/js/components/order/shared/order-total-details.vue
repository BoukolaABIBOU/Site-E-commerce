<template>
    <div class="well">
        <p class="order-summary">
            <strong>Résumé</strong>
        </p>
        <p>
            <strong>Sous-total:</strong>
            <span class="pull-right"> {{ order.sub_total }} fcfa</span>
        </p>
        <p>
            <strong>Taxes</strong>
            <span class="pull-right"> {{ order.taxes }} fcfa</span>
        </p>
        <p class="order-main-total">
            <strong>Total:</strong>
            <span class="pull-right"> {{ order.total }} fcfa</span>
        </p>

    </div><!-- /.well -->
</template>

<script>
    export default {
        props: ['order']
    }
</script>