<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

use function Flasher\Toastr\Prime\toastr;

class UserController extends Controller
{
    public function login(Request $request) {
        return view('components.auth.login');
    }

    public function signup(Request $request) {
        return view('components.auth.signup');
    }

    // Store a new user
    public function store(){
        //Validation
        $validated = request()->validate([
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', Password::min(6)->letters()->numbers(), 'confirmed'],
        ]);



        // Create the user
        $user = User::create($validated);

        // Log the user in
        Auth::login($user);
        // Toast success message and redirect
        flash()->success('Account created successfully.');
        return redirect('/');
    }

    // Authenticate and log in the user
    public function loginUser() {
        //Validation
        $validated = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Remember me functionality
        $remember = request()->has('remember') ? true : false;

        // Sign in the user
        if(Auth::attempt($validated, $remember)) {
            request()->session()->regenerate();

            flash()->success('Logged in successfully.');

            return redirect()->intended('/');
        }

        flash()->error('Login failed. Please check your credentials and try again.');

        return redirect('/login')->withErrors([
            'email' => 'The provided email or password is incorrect.',
        ])->onlyInput('email');
    }

    // Log out the user
    public function logout() {
        Auth::logout();

        flash()->success('Logged out successfully.');

        return redirect('/');
    }

    // Show user profile
    public function showProfile() {
        if (Auth::guest()) {
            flash()->error('You must be logged in to access the profile page.');
            return redirect('/login');
        }

        return view('components.user.profile');
    }

    // Show user's bookings
    public function showBookings(User $user) {
        if (Auth::guest()) {
            flash()->error('You must be logged in to access the bookings page.');
            return redirect('/login');
        }

        // Get upcoming bookings for the user
        $upcomingBookings = Booking::where([
            ['user_id', Auth()->user()->id],
            ['start_at', '>=', now()],
            ])->orderBy('start_at')
            ->paginate(5);

        // Get past bookings for the user
        $historyBookings = Booking::where([
            ['user_id', Auth()->user()->id],
            ['start_at', '<', now()],
            ])->orderBy('start_at', 'desc')
            ->paginate(5);

        return view('components.user.bookings', compact('upcomingBookings', 'historyBookings'));
    }

    // ******************
    // Admin Functions //
    // ******************
    // Assign role to user
    public function attach(User $user)
    {
        $user->roles()->attach(request('role'));

        toastr('Role attached successfully!', 'success');

        return redirect()->route('admin.index');
    }

    // Detach role from user
    public function detach(User $user)
    {
        $user->roles()->detach(request('role'));

        toastr('Role detached successfully!', 'success');

        return redirect()->route('admin.index');
    }

    // Show user details
    public function show(User $user)
    {
        return view('components.admin.users.show', compact('user'));
    }

}
