<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Professional;
use App\Models\Admin;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'contact_no' => 'required|max:15',
            'address' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'user_type' => 'required|in:professional,customer,admin',
        ]);
    
        $validatedData['password'] = Hash::make($validatedData['password']);
        $user = User::create($validatedData);

        // Check user type and redirect accordingly
        if ($request->user_type === 'professional') {
            // Optionally create a professional record
            Professional::create([
                'user_id' => $user->id,
                'account_status' => 'pending' // default status
            ]);
            return redirect()->route('complete_profile', ['user_id' => $user->id]);
        } elseif ($request->user_type === 'admin') {
            Admin::create(['user_id' => $user->id]);
            return redirect()->route('admin.dashboard');
        } else { // customer
            Customer::create(['user_id' => $user->id]);
            return redirect()->route('customer.dashboard');
        }
    }
}
