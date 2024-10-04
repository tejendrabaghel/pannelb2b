<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin/auth.auth-log');
    }



    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // return $request;
        // die();
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Check if the user is an admin
            if ($user->role === 'admin') {
                return redirect()->intended('/admin/dashboard');  // Redirect to admin dashboard
            }

            return redirect()->intended('/user/dashboard');  // Redirect to user dashboard
        }

        return redirect()->back()->withErrors(['message' => 'Invalid credentials.']);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function index()
    {
        return view('admin/home-page');
    }
}



//     public function login(Request $request)
//     {
//         $request->validate([
//             'email' => 'required',
//             'password' => 'required',
//         ]);

// //dd($request);
//         if (Auth::attempt($request->only('email', 'password'))) {
//             $user = Auth::user();

//             if ($user->role == 'admin') {
//                 // Generate OTP
//                 $otp = rand(100000, 999999);
//                 Session::put('otp', $otp);

//                 // Send OTP to registered email
//                 Mail::raw("Your OTP is: $otp", function ($message) use ($user) {
//                     $message->to($user->email)
//                             ->subject('Admin OTP Verification');
//                 });

//                 return redirect()->route('otp.form');
//             }

//             return redirect()->route('dashboard');
//         }

//         return back()->withErrors(['email' => 'Invalid login credentials.']);
//     }
// }
