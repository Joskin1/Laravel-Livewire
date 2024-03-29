<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactUsForm;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ContactUs extends Component
{
public ContactUsForm $form;
    public function submitForm()
    {
        $this->form->validate();
        $this->form->sendEmail();

        session()->flash('success','You message has been delivered');
        $this->form->reset('subject','message');

    }
    public function render()
    {
        return view('livewire.contact-us');
    }
}
