<template>
    <form :action="post_address" method="post" @submit.prevent="beforeSubmit">
        <input type="hidden" name="_token" :value="csrf_token"/>
        <div class="row top-buffer-20">
            <div :class="{'form-group': true, 'has-error' : errors.has('email')}">
                <label for="email"
                       class="col-md-4 control-label">
                    Adresse courriel
                </label>
                <div class="col-md-6">
                    <input id="email"
                           type="email"
                           class="form-control"
                           name="email"
                           v-validate="'required|email'"
                           value=""
                           autofocus>
                    <span class="help-block"
                          id="email-error"
                          v-show="errors.has('email')">
                        <strong>{{ errors.first('email') }}</strong>
                    </span>
                </div>
            </div>
        </div><!-- /.row -->
        <div class="row top-buffer-20">
            <div :class="{'form-group': true, 'has-error' : errors.has('password')}">
                <label for="password" class="col-md-4 control-label">Mot de passe</label>

                <div class="col-md-6">
                    <input id="password"
                           type="password"
                           class="form-control"
                           name="password"
                           v-validate="'required'">
                    <span class="help-block"
                          id="password-error"
                          v-show="errors.has('password')">
                        <strong>{{ errors.first('password') }}</strong>
                    </span>
                </div>
            </div>
        </div><!-- /.row -->
        <div class="form-group top-buffer-10">
            <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Se souvenir de moi
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Se connecter
                </button>

                <a class="btn btn-link" :href="forgot_password">
                    Mot de passe oublié?
                </a>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        props : ['csrf_token', 'post_address', 'forgot_password'],

        methods: {
            beforeSubmit(event) {
                let self = this;
                this.$validator.validateAll().then(function(){
                    if (!self.errors.any()) {
                        event.target.submit();
                    }
                });
            }
        }
    }
</script>