<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
class Authentication extends Controller
{
   
    public function create()
    {
        return view('authentications.login');
    }


    public function store(Request $request)
    {
        // $request->authenticate();

        // $request->session()->regenerate();
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $user = $credentials['email'];
        $user = User::where('email', $user)->where('account_status', 'Active')->first();
        if($user){
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
    
                return redirect(route('user-home', $user->user_id));
            }
        }
        return redirect()->route('login.create')->withErrors(['login_error'=>'Incorrect Email or Password']);
        
    }
        

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function deactivate(Request $request, $id){
        $user = User::find($id);

        $user->account_status = "Deactivate";

        $user->save();
        
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');

    }
}
