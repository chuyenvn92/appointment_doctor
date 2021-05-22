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



Route::get('/','FrontendController@index');

Route::get('/list-appointment','FrontendController@listAppointment');

Route::post('/store-guest','FrontendController@storeGuest')->name('store.guest');

Route::get('/doctor/detail/{id}','FrontendController@DoctorView');

Route::get('/department/show','FrontendController@DepartmentShow')->name('departmentshow');

Route::get('/doctor/show','FrontendController@DoctorShow')->name('doctorshow');

Route::get('/appointment/{doctorId}/{date}','FrontendController@show')->name('create.appointment');



Route::group(['middleware'=>['auth','patient']],function(){

	Route::post('/book/appointment','FrontendController@store')->name('booking.appointment');

	Route::get('/my-booking','FrontendController@myBookings')->name('my.booking');

	Route::get('/user-profile','ProfileController@index');
	Route::post('/user-profile','ProfileController@store')->name('profile.store');
	Route::post('/profile-pic','ProfileController@profilePic')->name('profile.pic');
	Route::get('/my-prescription','FrontendController@myPrescription')->name('my.prescription');


});


Route::get('/dashboard','DashboardController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware'=>['auth','admin']],function(){
	Route::resource('doctor','DoctorController');
	Route::resource('guest','GuestController');
	Route::post('/doctor/search','DoctorController@SearchDoctor')->name('search.doctor');
	Route::post('/department/search','DepartmentController@SearchDepartment')->name('search.department');
	Route::get('/patients/pending','PatientlistController@pending')->name('patient');
	Route::get('/patients/confirmed','PatientlistController@confirmed')->name('confirmed');
	Route::get('/patients/done','PatientlistController@doneBooking')->name('doneBooking');
	Route::get('/patients/cancel','PatientlistController@cancelBooking')->name('cancelBooking');
	Route::get('/patients/all','PatientlistController@allTimeAppointment')->name('all.appointments');
	Route::get('/status/update/{id}','PatientlistController@toggleStatus')->name('update.status');
	Route::resource('department','DepartmentController');


});
Route::group(['middleware'=>['auth','doctor']],function(){

	Route::resource('appointment','AppointmentController');
	Route::post('/appointment/check','AppointmentController@check')->name('appointment.check');
	Route::post('/appointment/update','AppointmentController@updateTime')->name('update');

	// Route for accept booking appointment
	Route::get('/patients/booking/pending/today','PatientlistController@showPendingTodayBooking')->name('patient.pendingtoday');
	Route::get('/patients/booking/pending/all','PatientlistController@showPendingAllBooking')->name('patient.pendingall');
	Route::get('/patients/booking/confirmed/all','PatientlistController@showConfirmedAllBooking')->name('patient.confirmedall');
	Route::get('/patients/booking/cancel/all','PatientlistController@showCancelAllBooking')->name('patient.cancelall');
	Route::post('/status/accept/booking','PatientlistController@acceptBooking')->name('accept.booking');
	Route::post('/status/cancel/booking','PatientlistController@ignoreBooking')->name('ignore.booking');
	Route::get('/status/success/booking/{id}','PatientlistController@successBooking');
	Route::get('/patients/allbooking','PatientlistController@showAllBooking')->name('patient.all');
	// Rpute for print PDF
	Route::get('/generatePDF/{userId}/{date}','PatientlistController@generatePDF')->name('patient.generatePDF');
	Route::post('/send/prescription','PatientlistController@sendPrescription')->name('send.prescription');

	Route::get('patient-today','PrescriptionController@index')->name('patients.today');

	Route::post('/prescription','PrescriptionController@store')->name('prescription');

	Route::get('/prescription/{userId}/{date}','PrescriptionController@show')->name('prescription.show');
	Route::get('/prescribed-patients','PrescriptionController@patientsFromPrescription')->name('prescribed.patients');
	Route::get('/not-yet/prescribed','PrescriptionController@notPrescribed')->name('prescribed.all');


});




