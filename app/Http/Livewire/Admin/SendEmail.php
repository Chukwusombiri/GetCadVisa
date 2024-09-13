<?php

namespace App\Http\Livewire\Admin;

use App\Mail\SendEmailMessage;
use App\Models\EmailList;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class SendEmail extends Component
{
    use WithFileUploads;

    public $recipients = [];
    public $newRecipient = '';
    public $subject = '';
    public $body = '';
    public $isBulk = 'no';
    public $allUsers = [];
    public $attachees=[];
    protected function rules(){
        return [
            'recipients' => ['required','array'],
            'recipients.*' => ['required','email'],            
            'subject' => ['required','string'],
            'body' => ['required','string'],
            'attachees' => [Rule::excludeIf(! $this->attachees),'array',],
            'attachees.*' => [Rule::excludeIf(! $this->attachees),'file','max:2000'],
        ]; 
    } 

    protected $validationAttributes = [
        'newRecipient' => 'New recipient',
        'recipients.*' => 'Recipient email address',
        'attachees' => 'Uploaded files',
        'attachees.*' => 'Uploaded file'
    ];

    public function mount($sentRecipients){        
        if(is_array($sentRecipients)){
            foreach ($sentRecipients as $value) {
                $this->recipients[]=$value;
            }
        }

        if(session()->get('isBulk')){
            $this->isBulk = session('isBulk');            
        }
    }    

    public function handleFocus(){
        $this->allUsers = EmailList::select('email')->get();
    }

    public function updatedNewRecipient(){
        $this->allUsers = EmailList::where('email','like','%'.$this->newRecipient.'%')->get();
    }

    public function setUser($email){
        $this->newRecipient = $email;
        $this->allUsers = [];
    }

    public function addRecipient(){
        $this->validate([
            'newRecipient' => ['required','email',Rule::notIn($this->recipients),],
        ]);
        $this->recipients[] = $this->newRecipient;
        $this->newRecipient = '';    
        $this->emit('addedRecipient');
    }

    public function removeRecipient($index){
        unset($this->recipients[$index]);
    }

    public function removeFile($index)
    {
        array_splice($this->attachees, $index, 1);
    }

    public function sendEmail(){        
        $this->validate();
        
        $storedFiles = [];
        if(count($this->attachees)>0){
            foreach ($this->attachees as $file) {
                $storedFiles[] = $file->store('attachments');
            }
        }
        
        try {
            $data = [
                'subject'=>$this->subject,
                'body'=>$this->body,
                'attachees' => $storedFiles,
            ];
            foreach ($this->recipients as $key => $value) {
                Mail::to($value)->send(new SendEmailMessage($data));
            }            
            $this->emit('EmailSent');
            if(session()->has('isBulk')){
                session()->forget('isBulk');
            }
            foreach($storedFiles as $file){
                Storage::disk('public')->delete($file);
            }            
            $this->reset();
        } catch (\Throwable $th) {
            Log::info('Unable to send email: '.$th->getMessage());
           $this->emit('actionFailed');
        }       
    }
        
    public function render()
    {       
        return view('livewire.admin.send-email');
    }
}
