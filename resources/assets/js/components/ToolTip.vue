<template>
  
   <button type="button" class="btn btn-danger" 
   data-bs-toggle="tooltip" data-bs-html="true" 
    data-bs-delay="5000"
   :title="title">



        Tooltip vueJS
      </button>

</template>

<script>
export default {
 data () {
        return {
            title : this.$el.innerHTML
            };
    }
}
</script>
