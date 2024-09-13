<?php

namespace App\Http\Livewire;

use App\Mail\VisaAssessmentMail;
use App\Models\Business;
use App\Models\EmailList;
use App\Models\User;
use App\Notifications\AdminAssessmentRequestNotification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;


class BusinessAssessment extends Component

{

    use WithFileUploads;
    /* personal */
    public $first_name='';
    public $last_name='';
    public $email='';
    public $telephone='';
    public $nationality='';
    public $residence='';
    public $age='';

    /* net worth */
    public $net_worth='';

    /* managements */
    public $management_status='';
    public $managements = [];

    /* others */
    public $criminal_record_status='';
    public $medical_condition_status='';
    public $comment='';

    /* passport */
    public $passport;


    /* arrays */
    public $country_list = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];    


    public $step=1;

    /* personal */
    public function changeStep($step){
        $this->step = $step;
        return;
    }

    public function submitStep1(){
        if(session()->has('personalDetails')) session()->forget('personalDetails');

        $this->validate([
            'first_name'=>['required','string'],
            'last_name'=>['required','string'],
            'email'=>['required','email'],
            'telephone'=>['required', 'regex:/^(\+[0-9] ?+|[0-9] ?+){6,14}[0-9]$/'],
            'nationality'=>['required','string',Rule::in($this->country_list)],
            'residence'=>['required','string',Rule::in($this->country_list)],
            'age'=>['required','numeric','integer',],
        ]);

        session()->put('personalDetails',[
            'first_name'=>$this->first_name,
            'last_name'=>$this->last_name,
            'email'=>$this->email,
            'telephone'=>$this->telephone,
            'nationality'=>$this->nationality,
            'residence'=>$this->residence,
            'age'=>$this->age,
        ]);

        $this->step = 2;
        return;
    }
   
    public function submitStep2(){
        if(session()->has('netWorth')) session()->forget('netWorth');

        $this->validateOnly('net_worth');

        session()->put('netWorth',$this->net_worth);
        $this->step = 3;
        return;
    }

    public function submitStep3(){
        if(session()->has('managementDetails')) session()->forget('managementDetails');

        $this->validate([
            'management_status'=>['required','boolean',],
            'managements'=>[Rule::excludeIf($this->management_status==false),'array'],
            'managements.*'=>[Rule::excludeIf($this->management_status==false),'array'],
            'managements.*.management_title'=>[Rule::excludeIf($this->management_status==false),'required','string'],
            'managements.*.management_organization'=>[Rule::excludeIf($this->management_status==false),'required','string'],
            'managements.*.management_duration'=>[Rule::excludeIf($this->management_status==false),'required','string'],
        ]);

        session()->put('managementDetails',[
            'management_status' => $this->management_status,
            'managements' => $this->management_status==true ? $this->managements : null,
        ]);

        $this->step = 4;
        return;
    }

    public function submitStep4(){
        if(session()->has('otherDetails')) session()->forget('otherDetails');

        $this->validate([
            'criminal_record_status'=>['required','string',],
            'medical_condition_status'=>['required','string',],
            'comment'=>[Rule::excludeIf(!$this->comment),'string'],
        ]);

        session()->put('otherDetails',[
            'criminal_record_status'=>$this->criminal_record_status,
            'medical_condition_status'=>$this->medical_condition_status,
            'comment'=>$this->medical_condition_status!=='' ? $this->medical_condition_status : null,
        ]);

        $this->step = 5;
        return;
    }

    public function submitFinal(){
        $this->validate();
        $assessment = new Business();
        $assessment->first_name = $this->first_name;
        $assessment->last_name = $this->last_name;
        $assessment->email = $this->email;
        $assessment->telephone = $this->telephone;
        $assessment->age = $this->age;
        $assessment->residence = $this->residence;
        $assessment->nationality = $this->nationality;
        $assessment->net_worth = $this->net_worth;
        $assessment->management_status = $this->management_status;
        $assessment->criminal_record_status = $this->criminal_record_status;
        $assessment->medical_condition_status = $this->medical_condition_status;
        if ($this->comment) {
            $assessment->comment = $this->comment;
        }        
        $assessment->managements = ($this->management_status==true) ? json_encode($this->managements) : null;
        $assessment->passport = $this->passport->storePublicly('business','public');
        $assessment->save();   

        $subscriber = EmailList::firstOrNew([
            'email' => $this->email
        ]);
        $subscriber->save();
        
        try {
            $sbj = 'Business Visa Assessment';
            $msg = $this->first_name.' '.$this->last_name.', Thank you for taking the time to complete Business visa assessment on visocanada.com. As one of Canada\'s highest-rated immigration firms, we appreciate the opportunity to assist you with your immigration to Canada. After a thorough review of your work experience and credentials, we will contact you regarding your eligibility status.';
            Mail::to($this->email)->send(new VisaAssessmentMail($msg, $sbj));        
            if($admin = User::first()){
                $admin->notify(new AdminAssessmentRequestNotification($assessment));
            }

            session()->forget([
                'personalDetails',
                'netWorth',
                'managementDetails',
                'otherDetails',
            ]);    
            return redirect()->route('completedAssessment')->with('assessmentSubmitted','successful');
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect()->route('completedAssessment')->with(['assessmentSubmitted'=>'successful']);
        }      
    }

    protected function rules(){
        return [
            'first_name'=>['required','string'],
            'last_name'=>['required','string'],
            'email'=>['required','email'],
            'telephone'=>['required', 'regex:/^(\+[0-9] ?+|[0-9] ?+){6,14}[0-9]$/'],
            'nationality'=>['required','string',Rule::in($this->country_list)],
            'residence'=>['required','string',Rule::in($this->country_list)],
            'age'=>['required','numeric','integer',],
            'net_worth'=>['required','string'],
            'management_status'=>['required','boolean',],
            'managements'=>[Rule::excludeIf($this->management_status==false),'array'],
            'managements.*'=>[Rule::excludeIf($this->management_status==false),'array'],
            'managements.*.management_title'=>[Rule::excludeIf($this->management_status==false),'required','string'],
            'managements.*.management_organization'=>[Rule::excludeIf($this->management_status==false),'required','string'],
            'managements.*.management_duration'=>[Rule::excludeIf($this->management_status==false),'required','string'],
            'criminal_record_status'=>['required','string',],
            'medical_condition_status'=>['required','string',],
            'comment'=>[Rule::excludeIf(!$this->comment),'string'],
            'passport'=>['required','image','max:1999'],
        ];
    }

    protected $validationAttributes =[
        'first_name'=>'First name',
        'last_name'=>'Last name',
        'net_worth'=>'Net worth',
        'management_status'=>'Management experience',
        'managements.*.management_title'=>'Title',
        'managements.*.management_organization'=>'Oranization',
        'managements.*.management_duration'=>'Duration',
        'criminal_record_status'=>'Criminal record field status',
        'medical_condition_status'=>'Medical condition status',
    ];

    public function mount(){
        /* personal info */
        if(session()->has('personalDetails')){
            $personalDetails = session()->get('personalDetails');
            $this->first_name = $personalDetails['first_name'];
            $this->last_name = $personalDetails['last_name'];
            $this->email = $personalDetails['email'];
            $this->telephone = $personalDetails['telephone'];
            $this->nationality = $personalDetails['nationality'];
            $this->residence = $personalDetails['residence'];
            $this->age = $personalDetails['age'];   
            $this->step=2;     
        }

        /* net worth */
        if(session()->has('netWorth')){
            $netWorth = session()->get('netWorth');
            $this->net_worth = $netWorth;
            $this->step=3;
        }

        /* management details */
        if(session()->has('managementDetails')){
            $managementDetails = session()->get('managementDetails');
            $this->management_status = $managementDetails['management_status'];
            $this->managements = $managementDetails['management_status']==true ? $managementDetails['managements'] : null;
            $this->step = 4;
        }else{
            $this->managements = [
                [
                    'management_title'=>'',
                    'management_organization'=>'',
                    'management_duration'=>'',
                ]
            ];
        }
        
        /* other infos */
        if(session()->has('otherDetails')){
            $otherDetails = session()->get('otherDetails');
            $this->criminal_record_status = $otherDetails['criminal_record_status'];
            $this->medical_condition_status = $otherDetails['medical_condition_status'];
            $this->comment = $otherDetails['comment']!==null ? $otherDetails['comment'] :'';
            $this->step =5 ;
        }        
    }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function addManagement(){
        $this->managements[]= [
            'management_title'=>'',
            'management_organization'=>'',
            'management_duration'=>'',
        ];
    }

    public function removeManagement($mg){
        unset($this->managements[$mg]);
        $this->managements=array_values($this->managements);
    }

    public function render()
    {
        return view('livewire.business-assessment');
    }
}

