<template>
    <div>
        <button class="btn btn-danger" @click="showModal=true">Supprimer la catégorie</button>
        <confirm-modal v-if="showModal"
                       @cancel="close()"
                       @confirm="onDelete">
            <h3 slot="header">Supprimer {{ category.name }}</h3>
            <p slot="body">
                Êtes-vous sûr de vouloir supprimer cette catégorie?
            </p>
        </confirm-modal>
    </div>
</template>

<script>
    export default {
        props : ['category'],

        data : function() {
            return {
                showModal : false,
                post : {
                    _method : 'DELETE'
                }
            }
        },

        methods: {
            /**
             * closes the confirm modal
             * @return void
             */
            close() {
                this.showModal = false;
            },

            /**
             * performs an ajax request to delete the category
             * @return void
             */
            onDelete(){
                axios.post(window.Laravel.urls.category_api_url + '/' + this.category.id, this.post)
                    .then(
                        (response) => this.updateMessage(response.data.message)
                    )
                    .catch(
                        () => this.updateError()
                    )
            },


            /**
             * updates a user error
             * @param message
             * @return void
             */
            updateMessage(message) {
                this.showButton = true;
                Event.$emit('update-user-message', message);
                Event.$emit('refresh-categories');
            },

            /**
             * updates a user error
             * @return void
             */
            updateError(){
                Event.$emit('update-user-error', 'An error has occurred please try again!');
                this.showButton = true;
            }
        }
    }
</script>