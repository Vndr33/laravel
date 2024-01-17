<?php

namespace App\Http\Controllers\Auth;

use App\Models\Articles;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginRegisterController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:200',
            'email' => 'required|email|max:200',
            'password' => 'required|min:4|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('dashboard')
            ->withSuccess('You have successfully registered & logged in!');

    }
    public function register()
    {
        return view('auth.register');
    }
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard')
                ->withSuccess('You have successfully logged in!');
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match in our records.',
        ])->onlyInput('email');



    }

    public function dashboard()
    {
        if (Auth::check()) {
            $articles = Articles::all();
            $data['articles'] = $articles;
            if (Auth::user()->email === 'admin@admin.com') {
                $data['role'] = 'admin';
            }
            else
            {
                 $data['role'] = 'user';
            }

            return view('auth.dashboard', $data);
        }

        return redirect()->route('login')
            ->withErrors(['email' => 'Failed to login!']);
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('You have logged out successfully!');
        ;
    }

    public function valideaza(Request $request)
    {
        if (Auth::user()->email === 'admin@admin.com') {
            $data['role'] = 'admin';
        } else { 
            $data['role'] = 'user';
        }
        $id = $request->input('articolId');
        Articles::updateArticle(['id'=>$id,"validate"=>1]);
        $data['articles'] = Articles::all();
        return redirect()->route('dashboard');
    }
    public function createArticle(Request $request)
    {
     Articles::insertArticle([
        'title' => $request->title,
        'description' => $request->description,
        'author' => $request->author,
        'creationdate' => date('y-m-d h:i:s'),
        'validate' => 0,
        'category' => $request->category
    ]);
     
     return redirect()->route('dashboard');
   }
}
