@extends('user.templates.user-template')

@section('content')
<div>
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
     Tooltip on top
 </a>


 <button type="button" class="btn btn-secondary"
         data-bs-toggle="tooltip" data-bs-placement="top"
         data-bs-html="true"
         data-bs-delay ="1000"
         title="link in tootip <br/><a href='http://getbootstrap.com/apple-touch-icon.png' >fff</a>">
     Tooltip on top
 </button>


 <a type="button" class="btn btn-secondary"
    data-bs-toggle="tooltip" data-bs-placement="top"
    data-bs-html="true"
    data-bs-delay ="1000"
    title ="klik hier <a href='https://www.youtube.com/' class='text-danger'>hbhb</a>"
 data-bs-template ='<div class="bg-info tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner text-white"></div></div>'>
 templ</a>




</div>
</div>
@stop