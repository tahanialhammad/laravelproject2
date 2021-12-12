<template>
  <div>
 <!-- <h3>Les 11: Practical Component Exercise #3: Tabs with bulma</h3> -->
        <div>
            <div class="tabs">
                <ul>
                    <li v-for="tab in tabs" :class="{ 'is-active': tab.isActive }">
                        <a :href="tab.href" @click="selectTab(tab)">{{ tab.name }}</a>
                    </li>
                </ul>
            </div>
            <div class="tabs-details">
                <slot></slot>
            </div>
        </div>
  </div>
</template>

<script>

export default {
      data () {
        return {
         tabs : [], //defauilt with empty array
        }
      },
      // mounted (){
      //   console.log(this.$children)
      // },
      created(){
        this.tabs = this.$children
      },
      methods:{
        selectTab (){
          //alert('selecting');
         this.tabs.forEach(tab => {
                tab.isActive = (tab.href == selectedTab.href);
            });
        }
      }
}
</script>