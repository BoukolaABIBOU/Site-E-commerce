<template>
    <div class="message-container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="alert alert-success">
                    <strong>Succès!</strong> {{ message }}
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</template>

<script>
    export default {
        props: ['message'],
    }
</script>

<style>

</style>
