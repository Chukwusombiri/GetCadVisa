<?php

namespace App\Http\Livewire\Admin;

use App\Models\Study;
use LivewireUI\Modal\ModalComponent;

class DeleteStudyAssessment extends ModalComponent
{
    public Study $assessment;
    
    public function mount(Study $assessment){
        $this->assessment = $assessment;
    }

    public function delete(){
        $assessment = Study::find($this->assessment->id);
        $assessment->delete();

        $this->closeModalWithEvents(['deletedAssessment']);
    }
    public function render()
    {
        return view('livewire.admin.delete-study-assessment');
    }
}
