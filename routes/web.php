<?php

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'AdminController@dashboard')->name('home');

//----Admin Route---//

Route::get('admin/login', 'Admin\LoginController@showLoginForm');
Route::post('admin/login', 'Admin\LoginController@login')->name('admin.login');
Route::get('admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');
Route::get('admin/profile', 'AdminController@profile')->name('admin.profile');
Route::get('admin/edit/profile', 'AdminController@edit_profile')->name('admin.edit_profile');
Route::post('admin/update/profile', 'AdminController@update_profile')->name('admin.update_profile');
Route::get('admin/password/change', 'AdminController@change_password')->name('admin.change_password');
Route::post('admin/password/update', 'AdminController@update_password')->name('admin.update_password');

//----Category Route----//
Route::get('all/category', 'CategoryController@index')->name('all.category');
Route::post('store/category', 'CategoryController@store')->name('store.category');
Route::get('edit/category/{id}', 'CategoryController@edit')->name('edit.category');
Route::post('update/category/{id}', 'CategoryController@update')->name('update.category');
Route::get('delete/category/{id}', 'CategoryController@delete')->name('delete.category');

//----Property Route----//
Route::get('view/property/{id}', 'PropertyController@view')->name('view.property');
Route::get('add/property', 'PropertyController@add')->name('add.property');
Route::get('all/property', 'PropertyController@index')->name('all.property');
Route::post('store/property', 'PropertyController@store')->name('store.property');
Route::get('edit/property/{id}', 'PropertyController@edit')->name('edit.property');
Route::post('update/property/{id}', 'PropertyController@update')->name('update.property');
Route::get('delete/property/{id}', 'PropertyController@delete')->name('delete.property');
Route::get('active/property/{id}', 'PropertyController@active')->name('active.property');
Route::get('deactive/property/{id}', 'PropertyController@deactive')->name('deactive.property');

//----Sub Category Route----//
Route::get('all/subcategory', 'SubcategoryController@index')->name('all.subcategory');
Route::post('store/subcategory', 'SubcategoryController@store')->name('store.subcategory');
Route::get('edit/subcategory/{id}', 'SubcategoryController@edit')->name('edit.subcategory');
Route::post('update/subcategory/{id}', 'SubcategoryController@update')->name('update.subcategory');
Route::get('delete/subcategory/{id}', 'SubcategoryController@delete')->name('delete.subcategory');

//----Slider Route----//
Route::get('all/slider', 'SliderController@index')->name('all.slider');
Route::post('store/slider', 'SliderController@store')->name('store.slider');
Route::get('edit/slider/{id}', 'SliderController@edit')->name('edit.slider');
Route::post('update/slider/{id}', 'SliderController@update')->name('update.slider');
Route::get('delete/slider/{id}', 'SliderController@delete')->name('delete.slider');

//----Popular Place Route----//
Route::get('all/popular/place', 'PopularPlaceController@index')->name('all.popular_place');
Route::post('store/popular/place', 'PopularPlaceController@store')->name('store.popular_place');
Route::get('edit/popular/place/{id}', 'PopularPlaceController@edit')->name('edit.popular_place');
Route::post('update/popular/place/{id}', 'PopularPlaceController@update')->name('update.popular_place');
Route::get('delete/popular/place/{id}', 'PopularPlaceController@delete')->name('delete.popular_place');
Route::get('active/popular/{id}', 'PopularPlaceController@active')->name('active.popular');
Route::get('deactive/popular/{id}', 'PopularPlaceController@deactive')->name('deactive.popular');

//----Size Route----//
Route::get('all/size', 'SizeController@index')->name('all.size');
Route::post('store/size', 'SizeController@store')->name('store.size');
Route::get('edit/size/{id}', 'SizeController@edit')->name('edit.size');
Route::post('update/size/{id}', 'SizeController@update')->name('update.size');
Route::get('delete/size/{id}', 'SizeController@delete')->name('delete.size');

//----Social Route----//
Route::get('/edit/social','SocialController@edit')->name('edit.social');
Route::post('/update/social/{id}','SocialController@update')->name('update.social');

//----FB Page Route----//
Route::get('/edit/fb/page','FbPageController@edit')->name('edit.fb_page');
Route::post('/update/fb/page/{id}','FbPageController@update')->name('update.fb_page');

//----Tawk to Route----//
Route::get('/edit/twak/to','FbPageController@editTwakTo')->name('edit.twak_to');
Route::post('/update/twak/to/{id}','FbPageController@updateTwakTo')->name('update.twak_to');

//----Story Route----//
Route::get('/edit/story/','StoryController@edit')->name('edit.story');
Route::post('/update/story/{id}','StoryController@update')->name('update.story');

//----Mission&Vissi Route----//
Route::get('/edit/mission/vission','MissionVissionController@edit')->name('edit.mission_vission');
Route::post('/update/mission/vission/{id}','MissionVissionController@update')->name('update.mission_vission');

//----Contact Info Route----//
Route::get('/edit/contact/info','SettingController@edit')->name('edit.contact_info');
Route::post('/update/contact/info/{id}','SettingController@update')->name('update.contact_info');

//----Logo Route----//
Route::get('/edit/logo','SettingController@Logoedit')->name('edit.logo');
Route::post('/update/logo/{id}','SettingController@Logoupdate')->name('update.logo');

//----Copy Right Route----//
Route::get('/edit/copy/right','SettingController@editcopyright')->name('edit.copyright');
Route::post('/update/copy/right/{id}','SettingController@updatecopyright')->name('update.copyright');

//----Seo Route----//
Route::get('/edit/seo','SeoController@edit')->name('edit.seo');
Route::post('/update/seo/{id}','SeoController@update')->name('update.seo');

//----Blog Category Route----//
Route::get('all/blog/category', 'BlogCategoryController@index')->name('all.blog_category');
Route::post('store/blog/category', 'BlogCategoryController@store')->name('store.blog_category');
Route::get('edit/blog/category/{id}', 'BlogCategoryController@edit')->name('edit.blog_category');
Route::post('update/blog/category/{id}', 'BlogCategoryController@update')->name('update.blog_category');
Route::get('delete/blog/category/{id}', 'BlogCategoryController@delete')->name('delete.blog_category');

//----Blog Route----//
Route::get('add/blog', 'BlogController@create')->name('add.blog');
Route::get('all/blog', 'BlogController@index')->name('all.blog');
Route::post('store/blog', 'BlogController@store')->name('store.blog');
Route::get('edit/blog/{id}', 'BlogController@edit')->name('edit.blog');
Route::post('update/blog/{id}', 'BlogController@update')->name('update.blog');
Route::get('delete/blog/{id}', 'BlogController@delete')->name('delete.blog');

//----Testimonial Route----//
Route::get('add/testimonial', 'TestimonialController@add')->name('add.testimonial');
Route::get('all/testimonial', 'TestimonialController@index')->name('all.testimonial');
Route::post('store/testimonial', 'TestimonialController@store')->name('store.testimonial');
Route::get('edit/testimonial/{id}', 'TestimonialController@edit')->name('edit.testimonial');
Route::post('update/testimonial/{id}', 'TestimonialController@update')->name('update.testimonial');
Route::get('delete/testimonial/{id}', 'TestimonialController@delete')->name('delete.testimonial');

//----Team Route----//
Route::get('all/team', 'TeamController@index')->name('all.team');
Route::post('store/team', 'TeamController@store')->name('store.team');
Route::get('edit/team/{id}', 'TeamController@edit')->name('edit.team');
Route::post('update/team/{id}', 'TeamController@update')->name('update.team');
Route::get('delete/team/{id}', 'TeamController@delete')->name('delete.team');

//----Director Route----//
Route::get('all/director', 'DirectorController@index')->name('all.director');
Route::post('store/director', 'DirectorController@store')->name('store.director');
Route::get('edit/director/{id}', 'DirectorController@edit')->name('edit.director');
Route::post('update/director/{id}', 'DirectorController@update')->name('update.director');
Route::get('delete/director/{id}', 'DirectorController@delete')->name('delete.director');

//----Clints Route----//
Route::get('all/clint', 'ClintController@index')->name('all.clint');
Route::post('store/clint', 'ClintController@store')->name('store.clint');
Route::get('edit/clint/{id}', 'ClintController@edit')->name('edit.clint');
Route::post('update/clint/{id}', 'ClintController@update')->name('update.clint');
Route::get('delete/clint/{id}', 'ClintController@delete')->name('delete.clint');

//----Messege Route----//
Route::get('read/messege', 'MessegeController@read')->name('read.messege');
Route::get('unread/messege', 'MessegeController@unread')->name('unread.messege');
Route::get('show/messege/{id}', 'MessegeController@show')->name('show.messege');
Route::get('delete/messege/{id}', 'MessegeController@delete')->name('delete.messege');
Route::get('single/delete/messege/{id}', 'MessegeController@SingleDelete')->name('s_delete.messege');

//----Service Type Route----//
Route::get('all/service/type', 'ServiceTypeController@index')->name('all.service_type');
Route::post('store/service/type', 'ServiceTypeController@store')->name('store.service_type');
Route::get('edit/service/type/{id}', 'ServiceTypeController@edit')->name('edit.service_type');
Route::post('update/service/type/{id}', 'ServiceTypeController@update')->name('update.service_type');
Route::get('delete/service/type/{id}', 'ServiceTypeController@delete')->name('delete.service_type');

//----Service Route----//
Route::get('add/service', 'ServiceController@create')->name('add.service');
Route::get('all/service', 'ServiceController@index')->name('all.service');
Route::post('store/service', 'ServiceController@store')->name('store.service');
Route::get('edit/service/{id}', 'ServiceController@edit')->name('edit.service');
Route::post('update/service/{id}', 'ServiceController@update')->name('update.service');
Route::get('delete/service/{id}', 'ServiceController@delete')->name('delete.service');

//----Proposal Route----//
Route::get('pending/proposal', 'ProposalController@pending')->name('pending');
Route::get('success/proposal', 'ProposalController@success')->name('success');
Route::get('reject/proposal', 'ProposalController@reject')->name('reject');
Route::get('view/proposal/{id}', 'ProposalController@view')->name('view.proposal');
Route::get('delete/proposal/{id}', 'ProposalController@delete')->name('delete.proposal');
Route::get('accept/proposal/{id}', 'ProposalController@accept')->name('accept.proposal');
Route::get('denay/proposal/{id}', 'ProposalController@denay')->name('denay.proposal');
Route::post('email/send', 'ProposalController@emailsend')->name('email.send');

//----Oute Mail Route----//
Route::get('out/mail/box', 'ProposalController@outmail')->name('outmail');
Route::get('view/out/mail/{id}', 'ProposalController@viewoutmail')->name('view.out_mail');
Route::get('delete/out/mail/{id}', 'ProposalController@deleteoutmail')->name('delete.out_mail');
Route::get('all/delete/out/mail/', 'DeleteController@alldelete')->name('all.delete');

//----Service Route----//
Route::get('add/user', 'RolePlayController@create')->name('add.user');
Route::get('all/user', 'RolePlayController@index')->name('all.user');
Route::post('store/user', 'RolePlayController@store')->name('store.user');
Route::get('edit/user/{id}', 'RolePlayController@edit')->name('edit.user');
Route::post('update/user/{id}', 'RolePlayController@update')->name('update.user');
Route::get('delete/user/{id}', 'RolePlayController@delete')->name('delete.user');



/*********************************************************************
------------------------Front End Route--------------------
*********************************************************************/

//---Messege Send Routs---//
Route::post('send-messege', 'User\FrontController@send')->name('send.messege');

//---Contact Routs---//
Route::get('contact-us','User\FrontController@contact')->name('contact');

//---Blog Routs---//
Route::get('all-news-events','User\FrontController@allblog')->name('all_front.blog');
Route::get('single-blog-{title_slug}','User\FrontController@singleblog');
Route::get('category-wise-blog-{category_slug}','User\FrontController@categoryblog');
Route::post('search-blog','User\FrontController@SearchBlog')->name('search.blog');


//---Mission & Vission Routs---//
Route::get('mission-vission','User\FrontController@mission')->name('mission.vission');

//---Team Member Routs---//
Route::get('management-team','User\FrontController@team')->name('team');

//---Director Routs---//
Route::get('board-of-director','User\FrontController@director')->name('director');
Route::get('director-comment-{id}-{name_slug}','User\FrontController@DirectorComment');

//---Clints Routs---//
Route::get('our-clint','User\FrontController@clint')->name('clint');

//---Story Routs---//
Route::get('our-story','User\FrontController@story')->name('story');

//---Project Routs---//
Route::get('browse-property','User\FrontController@browse')->name('browse');
Route::get('ongoing-property','User\FrontController@ongoing')->name('ongoing');
Route::get('upcoming-property','User\FrontController@upcoming')->name('upcoming');
Route::get('complete-property','User\FrontController@complete')->name('complete');
Route::get('property-details-{category_slug}','User\FrontController@PropertyDetails');
Route::get('property-types-{type_slug}','User\FrontController@PropertyType');
Route::get('property-search','User\FrontController@PropertySearch')->name('search_property');
Route::get('popular-property-{slug}','User\FrontController@PopularProperty')->name('popular.property');


//---Proposal Routs---//
Route::get('proposal','User\FrontController@proposal')->name('proposal');
Route::post('send-proposal', 'User\FrontController@sendproposal')->name('send.proposal');

//----Service Route----//
Route::get('all-others-service','User\FrontController@OtherService')->name('all_other.service');
Route::get('single-others-service-{title_slug}','User\FrontController@singleService');


Route::get('image/upload','DropZonController@fileCreate')->name('fileCreate');
Route::post('image/upload/store','DropZonController@fileStore');
// Route::post('image/delete','DropZonController@fileDestroy');