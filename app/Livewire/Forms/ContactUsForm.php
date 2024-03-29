<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactUsForm extends Form
{
    #[Rule('required|min:5|max:50')]
    public $name;
    #[Rule('required|email|max:50')]
    public $email;
    #[Rule('required|min:5|max:50')]
    public $subject;
    #[Rule('required|min:5|max:50')]
    public $message;
    public function sendEmail()
    {
        sleep(5);
    }
}
