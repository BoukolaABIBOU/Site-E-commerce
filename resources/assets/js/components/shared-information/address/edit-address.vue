<template>
    <div>
        <div @click="toggleForm">
            <span>Modifier</span>
        </div>
        <full-screen v-if="showForm"
                     @cancel-modal-form="showForm = false">
            <h3 slot="header">Modifier cette adressse</h3>
            <div slot="body">
                <user-address-form :editAddress="address"
                                   :close="closeForm"
                                   @form-submit="formSubmit">

                </user-address-form>
            </div>

        </full-screen>
    </div>
</template>

<script>

    export default {
        props : [
            'address', 'refresh'
        ],

        data : function() {
            return {
                showForm : false
            }
        },

        methods: {
            /**
             * toggle the address modal
             * @return void
             */
            toggleForm() {
                this.showForm = !this.showForm;
            },

            /**
             * closes the form and refreshes the addresses on the screen
             * @return void
             */
            formSubmit() {
                this.refresh();
                this.showForm = false;
            },

            /**
             * closes the form
             * @return void
             */
            closeForm() {
                this.showForm = false;
            }
        }

    }
</script>
