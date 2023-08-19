<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('register');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            //cek status user
            // dd(Auth::user()->role_id);

            if (Auth::user()->status != 'active') {
                //untuk admin dirubah setiap masuk menjadi active
                if (Auth::user()->role_id == 1) {
                    Auth::user()->status = 'active';
                    return redirect('dashboard');
                }
                //Session dipaksa logout, karena inactive
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                //pesan, login not active account
                Session::flash('status', 'failed');
                Session::flash('message', 'Your account is not active yet, please contact admin');
                return redirect('/login');
            }

            //redirect ketika role sesuai
            $request->session()->regenerate();
            if (Auth::user()->role_id == 1) {
                return redirect('dashboard');
            }
            if (Auth::user()->role_id == 2) {
                return redirect('profile');
            }
        }
        //pesan, login tanpa register
        Session::flash('status', 'failed');
        Session::flash('message', 'login invalid');
        return redirect('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }

    public function registerProcces(Request $request)
    {

        $validated = $request->validate([
            'username' => 'required|unique:users|max:255',
            'password' => 'required|max:255',
            'phone' => 'max:255',
            'addres' => 'required',
        ]);

        $request['password'] = Hash::make($request->password);
        $user = User::create($request->all());
        //pesan jika register berhasil
        Session::flash('status', 'success');
        Session::flash('message', 'Register success. Wait Admin for approval');
        return redirect('register');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function edit(Auth $auth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auth $auth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auth  $auth
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auth $auth)
    {
        //
    }
}
