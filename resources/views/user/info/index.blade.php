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
            {{-- <li>php artisan make:livewire MultiStepForm</li> --}}
        
        </ul>
    </div>
</div>
@stop