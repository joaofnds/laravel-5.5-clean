<template>
    <form method="POST" :action="action" ref="form">
        <input type="hidden" name="_token" :value="token" >

        <v-text-field
            v-model="email"
            label="E-mail"
            :error-messages="errors.collect('email')"
            v-validate="'required|email'"
            name="email"
            data-vv-name="email"
            required
        ></v-text-field>

        <v-text-field
            v-model="password"
            label="Password"
            :error-messages="errors.collect('password')"
            v-validate="'required|min:8'"
            name="password"
            data-vv-name="password"
            required
            type="password"
        ></v-text-field>

        <v-checkbox
            v-model="checkbox"
            value="1"
            label="Remember me"
            name="remember"
            :error-messages="errors.collect('checkbox')"
            data-vv-name="remember"
        ></v-checkbox>

        <v-btn @click="submit">submit</v-btn>
        <v-btn @click="clear">clear</v-btn>
    </form>
</template>


<script>
    export default {
        props: ['token', 'action'],

        $validates: true,
        data () {
            return {
                email: '',
                password: '',
                checkbox: null
            }
        },
        methods: {
            submit () {
                this.$validator.validateAll()
                    .then((success) => {
                        if (success) this.$refs.form.submit();
                    })
                    .catch(err => console.error(err));

            },
            clear () {
                this.email = ''
                this.password = ''
                this.checkbox = false
                this.$validator.clean()
            }
        }

    }
</script>



<style lang="sass"></style>