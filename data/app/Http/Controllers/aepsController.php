<?php

namespace App\Http\Controllers;

use App\Models\aepsCashWithdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\AEPSService;

class aepsController extends Controller
{
    public function showForm()
    {
        return view('user.aeps.cash-withdrawal');
    }
     public function balanceInquiry_show()
     {
        return view('user.aeps.balance-enquiry');

     }

    protected $aepsService;

    public function __construct(AEPSService $aepsService)
    {
        $this->aepsService = $aepsService;
    }

    public function balanceInquiry(Request $request)
    {
        $aadhaarNumber = $request->input('aadhaar_number');
        $bankIIN = $request->input('bank_iin');

        $response = $this->aepsService->balanceInquiry($aadhaarNumber, $bankIIN);

        return response()->json($response);
    }

    public function cashWithdrawal(Request $request)
    {
        $aadhaarNumber = $request->input('aadhaar_number');
        $amount = $request->input('amount');
        $bankIIN = $request->input('bank_iin');

        $response = $this->aepsService->cashWithdrawal($aadhaarNumber, $amount, $bankIIN);

        return response()->json($response);
    }
}
