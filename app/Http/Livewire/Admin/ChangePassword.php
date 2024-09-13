<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ChangePassword extends Component
{
    public $currentPassword = '';
    public $password = '';
    public $password_confirmation = '';

    protected $rules = [
        'currentPassword' => ['required','current_password'],
        'password' => ['required','confirmed'],
    ];

    public function submit(){
        $this->validate();
        
        try {            
            $admin = User::findOrFail(auth()->user()->id);            
            $admin->password = Hash::make($this->password);
            $admin->save();
            
            $this->emit('passwordChanged');
            $this->reset();
            Auth::logout();

        } catch (\Throwable $th) {
            Log::error($th->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.admin.change-password');
    }
}
