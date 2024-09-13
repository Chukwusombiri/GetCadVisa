<?php

namespace App\Http\Livewire\Admin;

use App\Models\Sponsorship;
use LivewireUI\Modal\ModalComponent;

class DeleteSponsorAssessment extends ModalComponent
{
    public Sponsorship $assessment;
    
    public function mount(Sponsorship $assessment){
        $this->assessment = $assessment;
    }

    public function delete(){
        $assessment = Sponsorship::find($this->assessment->id);
        $assessment->delete();

        $this->closeModalWithEvents(['deletedAssessment']);
    }
    
    public function render()
    {
        return view('livewire.admin.delete-sponsor-assessment');
    }
}
