<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Honeypot check
        if ($request->filled('website')) {
            return redirect()->route('register');
        }

        $request->validate([
            'first_name' => ['required', 'string', 'max:20'],
            'last_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'string', 'max:20'],
            'company_name' => ['required', 'string', 'max:100'],
            'company_ic' => ['required', 'string', 'max:20'],
            'company_dic' => ['nullable', 'string', 'max:20'],
            'street' => ['required', 'string', 'max:100'],
            'city' => ['required', 'string', 'max:100'],
            'zip' => ['required', 'string', 'max:7'],
            'country' => ['required', 'string', 'max:100'],
            'note' => ['nullable', 'string'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'terms_accepted' => ['accepted'],
        ]);

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
