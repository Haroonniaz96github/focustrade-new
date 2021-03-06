<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\AdminForgotPasswordController;
use App\Http\Controllers\Auth\AdminResetPasswordController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\FinanceController;

Route::get('/clear',function(){
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    dd("cache cleared");
});

Route::get('/run', function () {
    for ($i = 1; $i <= 60; $i++) {
        $user = \App\User::find($i);
        if($user!=null &&  $user->sponser_id==="FT001"){
            $user->sponser_id = 'FT0001';
            $user->save();
        }

    }
    dd("updated");
});

Auth::routes(['verify' => true]);

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('logout', [LoginController::class, 'logout']);
//Route::get('register', [Auth\RegisterController::class, 'reg']);


Route::group([
    'prefix'        => 'finance',
    'namespace'     => 'Finance'
], function ()
{   
    Route::get('/', [FinanceController::class, 'login'])->name('finance.login');
    Route::get('/login', [FinanceController::class, 'login'])->name('finance.login');
    Route::post('/finance-login', [FinanceController::class, 'loginSubmit'])->name('finance_login');
    Route::get('/dashboard', [FinanceController::class, 'index'])->name('finance.verify_users');
    Route::get('user/{id}', [FinanceController::class, 'viewSingle']);
    Route::Post('/update-user', [FinanceController::class, 'updateUser'])->name('update_user');
    
    Route::get('/finance_logout',function(){
        if(session()->has('user')){
            session()->pull('user');
        }
        return redirect('/finance');
    });
});


Route::group([
    'middleware'    => ['auth'],
    'prefix'        => 'user',
    'namespace'     => 'User'
], function ()
{
    Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/profile-setting', [UserController::class, 'profileSetting'])->name('user.profile');
    Route::post('/profile-setting', [UserController::class, 'updateProfile'])->name('user.profile');
    Route::get('/my-account', [UserController::class, 'myAccount'])->name('my_account');
    Route::get('/change-password', [UserController::class, 'changePassword'])->name('change_password');
    Route::post('/change-password', [UserController::class, 'updatePassword'])->name('change_password');
    Route::get('/deposit-fund', [UserController::class, 'depositFund'])->name('deposit_fund');
    Route::post('/deposit-fund', [UserController::class, 'updateDepositFund']);
    Route::get('/deposit-usdt', [UserController::class, 'depositUsdt'])->name('deposit_usdt');
    Route::post('/deposit-usdt', [UserController::class, 'updateDepositUsdt']);
    Route::get('/payment-request', [UserController::class, 'paymentRequest'])->name('payment_request');
    Route::post('/payment-request', [UserController::class, 'submitPaymentRequest']);
    Route::get('/investment-plans', [UserController::class, 'investmentPlans'])->name('investment_plans');
    Route::get('/cache-clear', [UserController::class, 'configCache'])->name('user.cache_clear');

    Route::get('/notifications', [UserController::class, 'notifications'])->name('user.notifications');
});

Route::group([
    'prefix'        => 'admin',
    'namespace'     => 'Admin'
], function () {
    Route::get('/login',  [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

    // Password reset routes
    Route::post('/password/email', [AdminForgotPasswordController::class, 'sendResetLinkEmail'])->name('admin.password.email');
    Route::get('/password/reset', [AdminForgotPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');
    Route::post('/password/reset', [AdminResetPasswordController::class, 'reset'])->name('admin.password.update');
    Route::get('/password/reset/{token}', [AdminResetPasswordController::class, 'showResetForm'])->name('admin.password.reset');
});
Route::group([
    'middleware'    => ['auth:admin'],
    'prefix'        => 'admin',
    'namespace'     => 'Admin'
], function ()
{
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/profile',  [AdminController::class, 'edit'])->name('admin-profile');
    Route::post('/admin-update',  [AdminController::class, 'update'])->name('admin-update');


    //Setting Routes
    Route::resource('/setting', 'SettingController');
    Route::get('/cache-clear', [AdminController::class,'configCache'])->name('admin.cache_clear');

    //User Routes
    Route::resource('/users', 'UsersController');
    Route::get('users/edit/{id}', [UsersController::class,'edit'])->name('admin-edit');
    Route::post('get-users',  [UsersController::class,'getUsers'])->name('admin.getUsers');
    Route::post('get-user', [UsersController::class,'userDetail'])->name('admin.getUser');
    Route::get('users/delete/{id}',  [UsersController::class,'destroy'])->name('user-delete');
    Route::post('delete-selected-users',  [UsersController::class,'DeleteSelectedUsers'])->name('delete-selected-users');
    Route::get('edit-profile/{id}',  [UsersController::class,'show'])->name('edit-profile');
    Route::post('users/deposit/{id}', [UsersController::class,'updateDeposit'])->name('admin-deposit');
    Route::post('users/payout/{id}', [UsersController::class,'updatePayouts'])->name('admin-payout');
    Route::post('users/refferal/{id}', [UsersController::class,'updateRefferal'])->name('admin-refferal');
    Route::post('users/interest/{id}', [UsersController::class,'updateInterest'])->name('admin-interest');
    Route::post('users/purchased-package/{id}', [UsersController::class,'updatePurchasedPackage'])->name('purchased-package');
    Route::post('users/total-team/{id}', [UsersController::class,'updateTotalTeam'])->name('total-team');

    //User Routes
    Route::resource('/messages', 'MessageController');
    Route::get('messages/edit/{id}', [MessageController::class,'edit'])->name('admin.edit_message');
    Route::post('get-messages',  [MessageController::class,'getMessages'])->name('admin.getMessages');
    Route::post('get-message', [MessageController::class,'messageDetail'])->name('admin.getMessage');
    Route::get('messages/delete/{id}',  [MessageController::class,'destroy'])->name('admin.deleteMessage');
    Route::post('delete-selected-messages',  [MessageController::class,'deleteSelectedMessages'])->name('admin.deleteSelectedMessages');
});

