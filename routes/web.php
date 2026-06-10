<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\cfmarecordedController;
use App\Http\Controllers\funnelformController;
use App\Http\Controllers\freedemoController;
use App\Http\Controllers\KamyabjawanController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\LeadFormController;
use App\Http\Controllers\CareerFormController;
use App\Http\Controllers\contactusController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\countController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DemoConfirmationController;
use App\Http\Controllers\DemoCourseController;
use App\Http\Controllers\CareerPositionController;
use App\Http\Controllers\CareerConnectController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WebinarController;
use App\Http\Controllers\CompanyCategoryController;
use App\Http\Controllers\TrustedCompanyController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\RecognizedLogoController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\RolePermission\UserController;
use App\Http\Controllers\RolePermission\RoleController;
use App\Http\Controllers\RolePermission\PermissionController;


use Illuminate\Support\Facades\Route;
use App\Models\Courses;
use App\Models\Trainers;
use App\Models\Registers;
use App\Models\cfmarecorded;
use App\Models\funnelform;
use App\Models\Freedemo;
use App\Models\Feedback;
use App\Models\LeadForm;
use App\Models\CareerForm;
use App\Models\Calendar;
use App\Models\Contactus;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Response;

Route::post('/ckeditor/upload', [CKEditorController::class, 'upload'])->name('ckeditor.upload');


Route::get('/thank-you',[\App\Http\Controllers\HomeController::class,'thankYou'])->name('thankyou');

Route::get('/trainer_profiles',[\App\Http\Controllers\HomeController::class,'trainer_profiles']);

Route::post('/subscribe-newsletter',[\App\Http\Controllers\HomeController::class,'subscribeNewsletter'])->name('subscribe.newsletter');

Route::get('/it-consultancy-services', function () {
    return view('website.itserviec');
});

Route::get('/financial-modeling-payment', function () {
    return view('website.gopayfast');
});

Route::get('/basic-to-advanced-sql-for-data-analytics', function () {
    return view('website.basic-to-advanced-sql-for-data-analytics');
});

Route::get('/sql-in-powerbi-for-data-analytics', function () {

    return view('website.sql-in-powerbi-for-data-analytics');

});

Route::get('/Mahir-Alam', function () {
    return view('website.Mahir-Alam');
});

Route::get('/Zeeshan-Zubair', function () {
    return view('website.Zeeshan-Zubair');
});

Route::get('/ecommerce-web-design-and-development', function () {

    return view('website.web-development');

});

Route::get('/freetraining', function () {
    return view('website.NAVTTC-Registration-form');
});
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

    
//Web Trainers Route
Route::get('/trainer-profiles', [TrainerController::class, 'webTrainers'])->name('web.trainers');
Route::get('/trainer-profiles/{slug}', [TrainerController::class, 'webTrainerShow'])->name('web.trainers.show');
// Career Connect Controller
Route::get('/career-connect',[CareerConnectController::class,'index'])->name('career.connect.index');
Route::get('/career-connect/{formType}', [CareerConnectController::class, 'showForm'])->name('career.connect.form');
Route::post('/career-connect-submit', [CareerConnectController::class, 'submitForm'])->name('career.connect.submit');

//Career Connect Jobs
Route::get('/careerconnect/jobboard',[CareerConnectController::class,'jobboard'])->name('career-connect.jobs.index');


//Career Connect Candidate
Route::get('/careerconnect/candidateboard',[CareerConnectController::class,'candidateboard'])->name('career-connect.candidates.index');



Route::get('/validate_email',[\App\Http\Controllers\HomeController::class,'validate_email']);


Route::post('/submit-free-training',[\App\Http\Controllers\ApplicationformController::class,"addregistration"]);


Route::get('/refund-policy', function () {
    return view('website.refund-policy');
});

Route::get("/jazzcash_demo",[\App\Http\Controllers\JazzCashController::class, 'index']);
Route::get("/course_checkout/{course_name}/{fee}",[\App\Http\Controllers\JazzCashController::class, 'course_checkout']);
//Route::post("/payment_success",[\App\Http\Controllers\JazzCashController::class, 'jazzcash_payment_success'])->name('payment_success');
//Route::get("/jazzcash_payment_success",function (){
//    return view("payment_success");
//});
Route::get("/payment_success",[\App\Http\Controllers\RegistrationController::class, 'payment_success']);

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('optimize');

    return "Cache is cleared"; // you can replce your redirect
});


Route::get('/adminLogin', function () {
    return view('login-form.main-page');
})->name('adminLogin');
Route::get('/login', function () {
    return view('login-form.main-page');
});


Route::get('/add-course', function () {
    return view('adminpanel.add-course');
});



Route::get('/program-name',[\App\Http\Controllers\CoursesController::class,'programshow'])->name('program.name');


Route::get('/training-calender', function () {
  
    return view('website.trainingcalender');
});
Route::get('/example', function () {
    return "Route is working!";
});


Route::get('/view-registered', function () {
    return view('adminpanel.view-registered');
});

Route::resource('career-positions', CareerPositionController::class);
Route::get('/career-positions/toggle/{id}', [CareerPositionController::class, 'updateStatus'])->name('career-positions.toggle');

// Route::get('/corporate-leadform', function () {
//     return view('adminpanel.corporate_leadform');
// })->name('corporate.leadform');

// Route::get('/corporate-leadform', function () {
//     return view('adminpanel.corporate_leadform');
// })->name('corporate.leadform');
Route::get('/corporate-leadform', [CoursesController::class, 'CorporateLead'])->name('corporate.leadform');

Route::delete('/corporate-leadform/bulk-delete', [CoursesController::class, 'bulkDelete'])->name('corporate.leadform.bulkDelete');


Route::get('/view-navttcform', function () {
    return view('adminpanel.view-navttcdfrom');
});

Route::get('/',[HomeController::class, 'home'])->name('page.home');
Route::get('/affiliations',[HomeController::class, 'affiliations'])->name('page.affiliations');

Route::get('/Single-event', function () {
    return view('website.Single-event');
});

Route::get('/link-storage', function() {

    $exitCode = Artisan::call('storage:link');
    return '<h1>Storage Linked</h1>';
});

Route::get('/demo-features', function () {
    return view('website.demo-features');
});
Route::get('/video-demo-financial-modeling', function () {
    return view('website.video-demo-financial-modeling');
});
Route::get('/get-courses', [CoursesController::class, 'getCourses'])->name('get-courses');
Route::get('/registration_form',[RegistrationController::class, 'view_form']);
//Route::get('/Registration-form',[RegistrationController::class, 'view_form_old']);
Route::get('/Registration-Form/{course}',[RegistrationController::class, 'view_form_by_course'])->name('registration-form-course');
Route::get('/Registration-Form/{course}/{fee}', [RegistrationController::class, 'view_form_by_course_and_fee']);
Route::post('/Custom-Form-Reg', [RegistrationController::class, 'addregistrationCustom']);

//function () {
//    return view('website.Registration-Form');
//});

Route::get('/view-free-reg-form-data', [\App\Http\Controllers\ApplicationformController::class, 'showtable']);

Route::get('/Feedback-Form',[\App\Http\Controllers\HomeController::class,'feedback_form'])->name('feedback');

// Route::get('/enquiry-form',[\App\Http\Controllers\HomeController::class,'enquiry_form']);
Route::get('/enquiry-form-corporate',[\App\Http\Controllers\HomeController::class,'enquiry_corporate'])->name('enquiry.corporate');
Route::get('/focenquiryform',[\App\Http\Controllers\HomeController::class,'enquiry_form_custom']);
Route::get('/enquiryformBBSHRRDB',[\App\Http\Controllers\HomeController::class,'enquiry_form_BBSHRRDB']);

Route::get("/free-of-cost-training-registration-form/{course}",[\App\Http\Controllers\HomeController::class,'freeTrainingForm']);

Route::get('/free-of-cost-training-registration-form', function () {
    return view('website.Application-Form');
});

Route::get('/enquiry-form-financial-modeling-analysis', function () {
    return view('website.enquiry-form-financial-modeling-analysis');
});

Route::get('/webste.main-page', function () {
    return view('admin-panel.main-page');
});

Route::get('/1-min-feedback-form',[DemoConfirmationController::class,'OneMintFeedForm'])->name('one.mint.feed.form');
Route::post('/store-one-mint-feedform', [DemoConfirmationController::class, 'StoreOneMintFeedForm'])->name('store.one.mint.feedform');

Route::get('/alumni-feedback-form',[DemoConfirmationController::class,'alumniFeedForm'])->name('alumni.feed.form');
Route::post('/store-alumni-feedform', [DemoConfirmationController::class, 'StoreAlumniFeedForm'])->name('store.alumni.feedform');



Route::get('/demo-confirmation/{calendarId?}',[DemoConfirmationController::class,'DemoConfirmation'])->name('demo.confirmation');
Route::post('/store-demo-confirmation', [DemoConfirmationController::class, 'StoreDemoConfirmation'])->name('store.demo.confirmation');




Route::get('/financial-modeling-analysis-fundamental', function () {
    return view('website.financial-modeling-analysis-fundamental');
});
Route::get('/financial-modeling-analysis-advanced', function () {
    return view('website.financial-modeling-analysis-advanced');
});

Route::get('/tax-management-with-return-filing', function () {
    return view('website.tax-management-with-return-filing');
});

Route::get('/effective-office-management-training-course', function () {
    return view('website.effective-office-management-training-course');
});

Route::get('/customer-services-specialist', function () {
    return view('website.customer-services-specialist');
});

Route::get('/python-programming', function () {
    return view('website.python-programming');
});

Route::get('/microsoft-excel-masteryb-i', function () {
    return view('website.msexcelbti');
});

Route::get('/advanced-excel-business-intelligence-data-visualization', function () {
    return view('website.advanced-excel-business-intelligence-data-visualization');
});

Route::get('/certificate-in-information-technology', function () {
    return view('website.certificate-in-information-technology');
});

Route::get('/computerized-accounting', function () {
    return view('website.computerized-accounting');
});

Route::get('/data-analytics-tableau', function () {
    return view('website.data-analytics-tableau');
});
Route::get('/excel-skills-for-business-forecasting', function () {
    return view('website.excel-skills-for-business-forecasting');
});

Route::get('/financial-accounting', function () {
    return view('website.financial-accounting');
});

Route::get('/data-science-with-bi', function () {
    return view('website.data-science-with-bi');
});

Route::get('/Other-Policies', function () {
    return view('website.Other-Policies');
});

Route::get('/coursese', function () {
    return view('website.courses');
});
// Route::get('/courses', function () {
//     return view('website.courses');
// })->name('page.courses');
Route::get('/NAVTTC-Skills-for-All-Registration-form', function () {
    return view('website.Kamyab-Jawan-Form');
});

Route::get('add-brochure', [CoursesController::class, 'show_pdf'])->name('add-brochure');
Route::post('store-brochure', [CoursesController::class, 'store_pdf'])->name('brochures.store');
Route::get('store-brochure/{id}', [CoursesController::class, 'delete_pdf'])->name('brochures.del');
/* Courses */
Route::get('courses', [CoursesController::class, 'coursesPage'])->name('page.courses');
Route::get('courses/{slug}', [CoursesController::class, 'courseDetails'])->name('course.details');
// Route::get('courses/dashboard-reporting-powerbi-analysis', [CoursesController::class, 'dashboardReportingPowerBI']);
// Route::get('courses/excel-mastery', [CoursesController::class, 'excelMastery']);
// Route::get('courses/advanced-excel', [CoursesController::class, 'advancedExcel']);
// Route::get('courses/sql-analytics', [CoursesController::class, 'sqlAnalytics']);
// Route::get('courses/financial-modeling', [CoursesController::class, 'financialModeling']);
// Route::get('courses/financial-modeling-self', [CoursesController::class, 'financialModelingSelf']);
// Route::get('courses/ai-integrated-office', [CoursesController::class, 'aiIntegratedOffice']);
// // Route::get('courses/cit', [CoursesController::class, 'cit']);
// Route::get('courses/python-data-analysis', [CoursesController::class, 'pythonDataAnalysis']);
// Route::get('courses/tax-management', [CoursesController::class, 'taxManagement']);
// Route::get('courses/visualizing-excel-dashboards-power-point', [CoursesController::class, 'visualizingExcelDashboardsPowerPoint']);
// Route::get('courses/data-science', [CoursesController::class, 'dataScience']);
// Route::get('courses/new-data-science', [CoursesController::class, 'newDataScience'])->name('data-science-test-route');
// Route::get('courses/ms-fabric', [CoursesController::class, 'msFabric']);
// Route::get('courses/cyber-security', [CoursesController::class, 'cyberSecurity']);
// Route::get('courses/computerized-accounting', [CoursesController::class, 'ComputerizedAccounting']);
// Route::get('courses/presentation-delivery-with-impact', [CoursesController::class, 'presentingWithImpact']);
// Route::get('courses/e-dukaan-specialist', [CoursesController::class, 'edukaanspecialist']);
// Route::get('courses/python-data-analysis-with-azure', [CoursesController::class, 'pythonDataAnalysisAzure']);
// Route::get('courses/entrepreneurship', [CoursesController::class, 'entrepreneurshipCourse']);
// Route::get('courses/generative-ai-development-and-integration', [CoursesController::class, 'genAICourse']);
// Route::get('courses/dashboard-reporting-with-bi-applications', [CoursesController::class, 'dashboardReportingBIApp']);
// Route::get('courses/speak-to-lead', [CoursesController::class, 'speakToLead']);


/* Courses */

// Add more routes as needed for each course


Route::get("/Tanveer-Bukhsh",function () {
    return view("website.TanveerBukhsh");
});
Route::get("/Tahir-Ali",function () {
    return view("website.TahirAli");
});
Route::get("/Sumaira-Ghouri",function () {
    return view("website.SumairaGhouri");
});
Route::get("/Farah-Mehboob",function () {
    return view("website.FarahMehboob");
});
Route::get("/Murtaza-Ghazi",function () {
    return view("website.MurtazaGhazi");
});
Route::get("/Basit-Rana",function () {
    return view("website.BasitRana");
});
Route::get("/Uzair-Rasheed-Baig",function () {
    return view("website.UzairRasheedBaig");
});
Route::get("/Mahir-Alam",function () {
    return view("website.MahirAlam");
});
Route::get("/Jahanzeb-Feroz-Khan",function () {
    return view("website.trainer-profiles.JahanzebFerozKhan");
});
Route::get("/Kashif-Mughal",function () {
    return view("website.trainer-profiles.KashifMughal");
});
Route::get("/Ahsan-Masroor",function () {
    return view("website.trainer-profiles.AhsanMasroor");
});
Route::get("/Muhammad-Rafay-Shaikh",function () {
    return view("website.trainer-profiles.MuhammadRafayShaikh");
});
Route::get("/Syed-Asif-Ashraf",function () {
    return view("website.trainer-profiles.SyedAsifAshraf");
});
Route::get("/Muhammad-Zohaib",function () {
    return view("website.trainer-profiles.MuhammadZohaib");
});


Route::get('/faqs', function () {
    return view('website.pages.faqs.faqs');
})->name('faqs');
Route::get('/faqs-bbshrrdb', function () {
    return view('website.bbshrrdb_faq');
})->name('faqs-bbshrrdb');
Route::get('/faqs-career-connect', function () {
    return view('website.career-connect-faqs');
})->name('faqs-career-connect');
Route::get('/faqs-navttc', function () {
    return view('website.navttc-faqs');
})->name('faqs-navttc');
Route::get('/faqs-navttcsotb1', function () {
    return view('website.navttcsotb1-faqs');
})->name('faqs-navttcsotb1');
Route::get('/navttcsotb1', function () {
    return view('website.navttcsotb1');
})->name('navttc.sotb1');
// Government Sponsored Programs
Route::get('/govsp', function () {
    return view('website.govsp.index');
})->name('govsp.index');
Route::get('/govsp/navttcsotb1', function () {
    // Read-only: fetch data-science video URL to keep same video as that page
    $dsVideo = \App\Models\Courses::where('slug', 'data-science')->value('video_url');
    $videoUrl = $dsVideo ?? 'uploads/courses/videos/default.mp4';
    return view('website.govsp.navttcsotb1', compact('videoUrl'));
})->name('govsp.navttcsotb1');
Route::get('/Careers', [CareerFormController::class, 'websiteCareerForm'])->name('website.career');


Route::get('/Privacy-Policy', function () {
    return view('website.pages.policies.privacy-policy');
});
Route::get('/Policies', function () {
    return view('website.pages.policies.policies');
});
Route::get('/Student-Policy', function () {
    return view('website.pages.policies.student-policy');
});




Route::get('/about', function () {
    return view('website.pages.about');
})->name('page.about');

Route::get('/download-company-profile', function () {
    $filePath = public_path('pdf/company_profile.pdf');
    $fileName = 'company_profile.pdf';
    return Response::download($filePath, $fileName);
})->name('download.company_profile');




Route::get('/home', function () {
    return view('website.main-page');
});


Route::get('/contact', function () {
    return view('website.pages.contact');
})->name('page.contact');

Route::get('/compare-courses', function () {
    return view('website.compare-courses');
});
Route::get('/Reviews', function () {
    return view('website.pages.reviews');
})->name('page.reviews');
    // Route::get('/Events-gallery', function () {
    //     return view('website.Events-gallery');
    // });
    // Route::get('/Events-gallery', [GalleryController::class, 'EventGallery'])->name('event.gallery');


Route::get('/event-gallery', [GalleryController::class, 'EventGalleryNew'])->name('event.gallery');

Route::get('/get-subcategories/{id}', [GalleryController::class, 'getSubCategories']);
Route::get('/gallery-by-category/{id}', [GalleryController::class, 'galleryByCategory']);

Route::get('/Picture-gallery', function () {
    return view('website.Picture-gallery');
});
Route::get('/funnel', function () {
    return view('website.funnel');
});
Route::get('/funnel2', function () {
    return view('website.funnel2');
});
Route::get('/funnel-form', function () {
    return view('website.funnel-form');
});
Route::get('/book-appointment', function () {
    return view('website.book-appointment');
});
Route::get('/CFMA-video-form', function () {
    return view('website.CFMA-video-form');
});
 Route::get('/loadContent', [contactusController::class, 'popup'])->name('loadContent');

// For website
Route::get('/calander', function () {
    return redirect()->route('web.calendar');
});
// Route::get('/calander', [CalendarController::class, 'WebCalender']); 
Route::get('/calendar', [CalendarController::class, 'WebCalender'])->name('web.calendar'); 
Route::get('/new-calendar', [CalendarController::class, 'newCalender'])->name('new.web.calendar'); 
Route::get('/download-calendar', [CalendarController::class, 'downloadCalendar'])->name('calendar.download');

Route::get('/corporate-customized-training', function () {
    return view('website.pages.corporate-customized-training');
})->name('web.corporate-customized-training');

Route::get('/corporate-customized-training/executive-dashboard-test', [HomeController::class, 'executiveDashboard'])->name('web.executive-dashboard');


Route::get('/events', [EventController::class, 'WebEvents'])->name('web.events'); 
Route::get('/events/{id}/details', [EventController::class, 'WebEventDetail'])->name('web.events.details'); 

// Route::get('/calander', function () {
//     $calendars = Calendar::all(); // Fetch all records from the calendars table
//     return view('website.calander', compact('calendars')); // Pass the records to the view
// });

// Route::get('/course', [CoursesController::class, 'index']);




    // website Registration routes
    Route::post('/Registration-Form', [RegistrationController::class, 'addregistration'])->name('Registration-Form');
    Route::post('/Registration-Form-two', [RegistrationController::class, 'addregistrationtwo'])->name('Registration-Form-two');
    // website Registration routes

    // website CFMA_RECORDED routes
    Route::post('/Registration-Form1', [cfmarecordedController::class, 'addregistration']);
    // website CFMA_RECORDED routes

     // website funnel routes
     Route::post('/funnel-form', [funnelformController::class, 'addregistration']);
     // website funnel routes

    // website freedemo routes
    Route::post('/book-appointment', [freedemoController::class, 'addregistration']);
    // website freedemo routes

    // website Kamyab Jawan Form routes
    Route::post('/Kamyab-jawan-Form', [KamyabjawanController::class, 'addregistration']);
    // website Kamyab Jawan Form routes

    // website Feedback routes
    Route::post('/Feedback-Form', [FeedbackController::class, 'addregistration']);
    // website Feedback routes

    // website LeadForm routes
    Route::post('/leadcorporate', [LeadFormController::class, 'LeadCorporate'])->name('lead.corporate');
    Route::post('/nomanform', [LeadFormController::class, 'handleEnquiry']);
    // Route::post('/nomanform', [LeadFormController::class, 'addregistration']);
    Route::get('/tna2025', [LeadFormController::class, 'getassest']);
    Route::post('/assestform', [LeadFormController::class, 'assesment'])->name('store.assest');
    Route::post('/nomanformcustom', [LeadFormController::class, 'nomanformcustom']);
    Route::post('/nomanformcustomBBS', [LeadFormController::class, 'nomanformcustomBBS']);
    // website LeadForm routes

    // website CareerForm routes
    Route::post('/Careers', [CareerFormController::class, 'addregistration']);
    // website CareerForm routes

    // website Contactus routes
    Route::post('/contact-us', [contactusController::class, 'addregistration'])->name('contactForm');
    // website Contactus routes

// email videopage start
Route::get('/website.main-page', [EmailController::class, 'contact']);
Route::post('/send-message', [EmailController::class, 'sendEmail'])->name('contact.send');
// email videopage end

// email Leadform start
Route::get('/website.main-page', [LeadFormController::class, 'contact']);
Route::post('/send-message1', [LeadFormController::class, 'addregistration'])->name('Registration-Form__');
// email Leadform end

// email funnel-form start
Route::get('/website.main-page', [funnelformController::class, 'contact']);
Route::post('/send-message5', [funnelformController::class, 'addregistration'])->name('funnel-form');
// email funnel-form end



 //admin panel support form routes
    Route::get('/view-Suppotform', [\App\Http\Controllers\HomeController::class, 'showtable'])->name('view.support-form');
    Route::get('/view-Suppotform/{id}', [\App\Http\Controllers\HomeController::class, 'delete']);
    Route::delete('/Suppotform/bulk-delete', [\App\Http\Controllers\HomeController::class, 'suppotFormBulkDelete'])->name('suppot-form.bulkDelete');

    //admin panel  support  form routes


// email free-demo start
Route::get('/website.main-page', [freedemoController::class, 'contact']);
Route::post('/send-message6', [freedemoController::class, 'addregistration'])->name('Free-demo');
// email free-demo end

// email Registration-form start
Route::get('/website.main-page', [LeadFormController::class, 'contact']);
Route::post('/send-message2', [LeadFormController::class, 'addregistration'])->name('nomanform');
// email Registration-form end

// email Registration-form start
Route::get('/website.main-page', [cfmarecordedController::class, 'contact']);
Route::post('/send-message7', [cfmarecordedController::class, 'addregistration'])->name('Registration-Form1');
// email Registration-form end

// email Feedback-form start
Route::get('/website.main-page', [FeedbackController::class, 'contact']);
Route::post('/send-message3', [FeedbackController::class, 'addregistration'])->name('Feedback-Form');
// email Feedback-form end

// email Career-form start
Route::get('/website.main-page', [FeedbackController::class, 'contact']);
Route::post('/send-message4', [FeedbackController::class, 'addregistration'])->name('Careers');
// email Career-form end

// email Contactus start
Route::get('/website.main-page', [contactusController::class, 'contact']);
Route::post('/send-message1', [contactusController::class, 'addregistration'])->name('contact-uss');
// email Contactus end

// Route::resource('adminpanel', 'CoursesController');
Route::get('/logout', function () {
    if(session()->has('user'))
    {
        session()->pull('user',null);
    }
    return redirect('login-form.main-page');
});

Route::get('/login-form.main-page', function () {
    if(session()->has('user'))
    {
        return redirect('admin-panel.add-course');
    }
    return view('login-form.main-page');
});


Route::post('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/enquiry-form/{course_name?}",[\App\Http\Controllers\HomeController::class, 'query'])->name('web.enquiry');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/support-form',[\App\Http\Controllers\HomeController::class,'support_form']);
Route::post('/submit-support-form',[\App\Http\Controllers\HomeController::class,'addsupportform']);

Route::get('/certificate-delivery',[\App\Http\Controllers\HomeController::class,'certificateForm']);
Route::post('/certificate-submit',[\App\Http\Controllers\HomeController::class,'certificateSubmit']);

Route::get('/scholarship-request',[\App\Http\Controllers\HomeController::class,'scholarshipForm']);
Route::post('/scholarship-submit',[\App\Http\Controllers\HomeController::class,'scholarshipSubmit']);

Route::get('/1-Minute-Feedback/{course}',[\App\Http\Controllers\HomeController::class,'oneMintFeedbackForm']);
Route::post('/1-Minute-Feedback-submit',[\App\Http\Controllers\HomeController::class,'oneMintFeedbackFormSubmit']);

// website Route
// Route::get('/enquiry-form-project',[ProjectController::class,'project_form'])->name('project.form');
Route::get('/enquiry-form-project/{course?}', [ProjectController::class, 'project_form'])->name('project.form');
Route::post('/enquiry-form-project-store',[ProjectController::class,'storeprojectwebsite'])->name('store.project.website');

// NAVTTC Skills of Tomorrow Batch 1 — enquiry form (Task 1)
Route::get('/enquiry-form-project-navttcsotb1', function () {
    return view('website.pages.enquiry-forms.navttcsotb1_enquiry');
})->name('enquiry.navttcsotb1');

Route::get('/enquiry-form-project-bbshrrdb', [ProjectController::class, 'benazir_form'])->name('benazir.form');
Route::post('/benazir-form-project-store',[ProjectController::class,'storeprojectbenazir'])->name('store.project.benazir');

Route::get('/registration-form-project', [ProjectController::class, 'registrationFormProject'])->name('registration-form-project');
Route::post('/registration-form-project-store',[ProjectController::class,'registrationFormProjectStore'])->name('store.registration-form-project');
Route::get('/view-project-registration-form', [ProjectController::class, 'viewprojectregform'])->name('view.projectreg.form');
Route::get('/view-projectreg-form-delete/{id}', [ProjectController::class, 'viewprojectregdelete'])->name('projectreg.form.delete');
Route::delete('/projectreg-form/bulk-delete', [ProjectController::class, 'bulkDeleteProjectreg'])->name('projectreg.form.bulkDelete');



Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
});

// Public routes — must be outside the auth middleware group
Route::get('webinars', [WebinarController::class, 'webWebinars'])->name('webinars.web');
Route::get('blogs/{blogSlug?}', [BlogController::class, 'WebBlog'])->name('blogs.web');
Route::post('blogs/comment', [BlogController::class, 'submitComment'])->name('blogs.comment.submit');

Auth::routes();
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/deactivated', function () {
        return view('errors.deactivated');
    })->name('deactivated');
    
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    Route::middleware(['check.activation'])->group(function () {
        Route::get('/admin/dashborad', [countController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/admin/dashborad', [countController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/kpi-dashboard', [DashboardController::class, 'index'])->name('kpi-dashboard');
    
        //Resources
        Route::resource('admin/resources', ResourceController::class);
        Route::get('admin/resources/status/{id}', [ResourceController::class, 'updateStatus'])->name('resources.status.update');
        
        //Recognized Logos
        Route::resource('admin/recognized-logos', RecognizedLogoController::class);
        Route::get('admin/recognized-logos/status/{id}', [RecognizedLogoController::class, 'updateStatus'])->name('recognized-logos.status.update');
        Route::get('/admin/recognized-logos/shuffle/show', [RecognizedLogoController::class, 'shuffleShow'])->name('recognized-logos.shuffle-show');
        Route::post('/admin/recognized-logos/shuffle/store', [RecognizedLogoController::class, 'shuffleStore'])->name('recognized-logos.shuffle-store');
        
        //Calendar Routes
        Route::get('/add-calendar', [CalendarController::class, 'index'])->name('add.calendar');
        Route::get('/add-program-fee', [CoursesController::class, 'addProgramFee'])->name('add.program-fee');
        Route::post('/store-program-fee', [CoursesController::class, 'storeProgramFee'])->name('store.program-fee');
        Route::post('/update-program-fee', [CoursesController::class, 'updateProgramFee'])->name('update.program-fee');
        Route::post('/adminpanelform', [CalendarController::class, 'store'])->name('store.calendar');
        Route::post('/upload/calendar-file', [CalendarController::class, 'uploadFile'])->name('upload.calendar.file');
        Route::get('/view-entries/{title}', [CalendarController::class, 'viewEntriesByTitle'])->name('view.entries');
        Route::get('/edit-entry/{title}', [CalendarController::class, 'edit'])->name('edit.entries');
        Route::get('/toggle-status/{id}', [CalendarController::class, 'updateStatus'])->name('calendar.toggle');
        Route::put('/update-entry/{id}', [CalendarController::class, 'update'])->name('update.entries');
        Route::delete('/delete-entries/{title}', [CalendarController::class, 'deleteAllByTitle'])->name('delete.entries');
        
        // for gallary cat
        Route::get('/gallery-cat', [GalleryController::class, 'index'])->name('gallery_cat');
        Route::post('/store-gallery-cat', [GalleryController::class, 'storegallerycat'])->name('store.gallery.cat');
        Route::get('/edit-gallery-cat/{id}', [GalleryController::class, 'editgallerycat'])->name('edit_gallery_cat');
        Route::post('/update-gallery-cat/{id}', [GalleryController::class, 'updategallerycat'])->name('update.gallery.cat');
        Route::get('/delete-gallery-cat/{id}', [GalleryController::class, 'deletegallerycat'])->name('delete_gallery_cat');
        // Route::get('/edit/{id}', [GalleryController::class, 'editShowdata']);
        
        // for events
        Route::resource('admin/events', EventController::class);
    
    
        // for gallary image
        Route::get('/gallery-image', [GalleryController::class, 'GalleryImg'])->name('gallery_img');
        Route::post('/store-gallery-img', [GalleryController::class, 'storegalleryImg'])->name('store.gallery.img');
        Route::get('/edit-gallery-img/{id}', [GalleryController::class, 'editgalleryimg'])->name('edit_gallery_img');
        Route::post('/update-gallery-img/{id}', [GalleryController::class, 'updategalleryimg'])->name('update.gallery.img');
        Route::get('/delete-gallery-img/{id}', [GalleryController::class, 'deletegalleryImg'])->name('delete_gallery_img');
        // Route::get('/edit-gallery-cat/{id}', [GalleryController::class, 'editgallerycat'])->name('edit_gallery_cat');
        // Route::post('/update-gallery-cat/{id}', [GalleryController::class, 'updategallerycat'])->name('update.gallery.cat');
    
    
        //Admin Courses Routes
        Route::get('/admin/courses', [CoursesController::class, 'adminCourses'])->name('courses.index');
        Route::get('/admin/courses/add', [CoursesController::class, 'createCourse'])->name('courses.add');
        Route::post('/admin/courses/store', [CoursesController::class, 'storeCourse'])->name('courses.store');
        Route::get('/admin/courses/edit/{id}', [CoursesController::class, 'editCourse'])->name('courses.edit');
        Route::post('/admin/courses/update/{id}', [CoursesController::class, 'updateCourse'])->name('courses.update');
        Route::get('admin/courses/status/{id}', [CoursesController::class, 'updateStatus'])->name('courses.status.update');
        Route::get('/admin/courses/delete/{id}', [CoursesController::class, 'delete'])->name('courses.delete');
        Route::get('/admin/courses/shuffle/show', [CoursesController::class, 'shuffleShow'])->name('courses.shuffle-show');
        Route::post('/admin/courses/shuffle/store', [CoursesController::class, 'shuffleStore'])->name('courses.shuffle-store');
    
        //Admin Trainers Routes
        Route::get('/admin/trainers', [TrainerController::class, 'adminTrainers'])->name('trainers.index');
        Route::get('/admin/trainers/add', [TrainerController::class, 'createTrainer'])->name('trainers.add');
        Route::post('/admin/trainers/store', [TrainerController::class, 'storeTrainer'])->name('trainers.store');
        Route::get('/admin/trainers/edit/{id}', [TrainerController::class, 'editTrainer'])->name('trainers.edit');
        Route::post('/admin/trainers/update/{id}', [TrainerController::class, 'updateTrainer'])->name('trainers.update');
        Route::get('admin/trainers/status/{id}', [TrainerController::class, 'updateStatus'])->name('trainers.status.update');
        Route::get('/admin/trainers/delete/{id}', [TrainerController::class, 'delete'])->name('trainers.delete');
        
        
        //Admin Trusted Companies Routes
        Route::resource('/admin/trusted-companies', TrustedCompanyController::class);
        Route::get('admin/trusted-companies/status/{id}', [TrustedCompanyController::class, 'updateStatus'])->name('trusted-companies.status.update');
        Route::get('/admin/trusted-companies/shuffle/show', [TrustedCompanyController::class, 'shuffleShow'])->name('trusted-companies.shuffle-show');
        Route::post('/admin/trusted-companies/shuffle/store', [TrustedCompanyController::class, 'shuffleStore'])->name('trusted-companies.shuffle-store');
        
        Route::resource('/admin/trusted-company-categories', CompanyCategoryController::class);
        
        
        Route::get('/course', [CoursesController::class, 'index']);
        Route::post('/program-store', [CoursesController::class, 'ProgramStore'])->name('program.store');
        Route::post('/edit/{id}', [CoursesController::class, 'editCourses']);
        Route::get('/add-course', [CoursesController::class, 'show'])->name('add.course');
        Route::get('/delete-course/{id}', [CoursesController::class, 'delete']);
        Route::get('/edit/{id}', [CoursesController::class, 'editShowdata']);
        
        
        // Project Route admin panel
        Route::get('/project-name',[ProjectController::class,'projectname'])->name('project.name');
        Route::post('/project-store',[ProjectController::class,'projectstore'])->name('project.store');
        Route::get('/delete-project/{id}', [ProjectController::class, 'deleteproject'])->name('delete.project');
        Route::get('/edit-project/{id}', [ProjectController::class, 'editproject'])->name('edit.project');
        Route::post('/update-project/{id}', [ProjectController::class, 'Updateproject'])->name('update.project');
    
        Route::get('/view-projectform', [ProjectController::class, 'viewprojectform'])->name('view.project.form');
        Route::get('/view-projectformdelete/{id}', [ProjectController::class, 'viewprojectformdelete'])->name('project.form.delete');
        Route::delete('/projectform/bulk-delete', [ProjectController::class, 'bulkDelete'])->name('project.form.bulkDelete');
        Route::get('/export-project/csv', [ProjectController::class, 'exportProjectCsv'])->name('export.project.csv');
        Route::get('/export-project/excel', [ProjectController::class, 'exportProjectExcel'])->name('export.project.excel');
        
        Route::get('/view-bbshrrdb-form', [ProjectController::class, 'viewbbshrrdbform'])->name('view.bbshrrdb.form');
        Route::get('/view-bbshrrdb-form-delete/{id}', [ProjectController::class, 'viewbbshrrdbformdelete'])->name('bbshrrdb.form.delete');
        Route::delete('/bbshrrdb-form/bulk-delete', [ProjectController::class, 'bulkDeleteBbshrrdb'])->name('bbshrrdb.form.bulkDelete');
        
        Route::get('/view-demo-form', [DemoConfirmationController::class, 'viewDemoConfirmForm'])->name('view.demo.form');
        Route::get('/view-demoformdelete/{id}', [DemoConfirmationController::class, 'viewDemoConfirmFormDelete'])->name('demo.form.delete');
        Route::delete('/demo-form/bulk-delete', [DemoConfirmationController::class, 'bulkDelete'])->name('demo-form.bulkDelete');
        Route::get('export-demo/csv', [DemoConfirmationController::class, 'exportCsv'])->name('export.demo.csv');
        Route::get('export-demo/excel', [DemoConfirmationController::class, 'exportExcel'])->name('export.demo.excel');
    
        
        Route::get('/demo-course', [DemoCourseController::class, 'index'])->name('demo.course.name');
        Route::post('/store-demo-course', [DemoCourseController::class, 'adddemocourse'])->name('store.demo.course.name');
        Route::get('/delete-demo-course/{id}', [DemoCourseController::class, 'Deletedemocourse'])->name('delete.demo.course');
        
        
        // program route
        Route::get('/delete-program/{id}', [CoursesController::class, 'DeleteProgram'])->name('delete.program');
        Route::get('/edit-program/{id}', [CoursesController::class, 'EditProgram'])->name('edit.program');
        Route::post('/update-program/{id}', [CoursesController::class, 'UpdateProgram'])->name('update.program');
    
    
    
        Route::post('/adminpaneltrainerform', [TrainerController::class, 'addtrainer']);
        Route::post('/edit-trainer/{id}', [TrainerController::class, 'editTrainers']);
        Route::get('/add-trainer', [TrainerController::class, 'show']);
        Route::get('/add-trainer/{id}', [TrainerController::class, 'delete']);
        Route::get('/edit-trainer/{id}', [TrainerController::class, 'editShowdata']);
    
        // adminpanel Registration routes
        Route::get('admin/view-registered', [RegistrationController::class, 'showtable'])->name('view.registered');
        Route::get('export-registers/csv', [RegistrationController::class, 'exportCsv'])->name('export.registers.csv');
        Route::get('export-registers/excel', [RegistrationController::class, 'exportExcel'])->name('export.registers.excel');
        Route::get('/view-registered/{id}', [RegistrationController::class, 'delete'])->name('delete.registered');
        Route::post('/items/multi-delete', [RegistrationController::class, 'multiDelete'])->name('items.multiDelete');
        // adminpanel Registration routes
        
        
        Route::get('export-lead-form/csv', [LeadFormController::class, 'exportCsv'])->name('export.leadForm.csv');
        Route::get('export-lead-form/excel', [LeadFormController::class, 'exportExcel'])->name('export.leadForm.excel');
    
        // adminpanel CFMA RECORDED routes
        Route::get('/view-cfma-recorded', [cfmarecordedController::class, 'showtable']);
        Route::get('/view-cfma-recorded/{id}', [cfmarecordedController::class, 'delete']);
        // adminpanel CFMA RECORDED routes
    
        // adminpanel Funnel routes
        Route::get('/view-funnel', [funnelformController::class, 'showtable']);
        Route::get('/view-funnel/{id}', [funnelformController::class, 'delete']);
        // adminpanel Funnel routes
    
        // adminpanel Free-demo routes
        Route::get('/view-freedemo', [freedemoController::class, 'showtable']);
        Route::get('/view-freedemo/{id}', [freedemoController::class, 'delete']);
        // adminpanel Free-demo routes
    
        // Assesment TNA 2025
        Route::get('/View-assests-table', [KamyabjawanController::class, 'asseststable']);
         // adminpanel Kamyab-jawan routes
         Route::get('/View-kamyabjawan-form', [KamyabjawanController::class, 'showtable']);
         Route::get('/View-kamyabjawan-form/{id}', [KamyabjawanController::class, 'delete']);
         // adminpanel Kamyab-jawan routes
    
        // adminpanel Feedback routes
        Route::get('/view-feedback', [FeedbackController::class, 'showtable'])->name('view.feedback-form');
        Route::get('/view-feedback/{id}', [FeedbackController::class, 'delete']);
        // adminpanel Feedback routes
    
        // adminpanel LeadForm routes
           Route::get('/view-Leadform', [LeadFormController::class, 'showtable'])->name('view.Leadform');
            Route::get('/view-navttcform', [LeadFormController::class, 'showtables']);
            Route::delete('/navttcform/bulk-delete', [LeadFormController::class, 'navttcformBulkDelete'])->name('navttcform.bulkDelete');
           Route::get('/view-Leadform/{id}', [LeadFormController::class, 'delete']);
           Route::get('/delete-corporate-form/{id}', [LeadFormController::class, 'deleteCorporateForm']);
           Route::get('/view-navttc-form-data', [LeadFormController::class, 'showtableNavttcData'])->name('view.navttc-form-data');
           Route::get('/view-certificate-requests', [LeadFormController::class, 'certificateRequests'])->name('admin.certificate-requests');
           Route::delete('/certificate-requests/bulk-delete', [LeadFormController::class, 'certificateRequestbulkDelete'])->name('certificate-requests.bulkDelete');
           Route::get('/delete-certificate-request/{id}', [LeadFormController::class, 'deleteCertificateRequest']);
           Route::get('/view-scholarship-requests', [LeadFormController::class, 'scholarshipRequests'])->name('admin.scholarship-requests');
           Route::get('/delete-scholarship-request/{id}', [LeadFormController::class, 'deleteScholarshipRequest']);
           Route::delete('/scholarship-requests/bulk-delete', [LeadFormController::class, 'scholarshipRequestbulkDelete'])->name('scholarship-requests.bulkDelete');
           Route::get('/view-1-Minute-Feedback', [LeadFormController::class, 'oneMinuteFeedbackForms'])->name('admin.one-minute-feedbacks');
           Route::get('/delete-1-Minute-Feedback/{id}', [LeadFormController::class, 'deleteOneMinuteFeedback']);
           Route::put('/oneMinute/updateStatus/{id}', [LeadFormController::class, 'oneMinuteUpdateStatus']);
           Route::post('/1-Minute-Feedback/multi-delete', [LeadFormController::class, 'oneMinuteMultiDelete'])->name('oneMinute.multiDelete');
           
           Route::post('/lead/multi-delete', [LeadFormController::class, 'leadmultiDelete'])->name('lead.multiDelete');
        // adminpanel LeadForm routes
    
        // adminpanel CareerForm routes
        Route::get('/view-careers', [CareerFormController::class, 'showtable'])->name('view.careers');
        Route::get('/view-careers/{id}', [CareerFormController::class, 'delete']);
        Route::delete('/careers/bulk-delete', [CareerFormController::class, 'bulkDelete'])->name('careers.bulkDelete');
        // adminpanel CareerForm routes
    
        // adminpanel Contactus routes
            Route::get('/view-Contactus', [contactusController::class, 'showtable'])->name('view.contactus');
            Route::get('/view-Contactus/{id}', [contactusController::class, 'delete']);
            Route::delete('/Contactus/bulk-delete', [contactusController::class, 'bulkDelete'])->name('contact-us.bulkDelete');
        // adminpanel Contactus routes
        
        Route::resource('admin/webinars', WebinarController::class);
        Route::get('admin/webinars/status/{id}', [WebinarController::class, 'updateStatus'])->name('webinars.status.update');

        Route::resource('admin/blogs', BlogController::class);
        Route::get('admin/blogs/status/{id}', [BlogController::class, 'updateStatus'])->name('blogs.status.update');

        Route::get('admin/comments/{id}', [BlogController::class, 'blogComments'])->name('blogs.comments.index');
        Route::get('admin/comments/{id}/create', [BlogController::class, 'blogCommentCreate'])->name('blogs.comments.create');
        Route::post('admin/comments/{id}/store', [BlogController::class, 'blogCommentStore'])->name('blogs.comments.store');
        Route::get('admin/comments/{id}/edit', [BlogController::class, 'blogCommentEdit'])->name('blogs.comments.edit');
        Route::put('admin/comments/{id}/update', [BlogController::class, 'blogCommentUpdate'])->name('blogs.comments.update');
        Route::delete('admin/comments/{id}/delete', [BlogController::class, 'blogCommentDelete'])->name('blogs.comments.delete');
        Route::get('admin/comments/status/{id}', [BlogController::class, 'blogCommentUpdateStatus'])->name('blogs.comments.status.update');
        
        //blog-categories
        Route::resource('admin/blog-categories', BlogCategoryController::class);
        Route::get('admin/blog-categories/status/{id}', [BlogCategoryController::class, 'updateStatus'])->name('blog-categories.status.update');
        
        Route::resource('admin/users', UserController::class);
        Route::get('admin/users/status/{id}', [UserController::class, 'updateStatus'])->name('users.status.update');
        Route::resource('admin/roles', RoleController::class);
        Route::resource('admin/permissions', PermissionController::class);
        
        
        Route::get('/admin/career-connect/{formType}', [CareerConnectController::class, 'viewFormData'])->name('admin.career-connect');
        Route::get('/admin/career-connect/{formType}/{id}', [CareerConnectController::class, 'deleteFormData'])->name('admin.career-connect.delete');
        Route::delete('/admin/career-connect/{formType}/bulk-delete', [CareerConnectController::class, 'bulkDeleteFormData'])->name('admin.career-connect.bulkDelete');
        
        Route::get('/admin/career-connect-jobs', [CareerConnectController::class, 'viewJobData'])->name('admin.career-connect-jobs');
        Route::get('/admin/career-connect-job/approve/{id}', [CareerConnectController::class, 'approveJob'])
            ->name('admin.career-connect-job.approve');
        Route::get('/admin/career-connect-job/disapprove/{id}', [CareerConnectController::class, 'disapproveJob'])
            ->name('admin.career-connect-job.disapprove');
        Route::get('/admin/career-connect-job/{id}', [CareerConnectController::class, 'deleteJobData'])->name('admin.career-connect-job.delete');
        Route::delete('/admin/career-connect-job/bulk-delete', [CareerConnectController::class, 'bulkDeleteJobData'])->name('admin.career-connect-jobs.bulkDelete');
        Route::get('/admin/career-connect-job/edit/{id}', [CareerConnectController::class, 'editJobData'])->name('admin.career-connect-job.edit');
        Route::post('/admin/career-connect-job/update/{id}', [CareerConnectController::class, 'updateJobData'])->name('admin.career-connect-job.update');
        
        Route::get('/admin/career-connect-candidates', [CareerConnectController::class, 'viewCandidateData'])->name('admin.career-connect-candidates');
        Route::get('/admin/career-connect-candidate/approve/{id}', [CareerConnectController::class, 'approveCandidate'])
            ->name('admin.career-connect-candidate.approve');
        Route::get('/admin/career-connect-candidate/disapprove/{id}', [CareerConnectController::class, 'disapproveCandidate'])
            ->name('admin.career-connect-candidate.disapprove');
        Route::get('/admin/career-connect-candidate/{id}', [CareerConnectController::class, 'deleteCandidateData'])->name('admin.career-connect-candidate.delete');
        Route::delete('/admin/career-connect-candidate/bulk-delete', [CareerConnectController::class, 'bulkDeleteCandidateData'])->name('admin.career-connect-candidates.bulkDelete');
        Route::get('/admin/career-connect-candidate/edit/{id}', [CareerConnectController::class, 'editCandidateData'])->name('admin.career-connect-candidate.edit');
        Route::post('/admin/career-connect-candidate/update/{id}', [CareerConnectController::class, 'updateCandidateData'])->name('admin.career-connect-candidate.update');
    });
});
