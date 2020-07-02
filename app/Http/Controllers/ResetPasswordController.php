<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Password Reset Controller
      |--------------------------------------------------------------------------
      |
      | This controller is responsible for handling password reset requests
      | and uses a simple trait to include this behavior. You're free to
      | explore this trait and override any methods you wish to tweak.
      |
     */

use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function index() {
        return view('changePassword');
    }

    public function update(Request $request) {
        $this->validate($request, ['old' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);
        if (Hash::check($request->old, Auth::user()->password)) {
            //Change the password
            $request->user()->fill(['password' => Hash::make($request->password)])->save();

            $request->session()->flash('success', 'Your password has been changed.');
            return back();
        } else {
            $request->session()->flash('failure', 'Your password has not been changed.');
            return back();
        }
    }

}
