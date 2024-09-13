<?php

namespace App\Http\Livewire\Admin;

use App\Models\General;
use LivewireUI\Modal\ModalComponent;

class DeleteAssessment extends ModalComponent
{
    public General $assessment;
    
    public function mount(General $assessment){
        $this->assessment = $assessment;
    }

    public function delete(){
        $assessment = General::find($this->assessment->id);
        $assessment->delete();

        $this->closeModalWithEvents(['deletedAssessment']);
    }
    public function render()
    {
        return view('livewire.admin.delete-assessment');
    }
}
