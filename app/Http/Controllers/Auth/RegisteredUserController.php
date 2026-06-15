<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }

    public function store(RegisterUserRequest $request): RedirectResponse
    {
        // Honeypot check
        if ($request->filled('website')) {
            return redirect()->route('register');
        }

        $user = User::create([
            'name' => $request->first_name.' '.$request->last_name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company_name' => $request->company_name,
            'company_ic' => $request->company_ic,
            'company_dic' => $request->company_dic,
            'street' => $request->street,
            'city' => $request->city,
            'zip' => $request->zip,
            'country' => $request->country,
            'note' => $request->note,
            'password' => Hash::make($request->password),
            'terms_accepted' => true,
            'newsletter' => $request->boolean('newsletter'),
        ]);

        event(new Registered($user));

        return redirect()->route('login');
    }
}
