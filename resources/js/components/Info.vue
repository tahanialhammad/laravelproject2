<template>
  <div>
      <h3>{{ message }}</h3>
      <h5 class="myinfo">
          <slot name="firstname"></slot>
          <slot name="lastname"></slot>
          <slot></slot>
      </h5>
        <!-- <ul>
            <li v-for="skill in skills" v-text="skill"></li>
        </ul> -->
        <div>
            <h5>{{city}}</h5>
            <span>{{address}}</span>
        </div>
  </div>
</template>

<script>
export default {
     props: ['city', 'address'],
     data () {
        return {
            message : 'Welkom op onze website',
            skills : ['html', 'css']
            };
    }
}
</script>


<style lang="scss">
  .myinfo{color:green;}
</style>
