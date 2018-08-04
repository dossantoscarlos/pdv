<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Funcionario;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $funcionario = DB::table('users')->where('level','root')->first();
       if (isset($funcionario))
        {
            $this->middleware('auth');
        }else{
            $this->middleware('guest');
        }
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
            'matricula' => 'required|max:255|unique:funcionarios',
            'password' => 'required|string|min:6|confirmed',
            'level' => 'required|string|max:255',
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $funcionarios = DB::table('funcionarios')->where('matricula',$data['matricula'])->first();

        $createUser = DB::table('users')->insertGetId([
            'id_funcionario' => $funcionario->id,
            'password' => $data['password'],
            'level' => $data['level'],
        ]);
        return $createUser;
    }
}
