@extends('user.templates.user-template')

@section('content')
<div>

@include('user.mytooltip.partials.bootstrap-tooltip')
  <hr>
  @include('user.mytooltip.partials.bootstrap-popover')
<hr>

<div>
  <h1>tray to use tooltip van Jefry in main div # app ;;;; not work jet may be later</h1>

    <p>Step 1: hello there, <span data-jtooltip="i am a tool tip with data atrabute APi">hover over me </span></p>
    <hr>
    <p>Option #2: hello there, <span v-jtooltip:top="'i am a tool tip with vue directive, we mmake anothor quma becouse vue expect java '">hover over me </span></p>
    <hr>
    <p>Option #3: hello there with template, by register ponter where the tooltip triger is <span data-jtooltip-name="our-products-tooltip">hover over me leren about our produvcts</span></p>

    <jtemptooltip name="our-products-tooltip">
        <h1>our product body of the tooltip</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisiccusandae. Numquam, nisi.</p>
    </jtemptooltip>
</div>

</div>
</div>
@stop