<template>
    <div class="well">
        <h4><u>Détails du compte:</u></h4>
        <p v-if="user">
            <strong>Nom:</strong>  {{ user.first_name }} {{ user.last_name }} <br />
            <strong>Prénom: </strong>  {{ user.user_name }} <br />
            <strong>Email: </strong> {{ user.email }}
        </p>
    </div><!-- /.well -->
</template>

<script>
    export default {
        props: ['user']
    }
</script>