<?php

namespace App\Http\Livewire;

use App\Models\EmailList;
use Livewire\Component;

class Subscription extends Component
{
    public $email;
    public $response;
    protected $rules=[
        'email'=>['required','email:dns,rfc','unique:email_lists'],
    ];

    public function submit(){
        $this->validate();
        $subcriber = new EmailList();
        $subcriber->email = $this->email;
        $subcriber->save();
        session()->flash('subscribed','You\'ve successfully subscribed!!');
        $this->reset();        
    }

    public function render()
    {
        return view('livewire.subscription');
    }
}
