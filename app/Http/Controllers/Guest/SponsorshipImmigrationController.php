<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SponsorshipImmigrationController extends Controller
{
    //sponsorship immigration
    public function sponsorshipImmigration(){
        return view('guest.sponsorship_immigration');
    }
}
