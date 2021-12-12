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
    <h3>Les 11 : tabs</h3>
    <p>https://gist.github.com/JeffreyWay/f844ca4dd1887d566759849665068162</p>
    <tabs>
        <tab name="About Us" :selected="true">
            <h1>Here is the content for the about us tab.</h1>
        </tab>

        <tab name="About Our Culture">
            <h1>Here is the content for the about our culture tab.</h1>
        </tab>

        <tab name="About Our Vision">
            <h1>Here is the content for the about our vision tab.</h1>
        </tab>
    </tabs>
    
    <hr>
    <h3>Les 12 :Component Communication Example #1: Custom Events</h3>
    {{-- <coupon v-on:applied="onCouponApplied"></coupon> --}}
    <coupon @applied="onCouponApplied"></coupon>
<h1 v-if="couponApplied">resut of usung coupon : you use a coupon</h1>
</div>
@stop

