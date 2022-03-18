@extends('user.templates.user-template')

@section('content')
<div>
  <h1>test, data from staticcontroller</h1>
  {{$myuser}}
  {{-- that giv as homeny user per manth --}}
  {{-- <hr>
  {{dd($monthCount) }}
  <hr>
  {{ dd($months)}}
  <hr> --}}
{{-- use graph 5  --}}
  <graph5 :chartdata="{{ json_encode($monthCount) }}" chartbgcolor="green"></graph5>

  <hr>
  {{-- genreated in base template --}}
   <canvas id="myChart"></canvas>
</div>





















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
        <hr>

        <h3>returen to vuejs</h3>
        <ul>
            <li></li>
        </ul>
        <hr>

        <h3>Ajax</h3>
        <ul>
          <li>Loadmore posts with Ajax </li>
          <li>php artisan make:controller LoadMoreController</li>
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

<h1>bootstrap form validation</h1>

<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">State</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>

@stop