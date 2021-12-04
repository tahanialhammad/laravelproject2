<template>
  <div>
 <h3>Les 6: Computed Properties</h3>
 <h5 v-text="new Date()"></h5>

 <h5>{{ message }}</h5> and reverse
 <h5>{{ message.split('').reverse().join('') }}</h5>
 or reverse with computed prop
 <h5>{{ reversedMessage}}</h5>

 <h3>all tasks</h3>
<ul>
    <li v-for="task in tasks" v-text="task.description"></li>
</ul>

 <h3>completed tasks with v if </h3>
<ul>
    <li v-for="task in tasks" v-if="task.completed" v-text="task.description"></li>
</ul>

 <h3>Incompleted tasks with loop throught computed prop and filter </h3>
<ul>
    <li v-for="task in incompletedTasks"  v-text="task.description"></li>
</ul>
  </div>
</template>

<script>
export default {
      data () {
        return {
           message : 'hallo world',
           //tasks object
           tasks : [
                { description : 'taske 1 description', completed : false},
                { description : 'taske 2 description', completed : false},
                { description : 'taske 3 description', completed : true},
                { description : 'taske 4 description', completed : true},
                { description : 'taske 5 description', completed : true},
           ]
        }
      },
      computed:{
         reversedMessage(){
             return this.message.split('').reverse().join('')
         },
        incompletedTasks (){
            return this.tasks.filter(task => ! task.completed);
        }
      },
}
</script>