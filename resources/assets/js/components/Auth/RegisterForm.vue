<template>
  <form method="POST" :action="action" ref="form">
    <input type="hidden" name="_token" :value="token">

    <v-text-field v-model="name"
      label="Name"
      v-validate="'required'"
      name="name"
      data-vv-name="name" required
    ></v-text-field>

    <v-text-field v-model="email"
      label="E-mail"
      :error-messages="errors.collect('email')"
      v-validate="'required|email'"
      name="email" data-vv-name="email"
      required
    ></v-text-field>

    <v-text-field v-model="password"
      label="Password"
      :error-messages="errors.collect('password')"
      v-validate="'required|min:8'"
      name="password"
      data-vv-name="password"
      required
      type="password"
    ></v-text-field>

    <v-text-field v-model="password_confirmation"
      label="Password Confirmation"
      :error-messages="errors.collect('password_confirmation')"
      v-validate="'required|min:8|confirmed:password'"
      name="password_confirmation"
      data-vv-name="password_confirmation"
      data-vv-as="password confirmation"
      type="password"
      required
    ></v-text-field>

    <v-checkbox v-model="checkbox"
      value="1"
      label="Remember me"
      name="remember"
      :error-messages="errors.collect('checkbox')"
      data-vv-name="remember"
    ></v-checkbox>

    <v-btn @click="submit">submit</v-btn>
  </form>
</template>


<script>
export default {
  props: ['token', 'action'],

  $validates: true,
  data() {
    return {
      name: '',
      email: '',
      password: '',
      password_confirmation: '',
      checkbox: null
    }
  },
  methods: {
    submit() {
      this.$validator.validateAll()
        .then((success) => {
          if (success) this.$refs.form.submit();
        })
        .catch(err => console.error(err));

    }
  }

}
</script>



<style lang="sass"></style>