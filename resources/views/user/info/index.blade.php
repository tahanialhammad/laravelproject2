@extends('user.templates.user-template')

@section('content')
<div>
    <div>
        <p>php artisan make:controller StaticPageController</p>
    </div>

    <!-- Livewire en multistep form -->
    <div>
        <ul>
            <li> composer require livewire/livewire</li>
            <li>include css en js in base-template file</li>
            <li>start leren Livewire</li>
            <li>php artisan livewire:make Counter <span>that wil creat class in http en view</span></li>
            <li>php artisan livewire:make ContactForm</li>
            <li> php artisan make:mail ContactFormMailable</li>
            <li>php artisan livewire:make SearchDropdown</li>
            <li>Pagination</li>
            <li>php artisan livewire:make DataTables</li>
            {{-- <li>php artisan make:livewire MultiStepForm</li> --}}
        <li>livewire load more pagination from youtub https://www.youtube.com/watch?v=EgjNDZxnJEU</li>
        </ul>
        <h3>stop from Livewire: last les is 5</h3>
        <h3>returen to vuejs</h3>
        <ul>
            <li></li>
        </ul>
    </div>

    <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 111">
  <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>
</div>
@stop