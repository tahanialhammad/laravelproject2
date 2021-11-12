<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Mail;


class ContactForm extends Component
{
    //public prop
    public $name;
    public $email;
    public $phone;
    public $message;
    public $successMessage;
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required|min:5',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
  
    //add varavible manulay without validation first
    // by using validation we dont need that
        // $contact['name'] = $this->name ;
        // $contact['email'] = $this->email ;
        // $contact['phone'] = $this->phone ;
        // $contact['message'] = $this->message;

        // now we call validietion
        // $contact = $this->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'message' => 'required',
        // ]);

        // by using rul we ca do that
        $contact = $this->validate();
        sleep(1); // to see loding chaing in submit btn 1 sec
        Mail::to('tahanina2014@yahoo.com.com')->send(new ContactFormMailable($contact));
    
        //rest the form , by calling this method or function
        $this->resetForm();
        // send falsh message 
        // session()->flash('success_message', 'We received your message successfully and will get back to you shortly.');
        $this->successMessage = 'We received your message successfully and will get back to you shortly!';

        // return back()->with('success_message', 'We received your message successfully and will get back to you shortly!');

        
    }

    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->message = '';
    }
    
    public function render()
    {
        return view('livewire.contact-form');
    }
}
