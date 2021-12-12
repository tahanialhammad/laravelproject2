@extends('user.templates.user-template')

@section('content')
<h1>vuejs component learn-vue-2-step-by-step </h1>
<div>
<h3> without vuejs not work</h3>
     <input type="text" id="input1">
     <hr>
<h1>tahani</h1>
    <les1></les1>
    <hr>
    <les3></les3>
    <hr>
    <les5></les5>
    <hr>
    <les6></les6>
    <hr>
    <les7>slot tekest 1</les7>
    <les7>slot tekest 2</les7>
    <hr>
    <les9 title="pass title prop" body="pas body text prop to message template"></les9>
    <hr>
    <h3>modal</h3>
    <les10 v-if="showModal" @close="showModal = false">any text to the solt</les10>
    <button @click="showModal= true" class="btn btn-secondary">show modal</button>
    <hr>
    <h3>tabs</h3>
    <les11></les11>
</div>
@stop

