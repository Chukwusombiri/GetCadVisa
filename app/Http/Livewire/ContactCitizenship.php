<?php

namespace App\Http\Livewire;

use App\Mail\ContactUsMail;
use App\Models\Company;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use LivewireUI\Modal\ModalComponent;

class ContactCitizenship extends ModalComponent
{
    public $country_list = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $location;
    public $comment;

    protected function rules(){
        return [
            'first_name'=>'required|string',
            'last_name'=>'required|string',
            'email'=>['required','email:dns,rfc'],
            'phone'=>'required|string',
            'location'=>['required','string',Rule::in($this->country_list)],
            'comment'=>'required|string'
        ];
    }

    protected $validationAttributes=[
        'first_name'=>'First Name',
        'last_name'=>'Last Name',
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function send(){
        $this->validate();

        $company = Company::first();
        $name = $this->first_name.' '.$this->last_name;
        Mail::to($company->email ?? 'support@visacad.com')->send(new ContactUsMail('Citizenship',$name,$this->email,$this->phone,$this->location,$this->comment));
        $this->reset();
        $this->closeModalWithEvents(['contactedCitizenship']);
    }

    public function render()
    {
        return view('livewire.contact-citizenship');
    }
}
