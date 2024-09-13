<?php

namespace App\Http\Livewire;

use App\Mail\VisaAssessmentMail;
use App\Models\EmailList;
use App\Models\Study;
use App\Models\User;
use App\Notifications\AdminAssessmentRequestNotification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class StudyAssessment extends Component
{
    use WithFileUploads;
    
    public $first_name='';
    public $last_name='';
    public $email='';
    public $telephone='';
    public $nationality='';
    public $residence='';
    public $age='';
    public $living_expense_capability_status='';
    public $admission_status='';
    public $study_start='';
    public $study_province='';
    public $previous_study_immigration_attempt_status='';      
    public $passport;
    /* arrays */ 
    public $country_list = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
    public $province_list = ["Alberta","British Columbia","Manitoba","New Brunswick","Newfoundland and Labrador","Northwest Territories","Nova Scotia","Nunavut","Ontario","Prince Edward Island","Quebec","Saskatchewan","Yukon"];  

    public $step = 1;

    public function prevStep(){
        $this->step=1;
        return;
    }

    public function submitStep1(){
        if(session()->has('infos')) session()->forget('infos');

        $this->validate([
            'first_name'=>['required','string'],
            'last_name'=>['required','string'],
            'email'=>['required','email:rfc,dns'],
            'telephone'=>['required', 'regex:/^(\+[0-9] ?+|[0-9] ?+){6,14}[0-9]$/'],
            'nationality'=>['required','string',Rule::in($this->country_list)],
            'residence'=>['required','string',Rule::in($this->country_list)],
            'age'=>['required','numeric','integer',],
            'living_expense_capability_status'=>['required','string',Rule::in(['Yes','No'])],
            'admission_status'=>['required','boolean'],
            'study_start'=>[Rule::excludeIf($this->admission_status==false),'required','date'],
            'study_province'=>[Rule::excludeIf($this->admission_status==false),'required','string'],
            'previous_study_immigration_attempt_status'=>['required','string'], 
        ]);

        session()->put('infos',[
            'first_name'=>$this->first_name,
            'last_name'=>$this->last_name,
            'email'=>$this->email,
            'telephone'=>$this->telephone,
            'nationality'=>$this->nationality,
            'residence'=>$this->residence,
            'age'=>$this->age,
            'living_expense_capability_status'=>$this->living_expense_capability_status,
            'admission_status'=>$this->admission_status,
            'study_start'=>$this->admission_status ? $this->study_start : null,
            'study_province'=>$this->admission_status ? $this->study_province : null,
            'previous_study_immigration_attempt_status'=>$this->previous_study_immigration_attempt_status, 
        ]);
        $this->step = 2;
        return;
    }

    public function submitFinal(){
        $this->validate();

        $assessment = new Study();
        $assessment->first_name = $this->first_name;
        $assessment->last_name = $this->last_name;
        $assessment->email = $this->email;
        $assessment->telephone = $this->telephone;
        $assessment->age = $this->age;        
        $assessment->residence = $this->residence;
        $assessment->nationality = $this->nationality;        
        $assessment->living_expense_capability_status = $this->living_expense_capability_status;
        $assessment->admission_status = $this->admission_status;
        $assessment->previous_study_immigration_attempt_status = $this->previous_study_immigration_attempt_status;
        $assessment->study_province = $this->admission_status ? $this->study_province : null;
        $assessment->study_start = $this->admission_status ? $this->study_start : null;     
        $assessment->passport = $this->passport->storePublicly('students','public');                          
        $assessment->save();   
    
        $subscriber = EmailList::firstOrNew([
            'email' => $this->email
        ]);
        $subscriber->save();

        try {
            $sbj = 'Study Permit Assessment';
            $msg = $this->first_name.' '.$this->last_name.', Thank you for taking the time to complete our Student visa assessment. After careful review of your credentials and other informations you submitted, we will reach out to you concerning your eligibity status and offer further guidance should you decide to continue your application using our immigration service.';
            Mail::to($this->email)->send(new VisaAssessmentMail($msg, $sbj));        
            if($admin = User::first()){
                $admin->notify(new AdminAssessmentRequestNotification($assessment));
            }
            session()->forget('infos');
            return redirect()->route('completedAssessment')->with(['assessmentSubmitted'=>'successful']);
        } catch (\Throwable $th) {
            throw $th;
            Log::error($th->getMessage());
            return redirect()->route('completedAssessment')->with(['assessmentSubmitted'=>'successful']);
        }
    }


    public function mount(){
        if(session()->has('infos')){
            $infos = session()->get('infos');
            $this->first_name = $infos['first_name'];
            $this->last_name = $infos['last_name'];
            $this->email = $infos['email'];
            $this->nationality = $infos['nationality'];
            $this->residence = $infos['residence'];
            $this->telephone = $infos['telephone'];
            $this->age = $infos['age'];
            $this->living_expense_capability_status = $infos['living_expense_capability_status'];
            $this->admission_status = $infos['admission_status'];
            $this->study_start = $infos['admission_status'] ? $infos['study_start'] : '';
            $this->study_province = $infos['admission_status'] ? $infos['study_province'] : '';
            $this->previous_study_immigration_attempt_status = $infos['previous_study_immigration_attempt_status'];
            $this->step = 2;
        }
    }

    protected function rules(){ return [
        'first_name'=>['required','string'],
        'last_name'=>['required','string'],
        'email'=>['required','email:rfc,dns'],
        'telephone'=>['required', 'regex:/^(\+[0-9] ?+|[0-9] ?+){6,14}[0-9]$/'],
        'nationality'=>['required','string',Rule::in($this->country_list)],
        'residence'=>['required','string',Rule::in($this->country_list)],
        'age'=>['required','numeric','integer',],
        'living_expense_capability_status'=>['required','string',Rule::in(['Yes','No'])],
        'admission_status'=>['required','boolean'],
        'study_start'=>[Rule::excludeIf($this->admission_status==false),'required','date'],
        'study_province'=>[Rule::excludeIf($this->admission_status==false),'required','string'],
        'previous_study_immigration_attempt_status'=>['required','string'],   
        'passport'=>['required','image','max:2000'],
    ];}
    
    protected $validationAttributes=[
        'first_name'=>'First name',
        'last_name'=>'Last name',
        'living_expense_capability_status'=>'Living expense status',
        'study_start'=>'Study start',
        'study_province'=>'Province',
        'previous_study_immigration_attempt_status'=>'Study permit refusal status',
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.study-assessment');
    }
}
