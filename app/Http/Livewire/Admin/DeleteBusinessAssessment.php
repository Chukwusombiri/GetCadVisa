<?php

namespace App\Http\Livewire\Admin;

use App\Models\Business;
use LivewireUI\Modal\ModalComponent;

class DeleteBusinessAssessment extends ModalComponent
{
    public Business $assessment;
    
    public function mount(Business $assessment){
        $this->assessment = $assessment;
    }

    public function delete(){
        $assessment = Business::find($this->assessment->id);
        $assessment->delete();

        $this->closeModalWithEvents(['deletedAssessment']);
    }
    public function render()
    {
        return view('livewire.admin.delete-business-assessment');
    }
}
