<template>
  <div>
      <h3 :class="className">Les 5: Attribute and Class Binding</h3>
      <button class="btn btn-info" title="i am the titiel">hover over me</button>
      <button class="btn btn-primary" :title="title">hover over me</button>
      <button :class="{'is-loading' : true}">true class </button>
      or 
      <button :class="{'is-loading' : false}">false class </button>
      or 
      <button :class="{'is-loading' : isLoading }" @click="toggleClass">toggle class method</button>
      or 
      <button class="btn btn-danger" :disabled= isDisabled @click="disableBtn">disable btn method</button>


  </div>
</template>

<script>
export default {
  data(){
    return{
      title : 'title from vue ja',
      className : 'color-red',
      isLoading : false , //define the defult value
      isDisabled :false,
    }
  },
  methods :{
    toggleClass (){
      this.isLoading = true;
    },
    disableBtn (){
      this.isDisabled = true;
    }
  },
 
}
</script>

<style>
.color-red{color: red;}
.is-loading{background-color: orangered;}
</style>