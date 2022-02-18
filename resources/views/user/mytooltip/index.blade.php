@extends('user.templates.user-template')

@section('content')
<div>


  <hr>
    <div>
        <h1>Bootstrap tool tip with Popperjs</h1>
    </div>
<div>
    <h3>defualt</h3>
    <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
        Tooltip on top
      </button>
      <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
        Tooltip on right
      </button>
      <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
        Tooltip on bottom
      </button>
      <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">
        Tooltip on left
      </button>
      <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
        Tooltip with HTML
      </button>
</div>

<div>
    <h3>with more option </h3>
    <a type="button" class="btn btn-secondary"
    data-bs-toggle="tooltip"
    data-bs-placement="top"
    data-bs-html="true"
    data-bs-animation="false"
    data-bs-custom-class="xcoretool"
    title="photo in tootip <br/><img src='http://getbootstrap.com/apple-touch-icon.png' />">
     Tooltip with img
 </a>


 <button type="button" class="btn btn-secondary"
         data-bs-toggle="tooltip" data-bs-placement="top"
         data-bs-html="true"
         data-bs-delay ="1000"
         title="link in tootip <br/><a href='http://getbootstrap.com/apple-touch-icon.png' class='text-success'>link</a>">
     Tooltip with link
 </button>


 <a type="button" class="btn btn-secondary"
    data-bs-toggle="tooltip" data-bs-placement="top"
    data-bs-html="true"
    data-bs-delay ="1000"
    title ="klik hier <a href='https://www.youtube.com/' class='text-danger'>use data template</a>"
 data-bs-template ='<div class="bg-info tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner text-success"></div></div>'>
 tooltip with template style</a>



 <a type="button" class="btn btn-secondary"
 data-bs-toggle="tooltip" data-bs-placement="top"
 data-bs-html="true"
 data-bs-delay ="1000"
 title ="klik hier <a href="https://www.youtube.com/">use data template</a>"
>
tooltip with xcore problem</a>

<hr>

<tool-tip title="haalo xcore tool tip with bindings"></tool-tip>

<hr>
<h1>Popover from Bootstrap</h1>
<button type="button" class="btn btn-lg btn-success" data-bs-toggle="popover"  data-bs-html="true" title="Popover title"  data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>


<button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-trigger="hover" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>


<hr>

<button id="popover-target-1">
  hover over me
</button>

<div target="popover-target-1"
data-bs-toggle="popover">
<template v-solt:title>POPPPPOVER TITLE</template>
bodytext
</div>

</div>
</div>
@stop