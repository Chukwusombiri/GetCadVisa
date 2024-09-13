<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImmigrationController extends Controller
{
    /* immigrate */
    public function canadaImmigration(){
        return view('guest.canada_immigration');
    }

    /* express entry tree*/
    public function expressEntry(){
        return view('guest.express_entry');
    }

        /* cec */
        public function cec(){
            return view('guest.cec');
        }

        /* fsw */
        public function fsw(){
            return view('guest.fsw');
        }

    /* PNP */
     public function PNP(){
        return view('guest.PNP');
    }

    /* quebec */
     public function quebec(){
        return view('guest.quebec');
    }

    /* canada_pr */
    public function canadaPr(){
        return view('guest.canada_pr');
    }

    /* pro_and_skilled */
    public function proAndSkilled(){
        return view('guest.pro_and_skilled');
    }

    /* atlantic_immigration */
    public function atlanticImmigration(){
        return view('guest.atlantic_immigration');
    }

    /* rural_and_northern */
    public function ruralAndNorthern(){
        return view('guest.rural_and_northern');
    }

    /* rural_and_northern */
     public function agriFood(){
        return view('guest.agri_food');
    }

    /* caregiver */
    public function caregiver(){
        return view('guest.caregiver');
    }

    /* immigration faqs */
    public function canadaImmigrationFaqs(){
        return view('guest.canada_immigration_faqs');
    }

}
