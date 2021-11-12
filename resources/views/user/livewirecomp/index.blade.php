@extends('user.templates.user-template')

@section('content')
<h1>Livewire</h1>
<p>https://github.com/laracasts/lc-livewire-examples</p>
<hr>
<h3>basic livewire</h3>
<livewire:counter></livewire:counter>
<hr>
<h3>contact form with real time validation</h3>
<livewire:contact-form></livewire:contact-form>
<hr>
<p>Les 3 for Contact Form Testing i dont make it</p>
<hr>
<h3>Search Dropdown, design with Tailwind , and using iTunes search API (nap data)</h3>
<p>https://developer.apple.com/library/archive/documentation/AudioVideo/Conceptual/iTuneSearchAPI/SearchExamples.html#//apple_ref/doc/uid/TP40017632-CH6-SW1</p>
<livewire:search-dropdown/>

@stop