<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Check user role after authentication
            $user = Auth::user();

            if ($user->role === 'admin') {
                // Redirect to admin dashboard
                return redirect()->route('admin.dashboard');
            } else {
                // Redirect to regular user page (you can change this route as needed)
                return redirect()->route('/');
            }
        }
        $errors = [];
        if (!Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            // Jika email yang salah
            $errors['email'] = 'Email atau password yang anda masukkan salah.';
        } else {
            // Jika password yang salah
            $errors['password'] = 'Password yang anda masukkan tidak sesuai.';
        }

        return back()->withErrors($errors);
    }

    public function loginShop()
    {
        return view('auth.login-shop');
    }

    public function authenticateShop(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Check user role after authentication
            $user = Auth::user();

            if ($user->role === 'admin') {
                // Redirect to admin dashboard
                return redirect()->route('admin.dashboard');
            } else {
                // Redirect to regular user page (you can change this route as needed)
                return redirect()->route('shop');
            }
        }
        $errors = [];
        if (!Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            // Jika email yang salah
            $errors['email'] = 'Email atau password yang anda masukkan salah.';
        } else {
            // Jika password yang salah
            $errors['password'] = 'Password yang anda masukkan tidak sesuai.';
        }

        return back()->withErrors($errors);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'no_whatsapp' => 'required',
            'confirm-password' => 'required|same:password'
        ]);
        $data = $request->except('confirm-password', 'password');
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);

        Auth::login($user);

        return redirect(route('/', absolute: false));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('/')->with('success', 'Anda telah logout.');
    }

    
}