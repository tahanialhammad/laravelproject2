<template>
  <div class="container">
 <h3>Les 9: met bulma : Practical Component Exercise #1: Message</h3>
 <p>pass title and body props</p>
 <article class="message" v-show="isVisable">
    
  <div class="message-header">
    <p>{{ title }}</p>
     <!-- or inline -->
    <!-- <button class="delete" aria-label="delete" @click="hideModal"></button> -->
        <button class="delete" aria-label="delete" @click="isVisable = flase"></button>

  </div>
  <div class="message-body">
{{ body }}  
</div>
</article>
  </div>
</template>

<script>
export default {
    props: ['title', 'body'],
      data () {
        return {
          isVisable : true,
        }
      },
      methods : {
          hideModal(){
              this.isVisable =false;
          },
      },
}
</script>