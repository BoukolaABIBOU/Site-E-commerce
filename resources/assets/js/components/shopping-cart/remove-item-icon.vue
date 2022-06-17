<template>
    <div :class="mainClass">
        <div class="event-icon">
            <i :class="sizeClass" aria-hidden="true" @click="toggleModal"></i>
        </div>
        <confirm-modal v-show="showModal"
                       @confirm="updateCart"
                       @cancel="toggleModal">
            <h3 slot="header">Enlever {{ product }}</h3>
            <p slot="body">Êtes-vous sûr de vouloir supprimer {{ product }} de votre commande?</p>
        </confirm-modal>
    </div>

</template>

<script>
    export default {
        props : [
            'product_id', 'product','mainClass', 'sizeClass'
        ],

        data : function () {
            return {
                showModal : false
            }
        },

        methods: {
            /**
             * toggles the model between show and hide
             * @return {void}
             */
            toggleModal() {
                this.showModal = !this.showModal;
            },

            /**
             * emits message to parent class to remove this item from the cart
             * @return {void}
             */
            updateCart() {
                this.toggleModal();
                this.$emit('remove-item', this.product_id);
            }
        }
    }
</script>