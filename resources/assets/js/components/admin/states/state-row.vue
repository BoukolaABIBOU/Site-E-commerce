<template>
    <tr v-if="state">
        <td class="table-element">{{ state.name }}</td>
        <td class="table-element">{{ state.abbreviation }}</td>
        <td>
            <button class="btn btn-primary" @click="openEdit(state)">Editer un état</button>
        </td>
        <td>
            <button class="btn btn-danger" @click="show.deleteForm = true">Supprimer un état</button>
            <confirm-modal v-if="show.deleteForm"
                           @cancel="close"
                           @confirm="onDelete">
                <h3 slot="header">Supprimer {{ state.name }}</h3>
                <p slot="body">
                    Êtes-vous sûr de vouloir supprimer cet état?
                </p>
            </confirm-modal>
        </td>
    </tr>
</template>

<script>
    export default {
        props : ['state', 'refresh', 'openEdit'],

        data : function() {
            return {
                show : {
                    deleteForm : false
                }
            }
        },

        methods : {
            /**
             * closes the delete form
             */
            close() {
                this.show.deleteForm = false
            },

            /**
             * deletes a state
             * @return void
             */
            onDelete() {
                axios.post(window.Laravel.urls.state_api_url + '/' + this.state.id, { _method : 'DELETE'})
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
                this.close();
                this.refresh();
                Event.$emit('update-user-message', message);
            },

            /**
             * updates a user error
             * @return void
             */
            updateError(){
                Event.$emit('update-user-error', 'An error has occurred please try again!');
                this.close();
            }
        }
    }
</script>