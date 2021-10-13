<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo(){
        if(Auth()->user()->role==1){
            return route('master.dashboard');
        }
        elseif(Auth()->user()->role==2){
            return route('champion.dashboard');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:master')->except('logout');
        $this->middleware('guest:champion')->except('logout');
    }

    public function showMasterLoginForm()
    {
        return view('auth.login', ['url' => 'master']);
    }

    public function masterLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('master')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/master');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function showChampionLoginForm()
    {
        return view('auth.login', ['url' => 'champion']);
    }

    public function championLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('champion')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/champion');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
    
    public function login(Request $request){
        $input = $request->all();
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(auth()->attempt(array('email'=>$input['email'], 'password'=>$input['password']))){
            if(auth()->user()->role==1){
                return redirect()->route('master.dashboard');
            }
            elseif(auth()->user()->role==2){
                return redirect()->route('champion.dashboard');
            }

        }else{
            return redirect()->route('login')->with('error','Email and Password are wrong');
        }
    }
   

    public function logout(Request $request) {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/');
      }
}
