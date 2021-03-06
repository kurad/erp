<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Master;
use App\Models\Champion;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
        $this->middleware('guest:master');
        $this->middleware('guest:admin');
        $this->middleware('guest:champion');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function showMasterRegisterForm()
    {
        return view('auth.register', ['url' => 'master']);
    }


    public function showChampionRegisterForm()
    {
        return view('auth.register', ['url' => 'champion']);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' =>2,
            'password' => Hash::make($data['password']),
        ]);
    }


    protected function createMaster(Request $request)
    {
        $this->validator($request->all())->validate();
        Master::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login/master');
    }

    protected function createChampion(Request $request)
    {
        $this->validator($request->all())->validate();
        /*$champion = new Champion();
        $champion->name = $request->name;
        $champion->email = $request->email;
        $champion->password = Hash::make($request->email);
        $champion->save();*/

        Champion::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login/champion');
    }
}
