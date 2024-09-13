<?php



use App\Http\Controllers\Admin\{AdminDashBoardController, BlogController, BusinessAssessmentController, CategoryController, CompanyController, GeneralAssessmentController, LoginController, MailController, SponsorshipAssessmentController, StudyAssessmentController, TeamController, UserController};

use App\Http\Controllers\Guest\{BusinessImmigrationController, GuestPageController, GuidesController, ImmigrationController, InadmissibilityController, ServiceController, SponsorshipImmigrationController, StudyImmigrationController, ToolsController, WorkController, };

use App\Http\Controllers\User\AssessmentController;

use Illuminate\Support\Facades\Route;



/*

|--------------------------------------------------------------------------

| Web Routes

|--------------------------------------------------------------------------

|

| Here is where you can register web routes for your application. These

| routes are loaded by the RouteServiceProvider within a group which

| contains the "web" middleware group. Now create something great!

|

*/
$fortifyRoutes = [
    'login',
    'register',
    'password/reset',
    'password/email',
    'password/confirm',
    'password/confirm',
    'password/reset/{token}',
    'two-factor-challenge',
    'user/confirm-password',
    'user/two-factor-recovery-codes',
    'user/two-factor-qr-code',
];

foreach ($fortifyRoutes as $route) {
    Route::get($route, function () {
        return redirect('/');
    });
}

// Optionally, you can also override the post routes if needed
$fortifyPostRoutes = [
    'login',
    'register',
    'password/email',
    'password/reset',
    'password/confirm',
    'user/confirm-password',
    'user/two-factor-recovery-codes',
    'user/two-factor-qr-code',
];

foreach ($fortifyPostRoutes as $route) {
    Route::post($route, function () {
        return redirect('/');
    });
}

Route::controller(GuestPageController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::get('/about-us','about')->name('about');
    Route::get('/frequently-asked-questions','faq')->name('FAQ');    
    Route::get('/client-support','contact')->name('contact'); 
    Route::get('/canada immigration news-update','news')->name('news');
    Route::get('/our-firm/legal-advice','legalAdvice')->name('legal_advice');
    Route::get('/our-firm/professional-credential','professionalCredential')->name('professional_cred');
    Route::get('/our-firm/temporary-resident-visa','tempResVisa')->name('temp_res_visa');
    Route::get('/our-firm/biometrics','biometrics')->name('biometrics');
    Route::get('/our-firm/Immigration-measures-and-support-for-Ukrainians-and-their-families','ukrain')->name('ukrain');    
});

Route::controller(ImmigrationController::class)->group(function(){    
    Route::get('/immigrate/canada-immigration','canadaImmigration')->name('canada_immigration');
    Route::get('/immigrate/canada-immigration/frequently-asked-questions','canadaImmigrationFaqs')->name('canada_immigration_faqs');
    /* express entry */
    Route::get('/immigrate/canada-immigration/express-entry','expressEntry')->name('express_entry');    
    /* pnp */   
    Route::get('/immigrate/canada-immigration/provincial-nominee-program','PNP')->name('PNP');    
    Route::get('/immigrate/canada-immigration/quebec','quebec')->name('quebec');
    Route::get('/immigrate/canada-immigration/canada-permanent-residence','canadaPr')->name('canada_pr');
    Route::get('/immigrate/canada-immigration/professional-and-skilled-workers','proAndSkilled')->name('pro_and_skilled');
    Route::get('/immigrate/canada-immigration/professional-and-skilled-workers/canadian-experience-class','cec')->name('cec');
    Route::get('/immigrate/canada-immigration/atlantic-immigration-program','atlanticImmigration')->name('atlantic_immigration');
    Route::get('/immigrate/canada-immigration/rural-and-northern-immigration-program','ruralAndNorthern')->name('rural_and_northern');
    Route::get('/immigrate/canada-immigration/agri-food-pilot','agriFood')->name('agri_food');
    Route::get('/immigrate/canada-immigration/caregiver-program','caregiver')->name('caregiver');
});

Route::controller(InadmissibilityController::class)->group(function(){

    Route::get('/inadmissibilty','inAdmissibilty')->name('in_admissibilty');

});

Route::controller(BusinessImmigrationController::class)->group(function(){    
    Route::get('/business/business-immigration','businessImmigration')->name('business_immigration');   
});

Route::controller(SponsorshipImmigrationController::class)->group(function(){    
    Route::get('/sponsorship/sponsorship-immigration','sponsorshipImmigration')->name('sponsorship_immigration');   
    Route::get('/sponsorship/frequently-asked-questions',function(){
        return view('guest.sponsor_faqs');
    })->name('sponsorship_faqs');    
});

Route::controller(ToolsController::class)->group(function(){
    Route::get('/free-tools/crs-calculator','crs')->name('crs');
    Route::get('/free-tools/pnp-finder','pnpFinder')->name('pnp_finder');
    Route::get('/free-tools/clb-converter','clbConverter')->name('clb_converter');
    Route::get('/free-tools/canada-immigration-processing-time','imp')->name('imp');
    Route::get('/free-tools/canada-job-finder','jobFinder')->name('job_finder');    
    Route::get('/free-tools/visitin-canada-tool','visitingCanada')->name('visiting_canada');
});

Route::controller(StudyImmigrationController::class)->group(function(){    
    Route::get('/study/study-immigration','studyImmigration')->name('study_immigration');   
    Route::get('/study/Frequently-asked-questions',function(){
        return view('guest.study_faqs');
    })->name('study_faqs');
});

Route::controller(ServiceController::class)->group(function(){    
    Route::get('/citizenship','citizenship')->name('citizenship');   
    Route::get('/citizenship/frequently-asked-questions',function(){
        return view('guest.citizenship_faqs');
    })->name('citizenship_faqs');
    Route::get('/comprehensive-ranking-system','crsSystem')->name('crs_system'); 
});

Route::controller(WorkController::class)->group(function(){    
    Route::get('/work-permit','workPermit')->name('work_permit');
    Route::get('/work-permit/frequently-asked-questions','workFaqs')->name('work_faqs');
});

Route::controller(AssessmentController::class)->group(function(){    
    Route::get('/free-assessment/general-immigration','assessment')->name('assessment');
    Route::get('/free-assessment/business-immigration','business')->name('business_assessment');
    Route::get('/free-assessment/study-immigration','study')->name('study_assessment');
    Route::get('/free-assessment/sponsorship-immigration','sponsorship')->name('sponsorship_assessment');  
    Route::get('/free-assessment/completed-successfuly','complete')->name('completedAssessment');    
});

/* ADMIN */
Route::prefix('admin')->as('admin.')
    ->group(function () {    
    /* redirect */
    Route::redirect('/', 'admin/dashboard');

    /* admin auth */
    Route::controller(LoginController::class)->group(function () {
            $limiter = config('fortify.limiters.login');
            Route::get('/login', 'login')->middleware(['guest'])->name('login');            

            Route::post('/authenticate', 'authenticate')
                ->middleware(array_filter([
                    'guest',
                    $limiter ? 'throttle:' . $limiter : null,
                ]))->name('authenticate');

            Route::post('/logout', 'logout')->name('logout');
            Route::get('/forgot-password', 'forgotPassword')->middleware(['guest'])->name('password.forgot');
            Route::post('/forgot-password', 'sendResetPassword')->middleware(['guest'])->name('password.send.email');
            Route::get('/reset-password/{token}', 'resetPassword')->middleware(['guest'])->name('password.reset');
            Route::post('/reset-password', 'resetComplete')->middleware(['guest'])->name('password.reset.complete');
        }
    );

    /* admin control panel */
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        ])->group(function(){

            /* dashboard */
            Route::get('/dashboard',[AdminDashBoardController::class,'index'])->name('dashboard');
            Route::get('/notifications',[AdminDashBoardController::class,'notifications'])->name('notifications');
            Route::get('/notification/{id}', [AdminDashBoardController::class,'readNotifications'])->name('notification');       
            Route::get('/resetpwd', [AdminDashBoardController::class,'resetpwd'])->name('resetpwd');
            Route::patch('/reset', [AdminDashBoardController::class,'reset'])->name('reset');                      
            
            /* General Assessment */
            Route::get('/general-assessment',[GeneralAssessmentController::class,'index'])->name('assessment');
            Route::get('/general-assessment/view/{id}',[GeneralAssessmentController::class,'show'])->name('assessment.show');

            /*Study Assessment */
            Route::get('/study-assessment',[StudyAssessmentController::class,'index'])->name('study_assessment');
            Route::get('/study-assessment/view/{id}',[StudyAssessmentController::class,'show'])->name('study_assessment.show');

            /*Sponsorship Assessment */
            Route::get('/sponsorship-assessment',[SponsorshipAssessmentController::class,'index'])->name('sponsorship_assessment');
            Route::get('/sponsorship-assessment/view/{id}',[SponsorshipAssessmentController::class,'show'])->name('sponsorship_assessment.show');

            /*Business Assessment */
            Route::get('/business-assessment',[BusinessAssessmentController::class,'index'])->name('business_assessment');  
            Route::get('/business-assessment/view/{id}',[BusinessAssessmentController::class,'show'])->name('business_assessment.show');                                         
        
            /* mail */ 
            Route::get('/getmail/{email?}', [MailController::class, 'getmail'])->name('getmail');           
    });
});

