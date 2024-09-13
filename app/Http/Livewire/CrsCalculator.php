<?php

namespace App\Http\Livewire;

use App\Mail\VisaAssessmentMail;
use App\Models\CrsCalculator as ModelsCrsCalculator;
use App\Models\User;
use App\Notifications\AdminAssessmentRequestNotification;
use App\Notifications\AdminCrsRequestNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Livewire\Component;

class CrsCalculator extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $telephone;
    public $nationality;
    public $residence;
    public $age;
    public $marital_status;
    public $canada_spouse_status;
    public $educational_qualification;
    public $canada_study_status;
    public $canada_study_completion_status;
    public $canada_degree_status;
    public $in_canada_for_study_status;
    public $canada_educational_qualifiication;
    public $english_proficiency;
    public $french_proficiency;
    public $skilled_work_duration;
    public $canada_skilled_work_duration;
    public $qualification_cert_status;
    public $nomination_cert_status;
    public $canada_job_status;
    public $senior_role_status;

    /* arrays */
    public $country_list = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
    public $province_list = ["Alberta","British Columbia","Manitoba","New Brunswick","Newfoundland and Labrador","Northwest Territories","Nova Scotia","Nunavut","Ontario","Prince Edward Island","Quebec","Saskatchewan","Yukon"];
    public $marital_status_list = ["Single","Widowed","Divorced","Married"];
    public $language = ['None at all',"Limited","Modest","Competent","Very good","Expert"];

    /* validation rules */
    protected function rules(){
        return [
            'first_name'=>['required','string'],
            'last_name'=>['required','string'],
            'email'=>['required','email:rfc,dns'],
            'telephone'=>['required','string'],
            'nationality'=>['required','string',Rule::in($this->country_list)],
            'residence'=>['required','string',Rule::in($this->country_list)],
            'age'=>['required','numeric','integer',],
            'marital_status'=>['required','string',Rule::in($this->marital_status_list)],
            'canada_spouse_status'=>['required','string'],
            'educational_qualification'=>['required','string'],
            'canada_study_status'=>['required','boolean'],
            'canada_study_completion_status'=>[Rule::excludeIf($this->canada_study_status==false),'required','string','in:yes,no'],
            'canada_degree_status'=>[Rule::excludeIf($this->canada_study_status==false),'required','string','in:yes,no'],
            'in_canada_for_study_status'=>[Rule::excludeIf($this->canada_study_status==false),'required','string','in:yes,no'],
            'canada_educational_qualifiication'=>[Rule::excludeIf($this->canada_study_status==false),'required','string'],
            'english_proficiency'=>['required','string',Rule::in($this->language)],
            'french_proficiency'=>['required','string',Rule::in($this->language)],
            'skilled_work_duration'=>['required','string'],
            'canada_skilled_work_duration'=>['required','string'],
            'qualification_cert_status'=>['required','string'],
            'nomination_cert_status'=>'required|string',
            'canada_job_status'=>'required|boolean',
            'senior_role_status'=>[Rule::excludeIf($this->canada_job_status==false),'required','string'],
        ];
    }

    /* validation attributes */
    protected $validationAttributes=[
        'first_name'=>'First name',
        'last_name'=>'Last name',
        'marital_status'=>'Marital Status',
        'canada_spouse_status'=>'Brother or sister in Canada',
        'educational_qualification'=>'Educational qualification',   
        'canada_study_completion_status'=>'Canada study completion status',     
        'canada_degree_status'=>'Canada degree status',
        'in_canada_for_study_status'=> 'Location during Canada study status',
        'canada_educational_qualifiication'=>'Canadian educational qualification',
        'english_proficiency'=>'English proficiency',
        'french_proficiency'=>'French proficiency',
        'skilled_work_duration'=>'Skilled work duration',
        'canada_skilled_work_duration'=>'Canada skilled work duration',
        'qualification_cert_status'=>'Canada Certificate of qualification',
        'nomination_cert_status'=>'Canadian Nomination certificate',
        'canada_job_status'=>'Canada job status',
        'senior_role_status'=>'Job offer role status'
    ];

    /* realtime validation */
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function submitTest(){
        $this->validate();

        $crs = new ModelsCrsCalculator();
        $crs->first_name = $this->first_name;
        $crs->last_name = $this->last_name;
        $crs->email = $this->email;
        $crs->telephone = $this->telephone;
        $crs->age = $this->age;
        $crs->marital_status = $this->marital_status;
        $crs->residence = $this->residence;
        $crs->nationality = $this->nationality;
        $crs->canada_spouse_status = $this->canada_spouse_status;
        $crs->educational_qualification = $this->educational_qualification;
        $crs->canada_study_status = $this->canada_study_status;
        if($this->canada_study_status==true){
            $crs->canada_study_completion_status = $this->canada_study_completion_status;
            $crs->canada_degree_status = $this->canada_degree_status;
            $crs->in_canada_for_study_status = $this->in_canada_for_study_status;
            $crs->canada_educational_qualifiication = $this->canada_educational_qualifiication;
        }      
        $crs->english_proficiency = $this->english_proficiency;
        $crs->french_proficiency = $this->french_proficiency;
        $crs->skilled_work_duration = $this->skilled_work_duration;
        $crs->canada_skilled_work_duration = $this->canada_skilled_work_duration;  
        $crs->qualification_cert_status = $this->qualification_cert_status;
        $crs->nomination_cert_status = $this->nomination_cert_status;
        $crs->canada_job_status = $this->canada_job_status;
        if($this->canada_job_status==true){
            $crs->senior_role_status = $this->senior_role_status;
        }
        $crs->save();

        /* mail to user */
        try {
            $sbj = 'CRS Calculator';
            $msg = $this->first_name.' '.$this->last_name.', We will like to inform you that we are reviewing your Comprehensive Ranking System Calculator credentials. As soon as your result is compiled within the next 24-48hrs, we will reach out to through the email address you provided. Endevor to check your email from time to time';
            Mail::to($this->email)->send(new VisaAssessmentMail($msg, $sbj));        
            if($admin = User::first()){
                $admin->notify(new AdminCrsRequestNotification($crs));
            }

            $this->dispatchBrowserEvent('assessmentSubmitted',[
                'title'=>'Successful!',
                'html'=>'<p>We are reviweing your CRS calculator test. Check your email for more info.</p>', 
                'icon'=>'success',                                               
            ]);

            $this->reset();            
        } catch (\Throwable $th) {
            throw $th;
            Log::error($th->getMessage());
        }
        
    }

    public function render()
    {
        return view('livewire.crs-calculator');
    }
}
