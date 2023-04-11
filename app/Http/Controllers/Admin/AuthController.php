<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      return view('admin.auth.login');
    }


    // public function authenticate(Request $request)
    // {
    //         $request->validate([
    //         'email' => 'required',
    //         'password' => 'required',
    //         ]);
    //         $credentials = $request->only('email', 'password')->where(['roles','SuperAdmin']);
    //         if (auth()->guard('web')->attempt($credentials)){
    //             return redirect()->route('admin.dashboard');
    //         }
    //         return redirect()->route('login')->withError('Login details are not valid');

    // }
    // public function authenticate(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);

    //     $credentials = $request->only('email', 'password');

    //     $user = User::where('email', $credentials['email'])->whereHas('roles', function ($query) {
    //         $query->where('name', 'SuperAdmin');
    //     })->first();

    //     if ($user && auth()->guard('web')->attempt($credentials)) {
    //         return redirect()->route('admin.dashboard');
    //     }

    //     return redirect()->route('login')->withError('Login details are not valid');
    // }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (auth()->guard('web')->attempt($credentials)) {
            $user = auth()->guard('web')->user();
            if ($user->roles == 'SuperAdmin') {
                return redirect()->route('admin.dashboard');
            } else {
                Auth::logout();
                return redirect()->route('login')->withErrors(['Access Denied']);
            }
        }

        return redirect()->route('login')->withErrors(['Invalid login credentials']);
    }


    public function signOut() {

        Session::flush();
       Auth::logout();
        return Redirect('admin/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //19.20993208239872, 72.90712565080182
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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



}
