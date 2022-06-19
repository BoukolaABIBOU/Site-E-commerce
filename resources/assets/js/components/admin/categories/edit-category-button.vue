<template>
    <div>
        <button v-if="showButton" class="btn btn-primary" @click="showButton = false">Modifier une catégorie</button>
        <category-form v-else :currentCategory="category" @close-form="showButton = true"></category-form>
    </div>
</template>

<script>
    export default {
        props: ['category'],

        data : function() {
            return {
                showButton : true,
            }
        }
    }
</script>