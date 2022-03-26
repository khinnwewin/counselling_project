<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Model\Counseller;
class CounsellerLoginController extends Controller
{
    use AuthenticatesUsers;

 

    protected $guard = 'counseller';

 

    /**

     * Where to redirect users after login.

     *

     * @var string

     */

    protected $redirectTo = '/home';

 

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('guest')->except('logout');

    }

 

    public function showLoginForm()

    {

        return view('auth.consellerLogin');

    }

 

    public function login(Request $request)

    {

        if (auth()->guard('counseller')->attempt(['email' => $request->email, 'password' => $request->password])) {

            dd(auth()->guard('counseller')->user());

        }

 

        return back()->withErrors(['email' => 'Email or password are wrong.']);

    }
}
