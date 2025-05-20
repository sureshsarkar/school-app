<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group whichcheckajax-get-quote
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("login-otpless", function () {

});

Route::group(["prefix" => "admin", "namespace" => "Admin", "middleware" => ["auth"]], function () {
    Route::get("/", 'DashboardController@index');
    Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
    Route::get("status-changed/{model}/{id}/{status}", "DashboardController@setPublishData")->name("setPublishData");
    Route::get("is-home-status-changed/{model}/{id}/{status}", "DashboardController@setIsHomeData")->name("setIsHomeData");
    Route::get("is-popular-status-changed/{model}/{id}/{status}", "DashboardController@setIsPopularData")->name("setIsPopularData");



    Route::get("exportData/{dynamic}", "DashboardController@exportData")->name("exportData");

    Route::get("/media-center", "DashboardController@mediaCenter");
    Route::post("/new-file-uploads", "DashboardController@newFileUploads")->name("new-file-uploads");
    Route::get("change-password", "DashboardController@changePassword")->name("admin-change-password");
    Route::post("change-password", "DashboardController@changePasswordPost")->name("change-password-admin");
    Route::get("setting", "DashboardController@setting");
    Route::post("setting", "DashboardController@settingPost");
    Route::delete("medias-destroy", "DashboardController@mediasDelete")->name("medias-destroy");
    Route::get('ckeditor', 'CkeditorController@index');
    Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');
    Route::get("blog-category/copydata/{id}", "BlogCategoryController@copyData")->name("blog-category.copyData");
    Route::get("blogs/copydata/{id}", "BlogController@copyData")->name("blogs.copyData");

    Route::get("properties/copydata/{id}", "PropertyController@copyData")->name("properties.copyData");
    Route::post("image-delete-asset", "PropertyController@imageDeleteAsset")->name("image-delete-asset");
    Route::get("delete-property-space-single", "PropertyController@deletePropertySpace")->name("delete-property-space-single");
    Route::get("sliders/copydata/{id}", "SliderController@copyData")->name("sliders.copyData");
    Route::get("faqs/copydata/{id}", "FaqController@copyData")->name("faqs.copyData");
    Route::get("galleries/copydata/{id}", "GalleryController@copyData")->name("galleries.copyData");
    Route::get("testimonials/copydata/{id}", "TestimonialController@copyData")->name("testimonials.copyData");
    Route::post("multiple-delete/{models}", "DashboardController@multipleDelete")->name("multipleDelete");
    Route::get("galleries/active/{id}", "GalleryController@active")->name("galleries.active");
    Route::get("galleries/deactive/{id}", "GalleryController@deactive")->name("galleries.deactive");
    Route::get("blogs/active/{id}", "BlogController@active")->name("blogs.active");
    Route::get("blogs/deactive/{id}", "BlogController@deactive")->name("blogs.deactive");


    Route::get("properties/active/{id}", "PropertyController@active")->name("properties.active");
    Route::get("properties/deactive/{id}", "PropertyController@deactive")->name("properties.deactive");

    Route::get("product-coupons/active/{id}", "PropertyCouponController@active")->name("product-coupons.active");
    Route::get("product-coupons/deactive/{id}", "PropertyCouponController@deactive")->name("product-coupons.deactive");

    Route::get("product-coupons/active-all", "PropertyCouponController@activeAll")->name("product-coupons.active-all");
    Route::get("product-coupons/deactive-all", "PropertyCouponController@deactiveAll")->name("product-coupons.deactive-all");

    Route::get("product-coupons/import", "PropertyCouponController@import")->name("product-coupons.import");


    Route::post("product-coupons/deactivate-all-checkbox", "PropertyCouponController@deactiveAllCheckbox")->name("deactiveAllCheckboxCoupon");
    Route::post("product-coupons/activate-all-checkbox", "PropertyCouponController@activeAllCheckbox")->name("activeAllCheckboxCoupon");
    Route::post("product-coupons/delete-all-checkbox", "PropertyCouponController@deleteAllCheckbox")->name("deleteAllCheckboxCoupon");


    Route::post("import-items-master", "PropertyCouponController@importData")->name("import-items-master-Upload");

    Route::get("locations/copyData/{id}", "LocationController@copyData")->name("locations.copyData");
    Route::resources([

        'users' => UserController::class,
        'sliders' => SliderController::class,
        'cms' => CmsController::class,
        'locations' => LocationController::class,
        'attractions' => AttractionController::class,
        'welcome_packages' => WelcomePackageController::class,

        'result' => ResultController::class,
        'subject' => SubjectController::class,
        'class' => ClassController::class,
        'syllabus' => SyllabusController::class,
        'session' => SessionController::class,
        'customers' => CustomerController::class,
        'voters' => VoterController::class,

        'coupons' => CouponController::class,
        'email-templetes' => EmailTempleteController::class,
        'faqs' => FaqController::class,
        'galleries' => GalleryController::class,
        'newsletters' => NewsLetterController::class,
        'our-clients' => OurClientController::class,
        'testimonials' => TestimonialController::class,
        'our-teams' => OurTeamController::class,
        'blogs' => BlogController::class,
        'blog-category' => BlogCategoryController::class,
        'weoffer' => WhatWeOfferController::class,



        'properties' => PropertyController::class,


        'career_categories' => CareerCategoryController::class,
        'careers' => CareerController::class,
        'domain-feedback' => DomainFeedbackController::class,


        'product-coupons' => PropertyCouponController::class,
        'countries' => CountryController::class,
        'stores' => StoreController::class,
        'brands' => BrandController::class,
        'manufactures' => ManufactureController::class,
        'collections' => CollectionController::class,
        'deals' => DealController::class,
        'services' => ServiceController::class,

        'contact-us-enquiries' => ContactusRequestController::class,


    ]);
});



Auth::routes();

Route::get("searchAutoCOmpleteSearch", "PageController@searchAutoCOmpleteSearch")->name("searchAutoCOmpleteSearch");
Route::get("sitemap.xml", "PageController@sitemap");
Route::post("contact-post", "PageController@contactPost")->name("contactPost");
Route::post("ads-post", "PageController@adsPost")->name("adsPost");
Route::post("storevote", "PageController@storevote")->name("storevote");
Route::post("domain-feedback", "PageController@domainfeedback")->name("domainfeedback");
Route::post("product-enquiry-now", "PageController@productDetailPost")->name("productDetailPost");
Route::post("review-submit", "PageController@reviewSubmit")->name("reviewSubmit");

Route::post("newsletter-post", "PageController@newsletterPost")->name("newsletterPost");

Route::post("user-login", "Employee\Auth\LoginRegisterController@login")->name("user.login");

//

Route::post("customer-login-check", "Voter\Auth\LoginRegisterController@register")->name("customer.post.login");

Route::post("user-register", "Employee\Auth\LoginRegisterController@register")->name("front.user.register");
Route::post("employee-forgot-password", "Employee\Auth\LoginRegisterController@forgotpassword")->name("employee.forgot.password");

Route::group(["middleware" => ["OptimizeMiddleware"]], function () {

    Route::get('career/detail/{id}', "PageController@careerDetail");
    Route::get('career/category/{seo_url}', "PageController@careerCategoryList");
    Route::get("career/category-listing", "PageController@careerCategorList");

    //career jobs
    Route::get("career/latest-opportunities", "JobController@latestjob");
    Route::get("career/latest-opportunities/{seo_url}", "JobController@latestjob");
    Route::get("career/feature-jobs", "JobController@featuredjob");
    Route::get("career/job-details/{seo_url}", "JobController@jobdetails");
    Route::get("career/job-apply/{seo_url}", "JobController@applynow");
    Route::post("career/apply-now/{job_id}", "JobController@careerenquiry");


    Route::get("products/{seo_url}", "PageController@singleProduct");
    Route::get("case-studies/{seo_url}", "PageController@casestudiesdetails");
    Route::get("weoffer/{seo_url}", "PageController@whatweofferdetails");
    Route::get("ads/{seo_url}", "PageController@companyads");
    Route::get("vote/success", "PageController@votesuccess");



    Route::get("blog/{seo_url}", "PageController@blogSingle");
    Route::get("blogs/category/{seo_url}", "PageController@categoryData");

    Route::get("career-tips/{seo_url}", "PageController@servicesdetails");


    // Route::get('/', "PageController@commingsoon")->name("front-home1");
    Route::get('/', "PageController@index")->name("front-home");
    Route::get("{seo_url}", "PageController@dynamicDataCategory")->name("services");
    Route::post("result", "PageController@dynamicDataCategory")->name("result");



});

Route::group(["prefix" => "user", "middleware" => ["auth:employee"]], function () {
    //  Route::get("/dashboard","EmployeeController@index")->name('dashboard');
    Route::get("/syllabus", "EmployeeController@syllabus")->name('user.syllabus');
    Route::get("/profile", "EmployeeController@index")->name('user.profile');
    Route::get("/logout", "Employee\Auth\LoginRegisterController@logout")->name('user.logout');
});
Route::group(["prefix" => "voter", "middleware" => ["auth:voter"]], function () {
    //  Route::get("/dashboard","EmployeeController@index")->name('dashboard');
    //Route::get("/profile","EmployeeController@index")->name('user.profile');
    Route::get("/logout", "Voter\Auth\LoginRegisterController@logout")->name('voter.logout');
});

