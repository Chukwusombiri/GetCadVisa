<?php

namespace App\Http\Livewire;

use App\Mail\VisaAssessmentMail;
use App\Models\EmailList;
use App\Models\Sponsorship;
use App\Models\User;
use App\Notifications\AdminAssessmentRequestNotification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class SponsorshipAssessment extends Component
{
    use WithFileUploads;
    
    public $first_name='';
    public $last_name='';
    public $email='';
    public $telephone='';
    public $nationality='';
    public $residence='';
    public $age='';
    public $sponsorship_need='';
    public $marital_status='';
    public $children_under_22_status='';
    public $children_under_22_count='';
    public $sponsor_name='';
    public $sponsored_relative='';
    public $social_assistance_status='';
    public $sponsor_citizenship_status='';
    public $sponsor_resident_status='';
    public $sponsor_in_canada_residence='';
    public $criminal_record_status='';
    public $medical_condition_status='';
    public $comment='';      
    public $passport;

    /* arrays */ 
    public $country_list = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
    public $province_list = ["Alberta","British Columbia","Manitoba","New Brunswick","Newfoundland and Labrador","Northwest Territories","Nova Scotia","Nunavut","Ontario","Prince Edward Island","Quebec","Saskatchewan","Yukon"];  
    public $marital_status_list = ["Single","Widowed","Divorced","Married"];

    public $step = 1;

    public function changeStep($step){
        $this->step = $step;
        return;
    }

    public function submitStep1(){
        if(session()->has('personalDetails')) session()->forget('personalDetails');

        $this->validate([
            'first_name'=>['required','string'],
            'last_name'=>['required','string'],
            'email'=>['required','email:rfc,dns'],
            'telephone'=>['required', 'regex:/^(\+[0-9] ?+|[0-9] ?+){6,14}[0-9]$/'],
            'nationality'=>['required','string',Rule::in($this->country_list)],
            'residence'=>['required','string',Rule::in($this->country_list)],
            'age'=>['required','integer',],
            'marital_status'=>['required','string',Rule::in($this->marital_status_list)],
            'sponsorship_need'=>['required','string'],
            'children_under_22_status'=>['required','boolean'],
            'children_under_22_count'=>[Rule::excludeIf($this->children_under_22_status==false),'required','string'],
        ]);

        session()->put('personalDetails',[
            'first_name'=>$this->first_name,
            'last_name'=>$this->last_name,
            'email'=>$this->email,
            'telephone'=>$this->telephone,
            'nationality'=>$this->nationality,
            'residence'=>$this->residence,
            'age'=>$this->age,
            'marital_status'=>$this->marital_status,
            'sponsorship_need'=>$this->sponsorship_need,
            'children_under_22_status'=>$this->children_under_22_status,
            'children_under_22_count'=>$this->children_under_22_status==true ? $this->children_under_22_count : null,
        ]);

        $this->step = 2;
        return;
    }

    public function submitStep2(){
        if(session()->has('sponsorDetails')) session()->forget('sponsorDetails');

        $this->validate([
            'sponsor_name'=>['required','string'],   
            'sponsored_relative'=>['required','string'],
            'social_assistance_status'=>['required','string'],
            'sponsor_citizenship_status' =>['required','string'],
            'sponsor_resident_status'=>['required','boolean'],
            'sponsor_in_canada_residence'=>[Rule::excludeIf($this->sponsor_resident_status==false),'required','string'],
        ]);

        session()->put('sponsorDetails',[
            'sponsor_name'=>$this->sponsor_name,   
            'sponsored_relative'=>$this->sponsored_relative,
            'social_assistance_status'=>$this->social_assistance_status,
            'sponsor_citizenship_status' =>$this->sponsor_citizenship_status,
            'sponsor_resident_status'=>$this->sponsor_resident_status,
            'sponsor_in_canada_residence'=>$this->sponsor_resident_status ? $this->sponsor_in_canada_residence : null,
        ]);

        $this->step = 3;
        return;
    }

    public function submitStep3(){
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

        $this->step = 4;
        return;
    }

    public function submitFinal(){
        $this->validate();

        $assessment = new Sponsorship();
        $assessment->first_name = $this->first_name;
        $assessment->last_name = $this->last_name;
        $assessment->email = $this->email;
        $assessment->telephone = $this->telephone;
        $assessment->age = $this->age;        
        $assessment->residence = $this->residence;
        $assessment->nationality = $this->nationality;
        $assessment->sponsorship_need = $this->sponsorship_need;        
        $assessment->marital_status = $this->marital_status;
        $assessment->children_under_22_status = $this->children_under_22_status;
        $assessment->children_under_22_count =$this->children_under_22_status ? $this->children_under_22_count : null;
        $assessment->passport = $this->passport->storePublicly('sponsors','public');
        $assessment->sponsor_name = $this->sponsor_name;
        $assessment->sponsored_relative = $this->sponsored_relative;
        $assessment->social_assistance_status = $this->social_assistance_status;
        $assessment->sponsor_citizenship_status = $this->sponsor_citizenship_status;
        $assessment->sponsor_resident_status = $this->sponsor_resident_status;
        $assessment->sponsor_in_canada_residence = $this->sponsor_resident_status ? $this->sponsor_in_canada_residence : null;
        $assessment->criminal_record_status = $this->criminal_record_status;
        $assessment->medical_condition_status = $this->medical_condition_status;       
        if($this->comment){
            $assessment->comment = $this->comment;
        }        
        $assessment->save();   
        
        $subscriber = EmailList::firstOrNew([
            'email' => $this->email
        ]);
        $subscriber->save();
        
        try {
            $sbj = 'Sponsorship Visa Assessment';
            $msg = $this->first_name.' '.$this->last_name.', Thank you for completing our Sponsorship Immigration Assessment on visacad.com. As one of Canada\'s highest-rated immigration firms, we value the opportunity to assist you with your immigration to Canada. After a thorough review of your credentials, we will contact you regarding your eligibility status.';
            Mail::to($this->email)->send(new VisaAssessmentMail($msg, $sbj));        
            if($admin = User::first()){
                $admin->notify(new AdminAssessmentRequestNotification($assessment));
            }
            session()->forget([
                'personalDetails',
                'sponsorDetails',
                'otherDetails',
            ]);    
            return redirect()->route('completedAssessment')->with('assessmentSubmitted','successful');
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return redirect()->route('completedAssessment')->with(['assessmentSubmitted'=>'successful']);
        }
    }


    public function mount(){
        if(session()->has('personalDetails')){
            $personalDetails = session()->get('personalDetails');
            $this->first_name = $personalDetails['first_name'];
            $this->last_name = $personalDetails['last_name'];
            $this->email = $personalDetails['email'];
            $this->telephone = $personalDetails['telephone'];
            $this->age = $personalDetails['age'];
            $this->nationality = $personalDetails['nationality'];
            $this->residence = $personalDetails['residence'];
            $this->marital_status = $personalDetails['marital_status'];
            $this->sponsorship_need = $personalDetails['sponsorship_need'];
            $this->children_under_22_status = $personalDetails['children_under_22_status'];
            $this->children_under_22_count = $personalDetails['children_under_22_status']==true ? $personalDetails['children_under_22_count'] : '';

            $this->step = 2;        
        }
        
        if(session()->has('sponsorDetails')){
            $sponsorDetails = session()->get('sponsorDetails');
            $this->sponsor_name = $sponsorDetails['sponsor_name'];
            $this->sponsored_relative = $sponsorDetails['sponsored_relative'];
            $this->social_assistance_status = $sponsorDetails['social_assistance_status'];
            $this->sponsor_citizenship_status = $sponsorDetails['sponsor_citizenship_status'];
            $this->sponsor_resident_status = $sponsorDetails['sponsor_resident_status'];
            $this->sponsor_in_canada_residence = $sponsorDetails['sponsor_resident_status'] ? $sponsorDetails['sponsor_in_canada_residence'] : '';            

            $this->step = 3;        
        }

        if(session()->has('otherDetails')){
            $otherDetails = session()->get('otherDetails');
            $this->criminal_record_status = $otherDetails['criminal_record_status'];
            $this->medical_condition_status = $otherDetails['medical_condition_status'];
            $this->comment = $otherDetails['comment']!==null ? $otherDetails['comment'] :'';
            $this->step = 4;
        }     
    }

    protected function rules(){ return [
        'first_name'=>['required','string'],
        'last_name'=>['required','string'],
        'email'=>['required','email:rfc,dns'],
        'telephone'=>['required', 'regex:/^(\+[0-9] ?+|[0-9] ?+){6,14}[0-9]$/'],
        'nationality'=>['required','string',Rule::in($this->country_list)],
        'residence'=>['required','string',Rule::in($this->country_list)],
        'age'=>['required','integer',],
        'marital_status'=>['required','string',Rule::in($this->marital_status_list)],
        'sponsorship_need'=>['required','string'],
        'children_under_22_status'=>['required','boolean'],
        'children_under_22_count'=>[Rule::excludeIf($this->children_under_22_status==false),'required','string'],
        'passport'=>['required','image','max:1999'],
        'sponsor_name'=>['required','string'],   
        'sponsored_relative'=>['required','string'],
        'social_assistance_status'=>['required','string'],
        'sponsor_citizenship_status' =>['required','string'],
        'sponsor_resident_status'=>['required','boolean'],
        'sponsor_in_canada_residence'=>[Rule::excludeIf($this->sponsor_resident_status==false),'required','string'],
        'criminal_record_status'=>['required','string'],
        'medical_condition_status'=>['required','string'],
        'comment'=>[Rule::excludeIf(!$this->comment),'string'],
    ];}
    
    protected $validationAttributes=[
        'first_name'=>'First name',
        'last_name'=>'Last name',
        'marital_status'=>'Marital status',
        'sponsorship_need'=>'Sposnsorship need',
        'children_under_22_status'=>'Children status',
        'children_under_22_count'=>'Children count',
        'sponsor_name'=>'Sponsor name',
        'sponsored_relative'=>'Sponsored relative',
        'social_assistance_status'=>'social assistance status',
        'sponsor_citizenship_status'=>'Citizenship status',
        'sponsor_resident_status'=>'Resident status',
        'sponsor_in_canada_residence'=>'Canada residence',
        'criminal_record_status'=>'Criminal record status',
        'medical_condition_status'=>'Medical condition status',
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
       
    public function render()
    {
        return view('livewire.sponsorship-assessment');
    }
}
