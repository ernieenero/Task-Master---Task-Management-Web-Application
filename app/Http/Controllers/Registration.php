<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class Registration extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('appLayout/home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('authentications.signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>['required'],
            'password'=>['required'],
            'email'=>['unique:users', 'required']
        ]);

        $data = $request->all();

        unset($data['submit']);
        

        $user = User::create([
            'name' => $data['name'],
            'password' => Hash::make($data['password']),
            'email' =>  $data['email'],
        ]);

        event(new Registered($user));

        Auth::login($user);
        return redirect(route('user-home', $user->user_id));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        
        return view('appLayout/user-profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('appLayout/update-profile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $validated = $request->validate([
            'name'=>['required'],
            'email'=>['required']
        ]);
        $user = User::find($id);
        $data = $request->all();

        $subok = User::where('user_id', '!=', $id)->where('email','=', $data['email'])->first();
        if($subok){
            return redirect()->route('edit', ['id' => $id])->withErrors(['edit error'=>'Must be unique Email']);
        }
        $user->name = $data['name'];
        $user->email = $data['email'];

        $user->save();

        return redirect()->route('profile', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function about()
    {
        return view('appLayout/about');
    }

    public function us()
    {
        return view('appLayout/us');
    }

    public function login()
    {
        return view('authentications/login');
    }

    public function signup()
    {
        return view('authentications/signup');
    }

}
