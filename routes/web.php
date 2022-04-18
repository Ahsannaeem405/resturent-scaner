<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderPickupController;
use App\Http\Controllers\WaitingOrderController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\LocationInfoController;
use App\Http\Controllers\VehicleColorController;
use App\Http\Controllers\VehicleTypeController;
use App\Http\Controllers\FormFieldController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get("/", [OrderPickupController::class, "homePage"]);
Route::get("/success", [OrderPickupController::class, "success"])->name("success");


Auth::routes();
Route::get("/register", function(){
    return redirect()->route('login');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
Route::post("/save-order-pickup", [OrderPickupController::class, "saveOrderPickUp"])->name('save-order');

//admin routes
Route::prefix('admin')->middleware(['auth'])->group(function () {



Route::get("waiting-order", [WaitingOrderController::class, "listing"])->name("waiting-order");
Route::get("waiting-order/status", [WaitingOrderController::class, "statusUpdate"])->name("waiting/status");
Route::get("complete-order/status", [WaitingOrderController::class, "statusUpdateComplete"])->name("complete/status");

Route::get("complete-order", [WaitingOrderController::class, "statusComplete"])->name("complete_order");
Route::get("settings", [SettingController::class, "settings"])->name("setting");
Route::get("settings/update", [SettingController::class, "settingsUpdate"])->name("update-setting");
Route::get("settings/site-setting", [SettingController::class, "siteSetting"])->name("site_setting")->middleware('is_admin');
Route::get("settings/customer-form", [SettingController::class, "customer_form"])->name("customer_form")->middleware('is_admin');
Route::get("settings/change-password", [SettingController::class, "passwordUpdate"])->name("change-password")->middleware('is_admin');
Route::get("dashboard", [SettingController::class, "reports"])->name("reports");
Route::get("settings/add-employee", [SettingController::class, "add_employee"])->name("add_employee")->middleware('is_admin');
Route::post("settings/employee-add", [SettingController::class, "employee_add"])->name("employee-add")->middleware('is_admin');
Route::get("employee/delete", [SettingController::class, "delete_employee" ])->name("employee/delete")->middleware('is_admin');
Route::post("settings/employee-update", [SettingController::class, "employee_update"])->name("employee-update")->middleware('is_admin');
Route::get("fields/shown", [SettingController::class, "shown"])->name("shown")->middleware('is_admin');
Route::get("fields/required", [SettingController::class, "required"])->name("required")->middleware('is_admin');
Route::post("fields/info", [LocationInfoController::class, "info"])->name("location-info")->middleware('is_admin');

Route::post("add", [VehicleTypeController::class, "type"])->name("add_type")->middleware('is_admin');


Route::post("add-type", [VehicleColorController::class, "color"])->name("add_color")->middleware('is_admin');
Route::get("color/status", [VehicleColorController::class, "cstatus"])->name("color/status")->middleware('is_admin');
Route::get("type/status", [VehicleTypeController::class, "vstatus"])->name("type/status")->middleware('is_admin');

Route::get("vehicle-color/delete", [VehicleColorController::class, "deletecolor" ])->name("color/delete")->middleware('is_admin');
Route::get("vehicle-type/delete", [VehicleTypeController::class, "deletetype" ])->name("type/delete")->middleware('is_admin');
Route::get("location-info/sound", [LocationInfoController::class, "soundplay" ])->name("soundplay")->middleware('is_admin');


Route::post("color/update-color", [FormFieldController::class, "updateColor" ])->name("color.update")->middleware('is_admin');
Route::post("type/update-type", [FormFieldController::class, "updateType" ])->name("type.update")->middleware('is_admin');
Route::get("new/user", [SettingController::class, "audioForm" ])->name("audio_form")->middleware('is_admin');

// Route::get('/cls', function() {
//     $run = Artisan::call('config:clear');
//     $run = Artisan::call('cache:clear');
//     $run = Artisan::call('config:cache');
//     Session::flush();
//     return 'FINISHED';
// });

});
// Route::prefix('employee')->middleware(['auth','role'])->group(function () {
//     Route::get("waiting-order", [WaitingOrderController::class, "listing"])->name("waiting-order");
// Route::get("waiting-order/status", [WaitingOrderController::class, "statusUpdate"])->name("waiting/status");
// Route::get("complete-order/status", [WaitingOrderController::class, "statusUpdateComplete"])->name("complete/status");

// Route::get("complete-order", [WaitingOrderController::class, "statusComplete"])->name("complete_order");
// Route::get("/dashboard", [SettingController::class, "reports"])->name("reports");
// });



