<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showCustomerRegistrationForm()
    {
        return view('auth.register_customer');
    }

    public function showSellerRegistrationForm()
    {
        return view('auth.register_seller');
    }

    public function registerCustomer(Request $request)
    {
        $this->validator($request->all())->validate();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'customer',
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }

    public function registerSeller(Request $request)
    {
        $this->validator($request->all())->validate();

        User::create([
            'name' => $request->company_name,
            'email' => $request->email,
            'country' => $request->country,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'seller',
        ]);

        return redirect()->route('login')->with('success', 'Seller registration submitted. Please log in.');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['sometimes', 'string', 'max:255'],
            'company_name' => ['sometimes', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'country' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }
}

