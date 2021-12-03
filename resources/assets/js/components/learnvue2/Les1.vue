<template>
  <div>
 <h3>Les 1</h3>
      <input type="text" id="input2" v-model="message">
      <p>the value of the input is : {{ message }} </p>
      <p>data message chacng with typing, this is basic data binding</p>

  </div>
</template>

<script>
export default {
      data () {
        return {
           message : 'with vuejs value',
        }
      }
}
</script>