<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;
use Illuminate\Support\Facades\Auth;
class CustomerController extends Controller
{
    public function showForm()
    {
        return view('user.auth.index');
    }
    public function store(Request $request)
    {
        // Validate the incoming request (excluding username since it's auto-generated)
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:10',
            'pin' => 'required|string|max:6',
            'owner' => 'required|string|max:255',
            'balance' => 'required|numeric|min:0',
            'role' => 'required|string|in:Admin,User,Retailer,Distributor',
        ]);

        // Generate a unique username with the format 'PMLT' + 6 random digits
        $username = $this->generateUsername();

        // Store the user in the database
        CustomerModel::create([
            'name' => $request->name,
            'username' => $username, // Use auto-generated username
            'email' => $request->email,
            'phone' => $request->phone,
            'pin' => $request->pin,
            'owner' => $request->owner,
            'balance' => $request->balance,
            'role' => $request->role,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'User added successfully with username: ' . $username);
        
    }

    /**
     * Generate a unique username with the format 'PMLT' + 6 random digits
     *
     * @return string
     */
    // protected function generateUsername()
    // {
    //     $prefix = 'PMLT';
    //     $randomNumber = mt_rand(100000, 999999); // Generate a 6-digit random number
    //     return $prefix . $randomNumber;
    // }
    protected function generateUsername()
{
    $prefix = 'PMLT';
    do {
        $randomNumber = mt_rand(100000, 999999); // Generate a 6-digit random number
        $username = $prefix . $randomNumber;
    } while (CustomerModel::where('username', $username)->exists()); // Check for uniqueness

    return $username;
}



public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Retrieve the customer by email
    $customer = CustomerModel::where('email', $request->email)->first();

    // Check if customer exists and the "password" matches the username
    if ($customer && $customer->username === $request->password) {
        // Log the customer in using the Auth facade and custom guard
        Auth::guard('customer')->login($customer);

        // Redirect to customer dashboard or intended page
        return redirect()->intended('customer/dashboard');
    }

    return redirect()->back()->withErrors(['email' => 'Invalid login credentials.']);
}

public function logout()
{
    Auth::guard('customer')->logout();
    return redirect()->route('customer.login');
}


public function verifyPin(Request $request)
{
    $request->validate([
        'pin' => 'required|string',
    ]);

    $customer = Auth::guard('customer')->user();

    // Verify the entered PIN matches the customer's stored PIN
    if ($customer->pin === $request->pin) {
        return redirect()->intended('customer/dashboard');  // Redirect to dashboard
    }

    // If PIN is incorrect
    return redirect()->back()->withErrors(['pin' => 'Invalid PIN entered.']);
}

}
