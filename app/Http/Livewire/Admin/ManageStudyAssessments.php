<?php

namespace App\Http\Livewire\Admin;

use App\Models\Study;
use Livewire\Component;
use Livewire\WithPagination;

class ManageStudyAssessments extends Component
{
    use WithPagination;   
    public $sorter = 'desc';    
    public $search ='';

    protected $listeners = [                             
        'deletedAssessment'=>'$refresh',                   
    ];
    
    public function updatingSearch()
    {
        $this->resetPage();                   
    }

    public function clear(){
        $this->search = '';
    }

    public function render()
    {
        return view('livewire.admin.manage-study-assessments',[
            'assessments' => Study::where('first_name', 'like', '%'.$this->search.'%')      
            ->orWhere('last_name','LIKE', '%'.$this->search.'%')      
            ->orWhere('email','LIKE', '%'.$this->search.'%')
            ->orWhere('telephone','LIKE', '%'.$this->search.'%')        
            ->orderBy('created_at',$this->sorter)
            ->paginate(7),
        ]);
    }
}
