<?php
namespace App\Http\Livewire;

use App\Mail\VisaAssessmentMail;
use App\Models\EmailList;
use App\Models\General;
use App\Models\User;
use App\Notifications\AdminAssessmentRequestNotification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class GeneralAssessment extends Component
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
    public $marital_status='';
    public $children_under_22_status='';    

    /* education */
    public $education_status='';
    public $high_education_status='';
    public $education = []; 

    /* job */
    public $job_status='';
    public $job = []; 

    /* language */
    public $english_writing_proficiency='';
    public $english_reading_proficiency='';
    public $english_speaking_proficiency='';
    public $english_listening_proficiency='';
    public $french_writing_proficiency='';
    public $french_reading_proficiency='';
    public $french_speaking_proficiency='';
    public $french_listening_proficiency='';

    /* express entry */
    public $express_entry_status='';
    public $express_entry_invite_status='';

    /* employment */
    public $new_job_status='';
    public $new_job_title='';
    public $new_job_LMIA_support_status='';
    public $new_job_work_hours='';
    public $new_job_duration='';
    public $new_job_province='';

    /* family */
    public $family_in_canada_status='';
    public $relatives = [];

    /* finance */
    public $amount_available='';
    public $comment='';

    /* passport */
    public $passport;

    /* arrays */      
    public $country_list = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
    public $province_list = ["Alberta","British Columbia","Manitoba","New Brunswick","Newfoundland and Labrador","Northwest Territories","Nova Scotia","Nunavut","Ontario","Prince Edward Island","Quebec","Saskatchewan","Yukon"];
    public $marital_status_list = ["Single","Widowed","Divorced","Married"];        
    public $language = ['None at all',"Limited","Modest","Competent","Very good","Expert"];

    public $step = 9;    

    public function changeStep($step){
        $this->step =$step;
        return;
    }
    
    /* personal details */
    public function submitStep1(){
        if(session()->has('personalDetails')){
            session()->forget('personalDetails');
        }
        
        $this->validate(
            [
                'first_name'=>['required','string'],
                'last_name'=>['required','string'],
                'email'=>['required','email'],
                'telephone'=>['required', 'regex:/^(\+[0-9] ?+|[0-9] ?+){6,14}[0-9]$/'],
                'nationality'=>['required','string',Rule::in($this->country_list)],
                'residence'=>['required','string',Rule::in($this->country_list)],
                'age'=>['required','numeric','integer',],
                'marital_status'=>['required','string',Rule::in($this->marital_status_list)],
                'children_under_22_status'=>['required','string'],
            ]
        );

        session()->put('personalDetails',[
            'first_name'=> $this->first_name,
            'last_name'=>$this->last_name,
            'email'=>$this->email,
            'telephone'=>$this->telephone,
            'nationality'=>$this->nationality,
            'residence'=>$this->residence,
            'age'=>$this->age,
            'marital_status'=>$this->marital_status,
            'children_under_22_status'=>$this->children_under_22_status,
        ]);  
        
        $this->step = 2;
        return;
    }

    /* education */
    public function submitStep2(){        
        if(session()->has('educationalQualifications')){
            session()->forget('educationalQualifications');
        }

        $this->validate(
            [
                'education_status'=>['required',Rule::in(['yes','no'])],
                'high_education_status'=>['required','boolean'],
                'education'=>[Rule::excludeIf($this->high_education_status==false),'array'],
                'education.*'=>[Rule::excludeIf($this->high_education_status==false),'array'],
                'education.*.programme_type'=>[Rule::excludeIf($this->high_education_status==false),Rule::requiredIf($this->high_education_status==true),'string'],
                'education.*.programme_duration'=>[Rule::excludeIf($this->high_education_status==false),Rule::requiredIf($this->high_education_status==true),'string'],
                'education.*.programme_course'=>[Rule::excludeIf($this->high_education_status==false),Rule::requiredIf($this->high_education_status==true),'string'],
                'education.*.programme_status'=>[Rule::excludeIf($this->high_education_status==false),Rule::requiredIf($this->high_education_status==true),'string',Rule::in(['yes','no'])],
                'education.*.programme_location'=>[Rule::excludeIf($this->high_education_status==false),Rule::requiredIf($this->high_education_status==true),'string',Rule::in(['inside canada','outside canada'])],
                'education.*.programme_province'=>[Rule::excludeIf($this->high_education_status==false),'required_if:education.*.programme_location,inside canada','string',Rule::in($this->province_list)],                
            ]
        );

        session()->put('educationalQualifications',[
            'education_status'=>$this->education_status,
            'high_education_status'=>$this->high_education_status,
            'education'=>(is_array($this->education) && count($this->education)>0) ? $this->education : null,            
        ]);  

        $this->step = 3;
        return;
    }

    /* work history */
    public function submitStep3(){
        if(session()->has('workHistory')){
            session()->forget('workHistory');
        }

        $this->validate(
            [
                'job_status'=>['required','boolean'],
                'job'=>[Rule::excludeIf($this->job_status==false),'array'],
                'job.*'=>[Rule::excludeIf($this->job_status==false),'array'],
                'job.*.occupation'=>[Rule::excludeIf($this->job_status==false),Rule::requiredIf($this->job_status==true),'string'],
                'job.*.job_type'=>[Rule::excludeIf($this->job_status==false),Rule::requiredIf($this->job_status==true),'string',Rule::in(['Full time','Part time','Self-employed'])],
                'job.*.job_start'=>[Rule::excludeIf($this->job_status==false),Rule::requiredIf($this->job_status==true),'date'],
                'job.*.job_end'=>[Rule::excludeIf($this->job_status==false),Rule::requiredIf($this->job_status==true),'date','after_or_equal:job.*.job_start'],
                'job.*.job_location'=>[Rule::excludeIf($this->job_status==false),Rule::requiredIf($this->job_status==true),'string',Rule::in(['inside canada','outside canada'])],
                'job.*.job_province'=>['exclude_if:job.*.job_location,outside canada','required_if:job.*.job_location,inside canada','string',Rule::in($this->province_list)],
                'job.*.job_permit'=>['exclude_if:job.*.job_location,outside canada','required_if:job.*.job_location,inside canada','string'],
                'job.*.job_career_compare'=>[Rule::excludeIf($this->job_status==false),Rule::requiredIf($this->job_status==true),'string',Rule::in(['yes','no'])],
            ]
        );

        session()->put('workHistory',[
            'job_status'=>$this->job_status,
            'job'=>(is_array($this->job) && count($this->job)>0) ? $this->job : null,         
        ]);

        $this->step = 4;
        return;
    }

    /* language proficiency */
    public function submitStep4(){
        if(session()->has('languageDetails')) session()->forget('languageDetails');

        $this->validate([
            'english_listening_proficiency'=>['required','string',Rule::in($this->language)],
            'english_speaking_proficiency'=>['required','string',Rule::in($this->language)],
            'english_reading_proficiency'=>['required','string',Rule::in($this->language)],
            'english_writing_proficiency'=>['required','string',Rule::in($this->language)],
            'french_listening_proficiency'=>['required','string',Rule::in($this->language)],
            'french_speaking_proficiency'=>['required','string',Rule::in($this->language)],
            'french_reading_proficiency'=>['required','string',Rule::in($this->language)],
            'french_writing_proficiency'=>['required','string',Rule::in($this->language)],
        ]);

        session()->put('languageDetails',[
            'english_listening_proficiency'=>$this->english_listening_proficiency,
            'english_speaking_proficiency'=>$this->english_speaking_proficiency,
            'english_reading_proficiency'=>$this->english_reading_proficiency,
            'english_writing_proficiency'=>$this->english_writing_proficiency,
            'french_listening_proficiency'=>$this->french_listening_proficiency,
            'french_speaking_proficiency'=>$this->french_speaking_proficiency,
            'french_reading_proficiency'=>$this->french_reading_proficiency,
            'french_writing_proficiency'=>$this->french_writing_proficiency,
        ]);

        $this->step = 5;
        return;
    }

    /* express entry profile */
    public function submitStep5(){
        if(session()->has('expressEntryProfile')) session()->forget('expressEntryProfile');

        $this->validate([
            'express_entry_status'=>['required','string',Rule::in(['yes','no'])],
            'express_entry_invite_status'=>['required','string',Rule::in(['yes','no'])],  
        ]);

        session()->put('expressEntryProfile',[
            'express_entry_status'=>$this->express_entry_status,
            'express_entry_invite_status'=>$this->express_entry_invite_status,
        ]);
        $this->step = 6;
        return;
    }

    /* new job offers */
    public function submitStep6(){
        if(session()->has('newJobOffers')) session()->forget('newJobOffers');

        $this->validate([
            'new_job_status'=>['required','boolean'],
            'new_job_title'=>[Rule::excludeIf($this->new_job_status==false),'required','string'],
            'new_job_LMIA_support_status'=>[Rule::excludeIf($this->new_job_status==false),'required','string'],
            'new_job_work_hours'=>[Rule::excludeIf($this->new_job_status==false),'required','string'],
            'new_job_duration'=>[Rule::excludeIf($this->new_job_status==false),'required','string'],
            'new_job_province'=>[Rule::excludeIf($this->new_job_status==false),'required','string',Rule::in($this->province_list)],
        ]);

        session()->put('newJobOffers',[
            'new_job_status'=>$this->new_job_status,
            'new_job_title'=>$this->new_job_status==true ? $this->new_job_title : null,
            'new_job_LMIA_support_status'=>$this->new_job_status==true ? $this->new_job_LMIA_support_status : null,
            'new_job_work_hours'=>$this->new_job_status==true ? $this->new_job_work_hours : null,
            'new_job_duration'=>$this->new_job_status==true ? $this->new_job_duration : null,
            'new_job_province'=>$this->new_job_status==true ? $this->new_job_province : null,
        ]);

        $this->step = 7;
        return;
    }

    /* family */
    public function submitStep7(){
        if(session()->has('familyInCanada')) session()->forget('familyInCanada');

        $this->validate([
            'family_in_canada_status'=>['required','boolean'],
            'relatives'=>[Rule::excludeIf($this->family_in_canada_status==false),'array'],
            'relatives.*'=>[Rule::excludeIf($this->family_in_canada_status==false),'array'],
            'relatives.*.family_in_canada_related'=>[Rule::excludeIf($this->family_in_canada_status==false),'required','string'],
            'relatives.*.family_in_canada_residence_status'=>[Rule::excludeIf($this->family_in_canada_status==false),'required','string',],
            'relatives.*.family_in_canada_residence'=>[Rule::excludeIf($this->family_in_canada_status==false),'required','string',Rule::in($this->province_list)],
            'relatives.*.family_in_canada_duration'=>[Rule::excludeIf($this->family_in_canada_status==false),'required','string',],
        ]);

        session()->put('familyInCanada',[
            'family_in_canada_status'=>$this->family_in_canada_status,
            'relatives'=>($this->family_in_canada_status && count($this->relatives)>0) ? $this->relatives : null,           
        ]);

        $this->step=8;
        return;
    }

    /* personal finance */
    public function submitStep8(){
        if(session()->has('personalFinance')) session()->forget('personalFinance');

        $this->validate([
            'amount_available'=>['required','string'],
            'comment'=>[Rule::excludeIf(!$this->comment),'string'],
        ]);

        session()->put('personalFinance',[
            'amount_available'=>$this->amount_available,
            'comment'=>$this->comment!=='' ? $this->comment : null,
        ]);

        $this->step=9;
        return;
    }

    public function submitFinal(){
        $this->validate();

        $assessment = new General();
        $assessment->first_name = $this->first_name;
        $assessment->last_name = $this->last_name;
        $assessment->email = $this->email;
        $assessment->telephone = $this->telephone;
        $assessment->age = $this->age;
        $assessment->marital_status = $this->marital_status;
        $assessment->residence = $this->residence;
        $assessment->nationality = $this->nationality;
        $assessment->children_under_22_status = $this->children_under_22_status;        
        $assessment->education_status = $this->education_status;
        $assessment->high_education_status = $this->high_education_status;
        $assessment->education = $this->high_education_status ? json_encode($this->education) : null;
        $assessment->job_status = $this->job_status;
        $assessment->job = $this->job_status ? json_encode($this->job) : null;
        $assessment->english_writing_proficiency = $this->english_writing_proficiency;
        $assessment->english_reading_proficiency = $this->english_reading_proficiency;        
        $assessment->english_speaking_proficiency = $this->english_speaking_proficiency;
        $assessment->english_listening_proficiency = $this->english_listening_proficiency;
        $assessment->french_writing_proficiency = $this->french_writing_proficiency;
        $assessment->french_reading_proficiency = $this->french_reading_proficiency;
        $assessment->french_speaking_proficiency = $this->french_speaking_proficiency;
        $assessment->french_listening_proficiency = $this->french_listening_proficiency;
        $assessment->express_entry_status = $this->express_entry_status;
        $assessment->express_entry_invite_status = $this->express_entry_invite_status;
        $assessment->new_job_status = $this->new_job_status;
        if($this->new_job_status==true){
            $assessment->new_job_title = $this->new_job_title;
            $assessment->new_job_LMIA_support_status = $this->new_job_LMIA_support_status;
            $assessment->new_job_work_hours = $this->new_job_work_hours;
            $assessment->new_job_duration = $this->new_job_duration;
            $assessment->new_job_province = $this->new_job_province;
        }        
        $assessment->family_in_canada_status = $this->family_in_canada_status;
        $assessment->relatives = $this->family_in_canada_status ? json_encode($this->relatives) : null;
        $assessment->amount_available = $this->amount_available;
        if ($this->comment) {
            $assessment->comment = $this->comment;
        }        
        $assessment->passport = $this->passport->storePublicly('general','public');
        $assessment->save();   
        
        $subscriber = EmailList::firstOrNew([
            'email' => $this->email
        ]);
        $subscriber->save();
       
        try {
            $sbj = 'Immigration Eligibilty Assessment';
            $msg = $this->first_name.' '.$this->last_name.', Thank you for taking the time to complete our immigration assessment on visocanada.com. As one of the highest rated immigration firms in Canada, we appreciate this opportunity to work with you in your immigration to Canada. After careful review of your work experience, education and overall credentials, we will reach out to you concerning your eligibity status.';
            Mail::to($this->email)->send(new VisaAssessmentMail($msg, $sbj));        
            if($admin = User::first()){
                $admin->notify(new AdminAssessmentRequestNotification($assessment));
            }  
            session()->forget([
                'personalDetails',
                'educationalQualifications',
                'workHistory',
                'languageDetails',
                'expressEntryProfile',
                'newJobOffers',
                'familyInCanada',
                'personalFinance',
            ]);                       
            return redirect()->route('completedAssessment')->with('assessmentSubmitted','successful');
        } catch (\Throwable $th) {
            throw $th;
            Log::error($th->getMessage());
            return redirect()->route('completedAssessment')->with(['assessmentSubmitted'=>'successful']);
        }        
    }

    protected function rules(){ return [
        'first_name'=>['required','string'],
        'last_name'=>['required','string'],
        'email'=>['required','email'],
        'telephone'=>['required', 'regex:/^(\+[0-9] ?+|[0-9] ?+){6,14}[0-9]$/'],
        'nationality'=>['required','string',Rule::in($this->country_list)],
        'residence'=>['required','string',Rule::in($this->country_list)],
        'age'=>['required','numeric','integer',],
        'marital_status'=>['required','string',Rule::in($this->marital_status_list)],
        'children_under_22_status'=>['required','string'],
        'passport'=>['required','image','max:1999'],
        'education_status'=>['required',Rule::in(['yes','no'])],
        'high_education_status'=>['required','boolean'],
        'education'=>[Rule::excludeIf($this->high_education_status==false),'array'],
        'education.*'=>[Rule::excludeIf($this->high_education_status==false),'array'],
        'education.*.programme_type'=>[Rule::excludeIf($this->high_education_status==false),Rule::requiredIf($this->high_education_status==true),'string'],
        'education.*.programme_duration'=>[Rule::excludeIf($this->high_education_status==false),Rule::requiredIf($this->high_education_status==true),'string'],
        'education.*.programme_course'=>[Rule::excludeIf($this->high_education_status==false),Rule::requiredIf($this->high_education_status==true),'string'],
        'education.*.programme_status'=>[Rule::excludeIf($this->high_education_status==false),Rule::requiredIf($this->high_education_status==true),'string',Rule::in(['yes','no'])],
        'education.*.programme_location'=>[Rule::excludeIf($this->high_education_status==false),Rule::requiredIf($this->high_education_status==true),'string',Rule::in(['inside canada','outside canada'])],
        'education.*.programme_province'=>[Rule::excludeIf($this->high_education_status==false),'required_if:education.*.programme_location,inside canada','string',Rule::in($this->province_list)],
        'job_status'=>['required','boolean'],
        'job'=>[Rule::excludeIf($this->job_status==false),'array'],
        'job.*'=>[Rule::excludeIf($this->job_status==false),'array'],
        'job.*.occupation'=>[Rule::excludeIf($this->job_status==false),Rule::requiredIf($this->job_status==true),'string'],
        'job.*.job_type'=>[Rule::excludeIf($this->job_status==false),Rule::requiredIf($this->job_status==true),'string',Rule::in(['Full time','Part time','Self-employed'])],
        'job.*.job_start'=>[Rule::excludeIf($this->job_status==false),Rule::requiredIf($this->job_status==true),'date'],
        'job.*.job_end'=>[Rule::excludeIf($this->job_status==false),Rule::requiredIf($this->job_status==true),'date','after_or_equal:job.*.job_start'],
        'job.*.job_location'=>[Rule::excludeIf($this->job_status==false),Rule::requiredIf($this->job_status==true),'string',Rule::in(['inside canada','outside canada'])],
        'job.*.job_province'=>['exclude_if:job.*.job_location,outside canada','required_if:job.*.job_location,inside canada','string',Rule::in($this->province_list)],
        'job.*.job_permit'=>['exclude_if:job.*.job_location,outside canada','required_if:job.*.job_location,inside canada','string'],
        'job.*.job_career_compare'=>[Rule::excludeIf($this->job_status==false),Rule::requiredIf($this->job_status==true),'string',Rule::in(['yes','no'])],
        'english_listening_proficiency'=>['required','string',Rule::in($this->language)],
        'english_speaking_proficiency'=>['required','string',Rule::in($this->language)],
        'english_reading_proficiency'=>['required','string',Rule::in($this->language)],
        'english_writing_proficiency'=>['required','string',Rule::in($this->language)],
        'french_listening_proficiency'=>['required','string',Rule::in($this->language)],
        'french_speaking_proficiency'=>['required','string',Rule::in($this->language)],
        'french_reading_proficiency'=>['required','string',Rule::in($this->language)],
        'french_writing_proficiency'=>['required','string',Rule::in($this->language)],
        'express_entry_status'=>['required','string',Rule::in(['yes','no'])],
        'express_entry_invite_status'=>['required','string',Rule::in(['yes','no'])],
        'new_job_status'=>['required','boolean'],
        'new_job_title'=>[Rule::excludeIf($this->new_job_status==false),'required','string'],
        'new_job_LMIA_support_status'=>[Rule::excludeIf($this->new_job_status==false),'required','string'],
        'new_job_work_hours'=>[Rule::excludeIf($this->new_job_status==false),'required','string'],
        'new_job_duration'=>[Rule::excludeIf($this->new_job_status==false),'required','string'],
        'new_job_province'=>[Rule::excludeIf($this->new_job_status==false),'required','string',Rule::in($this->province_list)],
        'family_in_canada_status'=>['required','boolean'],
        'relatives'=>[Rule::excludeIf($this->family_in_canada_status==false),'array'],
        'relatives.*'=>[Rule::excludeIf($this->family_in_canada_status==false),'array'],
        'relatives.*.family_in_canada_related'=>[Rule::excludeIf($this->family_in_canada_status==false),'required','string'],
        'relatives.*.family_in_canada_residence_status'=>[Rule::excludeIf($this->family_in_canada_status==false),'required','string',],
        'relatives.*.family_in_canada_residence'=>[Rule::excludeIf($this->family_in_canada_status==false),'required','string',Rule::in($this->province_list)],
        'relatives.*.family_in_canada_duration'=>[Rule::excludeIf($this->family_in_canada_status==false),'required','string',],
        'amount_available'=>['required','string'],
        'comment'=>[Rule::excludeIf(!$this->comment),'string'],
    ];}
    
    protected $validationAttributes=[
        'first_name'=>'First name',
        'last_name'=>'Last name',
        'marital_status'=>'Marital Status',
        'children_under_22_status'=>'Children',
        'education_status'=>'High School',
        'high_education_status'=>'Training other than high school',
        'education.*.programme_type'=>'Type of Program',
        'education.*.programme_duration'=>'Duration of Programme',
        'education.*.programme_course'=>'Course of study',
        'education.*.programme_status'=>'Programme Completion',
        'education.*.programme_location'=>'Programme Location',
        'education.*.programme_province'=>'Province',
        'job_status'=>'Work Experience',
        'job.*.occupation'=>'Occupation',
        'job.*.job_type'=>'Type of work',
        'job.*.job_start'=>'Start date',
        'job.*.job_end'=>'End date',
        'job.*.job_location'=>'work Location',
        'job.*.job_province'=>'Province',
        'job.*.job_permit'=>'Job permit',
        'job.*.job_career_compare'=>'Occupation in your field of study',
        'english_listening_proficiency'=>'Listening proficiency',
        'english_speaking_proficiency'=>'Speak proficiency',
        'english_reading_proficiency'=>'Reading proficiency',
        'english_writing_proficiency'=>'Writing proficiency',
        'french_listening_proficiency'=>'Listening proficiency',
        'french_speaking_proficiency'=>'Speak proficiency',
        'french_reading_proficiency'=>'Reading proficiency',
        'french_writing_proficiency'=>'Writing proficiency',
        'express_entry_status'=>'Express entry',
        'express_entry_invite_status'=>'Express entry invitation',
        'new_job_status'=>'Written job offer',
        'new_job_title'=>'title',
        'new_job_LMIA_support_status'=>'LMIA support',
        'new_job_work_hours'=>'Work hours',
        'new_job_duration'=>'Duration',
        'new_job_province'=>'province',
        'family_in_canada_status'=>'family members or relatives living in Canada',
        'relatives.*.family_in_canada_related'=>'Relationship',
        'relatives.*.family_in_canada_residence_status'=>'Residence status',
        'relatives.*.family_in_canada_residence'=>'residence',
        'relatives.*.family_in_canada_duration'=>'Duration',
        'amount_available'=>'net worth',
    ];

    public function mount(){
        if(session()->has('personalFinance')){
            $personalFinance = session()->get('personalFinance');
            $this->amount_available = $personalFinance['amount_available'];
            $this->comment = $personalFinance['comment']!==null ? $personalFinance['comment'] : null;
        }else{
            $this->step=8;
        }

        if(session()->has('familyInCanada')){
            $familyInCanada = session()->get('familyInCanada');
            $this->family_in_canada_status = $familyInCanada['family_in_canada_status'];
            $this->relatives = $familyInCanada['family_in_canada_status']==true ? $familyInCanada['relatives'] : [
                [
                    'family_in_canada_related'=>'',
                    'family_in_canada_residence_status'=>'',
                    'family_in_canada_residence'=>'',
                    'family_in_canada_duration'=>'',
                ]
            ];
        }else{
            $this->relatives = [
                [
                    'family_in_canada_related'=>'',
                    'family_in_canada_residence_status'=>'',
                    'family_in_canada_residence'=>'',
                    'family_in_canada_duration'=>'',
                ]
            ];
            $this->step=7;
        }  

        if(session()->has('newJobOffers')){
            $newJobOffers = session()->get('newJobOffers');
            $this->new_job_status = $newJobOffers['new_job_status'];
            $this->new_job_title = $newJobOffers['new_job_status']==true ? $newJobOffers['new_job_title'] : '';
            $this->new_job_LMIA_support_status = $newJobOffers['new_job_status']==true ? $newJobOffers['new_job_LMIA_support_status'] : '';
            $this->new_job_work_hours = $newJobOffers['new_job_status']==true ? $newJobOffers['new_job_work_hours'] : '';
            $this->new_job_duration = $newJobOffers['new_job_status']==true ? $newJobOffers['new_job_duration'] : '';
            $this->new_job_province = $newJobOffers['new_job_status']==true ? $newJobOffers['new_job_province'] : '';
        }else{
            $this->step=6;
        }

        if(session()->has('expressEntryProfile')){
            $expressEntryProfile = session()->get('expressEntryProfile');
            $this->express_entry_status = $expressEntryProfile['express_entry_status'];
            $this->express_entry_invite_status = $expressEntryProfile['express_entry_invite_status'];
        }else{
            $this->step=5;
        }

        if(session()->has('languageDetails')){
            $languageDetails = session()->get('languageDetails');
            $this->english_listening_proficiency = $languageDetails['english_listening_proficiency'];
            $this->english_speaking_proficiency = $languageDetails['english_speaking_proficiency'];
            $this->english_reading_proficiency = $languageDetails['english_reading_proficiency'];
            $this->english_writing_proficiency = $languageDetails['english_writing_proficiency'];
            $this->french_listening_proficiency = $languageDetails['french_listening_proficiency'];
            $this->french_speaking_proficiency = $languageDetails['french_speaking_proficiency'];
            $this->french_reading_proficiency = $languageDetails['french_reading_proficiency'];
            $this->french_writing_proficiency = $languageDetails['french_writing_proficiency'];
        }else{
            $this->step=4;
        }

        if(session()->has('workHistory')){
            $workHistory = session()->get('workHistory');
            $this->job_status = $workHistory['job_status'];
            $this->job = $workHistory['job_status']==true ? $workHistory['job'] : [
                [
                    'occupation'=>'',
                    'job_type'=>'',
                    'job_start'=>'',
                    'job_end'=>'',
                    'job_location'=>'',
                    'job_province'=>'',
                    'job_permit'=>'',
                    'job_career_compare'=>'',
                ]
            ];
        }else{
            $this->job = [
                [
                    'occupation'=>'',
                    'job_type'=>'',
                    'job_start'=>'',
                    'job_end'=>'',
                    'job_location'=>'',
                    'job_province'=>'',
                    'job_permit'=>'',
                    'job_career_compare'=>'',
                ]
            ];
            $this->step=3;
        }  

        if(session()->has('educationalQualifications')){
            $educationalQualifications = session()->get('educationalQualifications');
            $this->education_status = $educationalQualifications['education_status'];
            $this->high_education_status = $educationalQualifications['high_education_status'];
            $this->education = $educationalQualifications['education']!==null ? $educationalQualifications['education'] :  [
                    [
                        'programme_type'=>'',
                        'programme_duration'=>'',
                        'programme_course'=>'',
                        'programme_status'=>'',
                        'programme_location'=>'',
                        'programme_province'=>'',
                    ]
                ];

        }else{
            $this->education = [
                [
                    'program_type'=>'',
                    'programme_duration'=>'',
                    'programme_course'=>'',
                    'programme_status'=>'',
                    'programme_location'=>'',
                    'programme_province'=>'',
                ]
            ];
            $this->step=2;
        }   

        if(session()->has('personalDetails')){
            $personalDetails = session()->get('personalDetails');
            $this->first_name = $personalDetails['first_name'];
            $this->last_name = $personalDetails['last_name'];
            $this->email = $personalDetails['email'];
            $this->telephone = $personalDetails['telephone'];
            $this->nationality = $personalDetails['nationality'];
            $this->residence = $personalDetails['residence'];
            $this->age = $personalDetails['age'];
            $this->marital_status = $personalDetails['marital_status'];
            $this->children_under_22_status = $personalDetails['children_under_22_status'];
        }else{
            $this->step=1;
        }
    }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function addEducation(){
        $this->education[]= [
            'programme_type'=>'',
            'programme_duration'=>'',
            'programme_course'=>'',
            'programme_status'=>'',
            'programme_location'=>'',
            'programme_province'=>'',
        ];
    }

    public function addJob(){
        $this->job[]= [
            'occupation'=>'',
                'job_type'=>'',
                'job_start'=>'',
                'job_end'=>'',
                'job_location'=>'',
                'job_province'=>'',
                'job_permit'=>'',
                'job_career_compare'=>'',
        ];
    }

    public function addRelative(){
        $this->relatives[]= [
            'family_in_canada_related'=>'',
            'family_in_canada_residence_status'=>'',
            'family_in_canada_residence'=>'',
            'family_in_canada_duration'=>'',
        ];
    }

    public function removeEducation($e){
        unset($this->education[$e]);
        $this->education=array_values($this->education);
    }

    public function removeJob($emp){
        unset($this->job[$emp]);
        $this->job=array_values($this->job);
    }

    public function removeRelative($relative){
        unset($this->relatives[$relative]);
        $this->relatives=array_values($this->relatives);
    }    

    public function render()
    {
        return view('livewire.general-assessment');
    }
}
