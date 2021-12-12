<template>
  <div>
 <h3>Les 10: Practical Component Exercise #2: Modal in bulma</h3>
 <div class="modal is-active">
  <div class="modal-background"></div>
  <div class="modal-content">
    <div class="box">
        <p><slot></slot></p>
    </div>
  </div>
  <button class="modal-close is-large" aria-label="close" @click="$emit('close')"></button>
</div>
  </div>
</template>

<script>
export default {
      data () {
        return {
       showModal : false, //default value

        }
      }
}
</script>