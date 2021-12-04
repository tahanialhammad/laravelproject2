<template>
  <div>
 <h3>no les 2, Les 3 and 4</h3>
 <h3>List and Vue Event Listeners</h3>
     <ul>
       <!-- <li v-for="name in names">{{ name }}</li> -->
       or
        <li v-for="name in names" v-text="name"></li>
     </ul>
     <input type="text" id="input2" v-model="newName">
     <!-- <button class="btn btn-danger" id="button1">add name</button> -->
      <!-- <button class="btn btn-danger" v-on:click= "addName">add name</button> -->
      or
            <button class="btn btn-danger" @click= "addName">add name</button>

  </div>
</template>

<script>
export default {
      data () {
        return {
          newName : '', //instionalis new name varabile
           names : ['hashem', 'tahani', 'noor'],
        }
      },
   mounted(){
     //vanela js not work 
    //  document.querySelector('#button1').addEventListener('click', () => {
    //    let name = document.querySelector('#input2');

    //    app.names.push(name.value);

    //    name.value = ''; //return to empty
    //  });
   },
   methods: {
     addName(){
       //alert('test add name methods');
       this.names.push(this.newName);
       this.newName = ''; //clear input 
     },
   },
}
</script>