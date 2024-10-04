<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\paymentGatewayController;
use App\Http\Controllers\aepsController;


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
    return view('welcome');
});
// user Auth

Route::get('/customer/login', [CustomerController::class, 'showForm'])->name('customer.login');
Route::post('/verify-pin', [CustomerController::class, 'verifyPin'])->name('verify.pin');

    
Route::post('/customer/loginF', [CustomerController::class, 'login'])->name('customer.loginF');
Route::middleware('auth.customer')->group(function () {
    
    // Route::get('customer/dashboard', function () {
    //     return view('customer.dashboard');
    // })->name('customer.dashboard');

   
    
    Route::get('customer/dashboard',function(){
        return view('user/home-page');
    })->name('customer/dashboard');
    
    // Route::get('/user',function(){
    //     return view('user.auth.index');
    // })->name('customer.login1');
    
    // Route::get('/customer/login', [CustomerController::class, 'showForm'])->name('customer.login');
    
    // Route::post('/customer/loginF', [CustomerController::class, 'login'])->name('customer.loginF');
    Route::get('/coustomer.logout', [CustomerController::class, 'logout'])->name('coustomer.logout');
    
    Route::get('/user/fund-transfer/bank-account',function(){
        return view('user/fund-transfer/bank-account');
    })->name('/user/fund-transfer/bank-account');
    
    Route::get('/user/wallet/index',function(){
        return view('user/wallet.index');
    })->name('/user/wallet/index');
    // AEPS
    
    Route::get('/cash-withdrawal', [aepsController::class, 'showForm'])->name('cash.withdrawal.form');
    // Route::post('/cash-withdrawal', [aepsController::class, 'makeWithdrawal'])->name('cash.withdrawal');
    Route::get('/aeps/balance-inquiry', [aepsController::class, 'balanceInquiry_show'])->name('balance.enquiry-form');
    Route::post('/aeps/balance-inquiry', [aepsController::class, 'balanceInquiry'])->name('balance.enquiry');
    Route::post('/aeps/cash-withdrawal', [aepsController::class, 'cashWithdrawal'])->name('cash.withdrawal');
    
    Route::get('/admin/AEPS/balance-enquiry',function(){
        return view('user/AEPS.balance-enquiry');
    });
    Route::get('/user/AEPS/cash-withdrawal',function(){
        return view('user/AEPS.cash-withdrawal');
    })->name('/user/AEPS/cash-withdrawal');
    
    Route::get('/admin/AEPS/mini-statement',function(){
        return view('user/AEPS.mini-statement');
    });
    
    Route::get('/user/money-transfer/money-transfer',function(){
        return view('user/money-transfer.money-transfer');
    })->name('/user/money-transfer/money-transfer');
    // bbps
    Route::get('/user/bbps/bbps-services',function(){
        return view('user/bbps.index');
    })->name('/user/bbps/bbps-services');
    
    // mobile
    Route::get('/user/dth/dth-recharge',function(){
        return view('user/dth.index');
    })->name('/user/dth/dth-recharge');
    
    // DTH
    Route::get('/user/mobile/mobile-recharge',function(){
        return view('user/mobile.index');
    })->name('/user/mobile/mobile-recharge');
    
    
    // service
    Route::get('/user/services/services',function(){
        return view('user/services.services');
    })->name('/user/services/services');
    //commissiion pALne
    Route::get('/user/commission-plane',function(){
        return view('user.commission-plan');
    })->name('/user/commission-plane');
    
    Route::get('/user/AEPS/aeps-statement',function(){
        return view('user/AEPS.aeps-statement');
    })->name('/user/AEPS/aeps-statement');
    
    Route::get('/admin/account-opening',function(){
        return view('user/account-opening.index');
    });
    
    Route::get('/admin/services',function(){
        return view('admin/services.services');
    });
    
    // user-statement
    Route::get('/user/statement/account-stmt',function(){
        return view('user/statements.account-stmt');
    })->name('statement/account-stmt');
    
    Route::get('/user/statement/fund-report',function(){
        return view('user/statements.fund-report');
    })->name('statement/fund-report');
    
    Route::get('/user/statement/fund-transfer-report',function(){
        return view('user/statements.fund-transfer-report');
    })->name('statement/fund-transfer-report');
    
    Route::get('/user/statement/money-transfer-report',function(){
        return view('user/statements.money-transfer-report');
    })->name('statement/money-transfer-report');
    
    Route::get('/user/statement/wallet-transfer-report',function(){
        return view('user/statements.wallet-transfer-report');
    })->name('statement/wallet-transfer-report');
    
    
    //payment Getway 
    // Route::get('/user/fund-transfer/payment-getway',function(){
    //     return view('user/fund-transfer.payment-gateway');
    // })->name('/user/fund-transfer/payment-getway');
    
    Route::post('/process-payment', [paymentGatewayController::class, 'processPayment'])->name('process.payment');
    Route::get('/redirect-page', [paymentGatewayController::class, 'paymentRedirect'])->name('payment.redirect');
    Route::get('/process-payment-gateway', [paymentGatewayController::class, 'index'])->name('process-payment-gateway');
    
    Route::get('/payment-response', [paymentGatewayController::class, 'checkOrderStatus'])->name('payment.response');
    
    
    

});


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('customer/dashboard',function(){
//     return view('user/home-page');
// })->name('customer/dashboard');

// Route::get('/user',function(){
//     return view('user.auth.index');
// });


// Route::post('/customer/login', [CustomerController::class, 'login'])->name('customer.login');

// Route::get('/user/fund-transfer/bank-account',function(){
//     return view('user/fund-transfer/bank-account');
// })->name('/user/fund-transfer/bank-account');

// Route::get('/user/wallet/index',function(){
//     return view('user/wallet.index');
// })->name('/user/wallet/index');
// // AEPS

// Route::get('/cash-withdrawal', [aepsController::class, 'showForm'])->name('cash.withdrawal.form');
// // Route::post('/cash-withdrawal', [aepsController::class, 'makeWithdrawal'])->name('cash.withdrawal');
// Route::get('/aeps/balance-inquiry', [aepsController::class, 'balanceInquiry_show'])->name('balance.enquiry-form');
// Route::post('/aeps/balance-inquiry', [aepsController::class, 'balanceInquiry'])->name('balance.enquiry');
// Route::post('/aeps/cash-withdrawal', [aepsController::class, 'cashWithdrawal'])->name('cash.withdrawal');

// Route::get('/admin/AEPS/balance-enquiry',function(){
//     return view('user/AEPS.balance-enquiry');
// });
// Route::get('/user/AEPS/cash-withdrawal',function(){
//     return view('user/AEPS.cash-withdrawal');
// })->name('/user/AEPS/cash-withdrawal');

// Route::get('/admin/AEPS/mini-statement',function(){
//     return view('user/AEPS.mini-statement');
// });

// Route::get('/user/money-transfer/money-transfer',function(){
//     return view('user/money-transfer.money-transfer');
// })->name('/user/money-transfer/money-transfer');
// // bbps
// Route::get('/user/bbps/bbps-services',function(){
//     return view('user/bbps.index');
// })->name('/user/bbps/bbps-services');

// // mobile
// Route::get('/user/dth/dth-recharge',function(){
//     return view('user/dth.index');
// })->name('/user/dth/dth-recharge');

// // DTH
// Route::get('/user/mobile/mobile-recharge',function(){
//     return view('user/mobile.index');
// })->name('/user/mobile/mobile-recharge');


// // service
// Route::get('/user/services/services',function(){
//     return view('user/services.services');
// })->name('/user/services/services');
// //commissiion pALne
// Route::get('/user/commission-plane',function(){
//     return view('user.commission-plan');
// })->name('/user/commission-plane');

// Route::get('/user/AEPS/aeps-statement',function(){
//     return view('user/AEPS.aeps-statement');
// })->name('/user/AEPS/aeps-statement');

// Route::get('/admin/account-opening',function(){
//     return view('user/account-opening.index');
// });

// Route::get('/admin/services',function(){
//     return view('admin/services.services');
// });

// // user-statement
// Route::get('/user/statement/account-stmt',function(){
//     return view('user/statements.account-stmt');
// })->name('statement/account-stmt');

// Route::get('/user/statement/fund-report',function(){
//     return view('user/statements.fund-report');
// })->name('statement/fund-report');

// Route::get('/user/statement/fund-transfer-report',function(){
//     return view('user/statements.fund-transfer-report');
// })->name('statement/fund-transfer-report');

// Route::get('/user/statement/money-transfer-report',function(){
//     return view('user/statements.money-transfer-report');
// })->name('statement/money-transfer-report');

// Route::get('/user/statement/wallet-transfer-report',function(){
//     return view('user/statements.wallet-transfer-report');
// })->name('statement/wallet-transfer-report');


// //payment Getway 
// // Route::get('/user/fund-transfer/payment-getway',function(){
// //     return view('user/fund-transfer.payment-gateway');
// // })->name('/user/fund-transfer/payment-getway');

// Route::post('/process-payment', [paymentGatewayController::class, 'processPayment'])->name('process.payment');
// Route::get('/redirect-page', [paymentGatewayController::class, 'paymentRedirect'])->name('payment.redirect');
// Route::get('/process-payment-gateway', [paymentGatewayController::class, 'index'])->name('process-payment-gateway');

// Route::get('/payment-response', [paymentGatewayController::class, 'checkOrderStatus'])->name('payment.response');



//Admin
Route::get('login', [AuthController::class, 'showLoginForm'])->name('admin.login');

Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('admin.logout',[AuthController::class,'logout'])->name('admin.logout');


//Route::get('otp', [AuthController::class, 'showOtpForm'])->name('otp.form');

Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::get('/admin/dashboard', [AuthController::class, 'index'])->name('admin.dashboard');

    Route::post('/admin/users', [CustomerController::class, 'store'])->name('admin.users.store');


    Route::get('/admin/user-list',function(){
        return view('admin/user-details.user-list');
    })->name('admin/user-list');
    
    
    Route::get('/admin/user-list-request',function(){
        return view('admin/user-details.user-request');
    })->name('admin/user-list-request');
    
    Route::get('/admin/user-add-from',function(){
        return view('admin/user-details.user-add');
    })->name('admin/user-add');
    
    Route::get('/admin/kyc-list',function(){
        return view('admin/kyc.kyc-all-list');
    })->name('admin/kyc-list');
    
    Route::get('/admin/kyc-form',function(){
        return view('admin/kyc.kyc-form');
    })->name('admin/kyc-form');
    
    
    
    Route::get('/admin/wallet-credit',function(){
        return view('admin/wallet.creditDebit');
    })->name('admin/wallet/credit-debit');
    
    Route::get('/admin/wallet-credit-lock-release',function(){
        return view('admin/wallet.lock&release');
    })->name('admin/wallet/credit-lock');
    
    Route::get('/admin/wallet-credit-lock-fund',function(){
        return view('admin/wallet.fund-request');
    })->name('admin/wallet/fund-request');
    
    
    Route::get('/admin/reports/aeps',function(){
        return view('admin/reports.aeps');
    })->name('admin/reports/aeps');
    
    Route::get('/admin/reports/credit-card-bill',function(){
        return view('admin/reports.credit-card-bill-payment');
    })->name('admin/reports/credit-card-bill-payment');
    
    
    Route::get('/admin/reports/dmt',function(){
        return view('admin/reports.dmt');
    })->name('admin/reports/dmt-payment');
    
    Route::get('/admin/reports/dth-recharge',function(){
        return view('admin/reports.dth-recharge');
    })->name('admin/reports/dth-recharge'); 
    
    Route::get('/admin/reports/ledger',function(){
        return view('admin/reports.ledger');
    })->name('admin/reports/ledger');   
    
    Route::get('/admin/reports/fund-transfer',function(){
        return view('admin/reports.fund-transfer');
    })->name('admin/reports/fund-transfer');  
    
    Route::get('/admin/reports/mobile-recharge',function(){
        return view('admin/reports.mobile-recharge');
    })->name('admin/reports/mobile-recharge');
    
    Route::get('/admin/reports/wallet-transfer',function(){
        return view('admin/reports.wallet-transfer');
    })->name('admin/reports/wallet-transfer');

});



// Route::get('/dashboard',function(){
//     return view('admin/home-page');
// })->name('dashboard');


// Route::get('/admin1',function(){
//     return view('admin/auth.auth-log');
// })->name('admin1');




// Route::post('/admin/users', [CustomerController::class, 'store'])->name('admin.users.store');


// Route::get('/admin/user-list',function(){
//     return view('admin/user-details.user-list');
// })->name('admin/user-list');


// Route::get('/admin/user-list-request',function(){
//     return view('admin/user-details.user-request');
// })->name('admin/user-list-request');

// Route::get('/admin/user-add-from',function(){
//     return view('admin/user-details.user-add');
// })->name('admin/user-add');

// Route::get('/admin/kyc-list',function(){
//     return view('admin/kyc.kyc-all-list');
// })->name('admin/kyc-list');

// Route::get('/admin/kyc-form',function(){
//     return view('admin/kyc.kyc-form');
// })->name('admin/kyc-form');



// Route::get('/admin/wallet-credit',function(){
//     return view('admin/wallet.creditDebit');
// })->name('admin/wallet/credit-debit');

// Route::get('/admin/wallet-credit-lock-release',function(){
//     return view('admin/wallet.lock&release');
// })->name('admin/wallet/credit-lock');

// Route::get('/admin/wallet-credit-lock-fund',function(){
//     return view('admin/wallet.fund-request');
// })->name('admin/wallet/fund-request');


// Route::get('/admin/reports/aeps',function(){
//     return view('admin/reports.aeps');
// })->name('admin/reports/aeps');

// Route::get('/admin/reports/credit-card-bill',function(){
//     return view('admin/reports.credit-card-bill-payment');
// })->name('admin/reports/credit-card-bill-payment');


// Route::get('/admin/reports/dmt',function(){
//     return view('admin/reports.dmt');
// })->name('admin/reports/dmt-payment');

// Route::get('/admin/reports/dth-recharge',function(){
//     return view('admin/reports.dth-recharge');
// })->name('admin/reports/dth-recharge'); 

// Route::get('/admin/reports/ledger',function(){
//     return view('admin/reports.ledger');
// })->name('admin/reports/ledger');   

// Route::get('/admin/reports/fund-transfer',function(){
//     return view('admin/reports.fund-transfer');
// })->name('admin/reports/fund-transfer');  

// Route::get('/admin/reports/mobile-recharge',function(){
//     return view('admin/reports.mobile-recharge');
// })->name('admin/reports/mobile-recharge');

// Route::get('/admin/reports/wallet-transfer',function(){
//     return view('admin/reports.wallet-transfer');
// })->name('admin/reports/wallet-transfer');