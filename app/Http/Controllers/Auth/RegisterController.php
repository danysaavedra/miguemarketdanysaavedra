<?php

namespace App\Http\Controllers\Auth;
use App\Role;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;


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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data,[
            'name' => ['required', 'string', 'max:255'],

            'lastname' => ['required', 'string', 'max:255'],

            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],

            'domicilio' => ['required', 'string', 'max:255'],

            'nro' => ['required', 'string', 'max:255'],

            'dto' => ['nullable','string', 'max:255'],

            'piso' => ['nullable', 'string', 'max:255'],

            'localidad' => ['required', 'string', 'max:255'],

            'partido' => ['required', 'string', 'max:255'],

            'calle1' => ['nullable', 'string', 'max:255'],

            'calle2' => ['nullable', 'string', 'max:255'],

            'tel1' => ['required', 'string', 'max:255'],

            'tel2' => ['nullable', 'string', 'max:255'],


            'password' => ['required', 'string', 'min:8', 'confirmed'],
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

       //dd($data);
       $nombreArchivo = '../../img\barbijo.png';
       //debemos tener en cuenta que si hay un archivo, lo subimos y le guardamos la ruta
       if(isset($data['foto'])){
         //al archivo que subi lo voy a guardar en el filesystem de laravel
         $rutaDelArchivo = $data['foto']->store('public');
         //le saco solo el nombre
         $nombreArchivo = basename($rutaDelArchivo);
       }
            $data['confirmation_code'] = str_random(25);

             $user = User::create([
             'name' => $data['name'],
             'lastname' => $data['lastname'],
             'email' => $data['email'],
             'domicilio' => $data['domicilio'],
             'nro' => $data['nro'],
            // 'dto' => $data['dto'],
             //'piso' => $data['piso'],
             'localidad' => $data['localidad'],
             'partido' => $data['partido'],
             //'calle1' => $data['calle1'],
             //'calle2' => $data['calle2'],
             'tel1' => $data['tel1'],
             //'tel2' => $data['tel2'],
             'confirmation_code' =>$data['confirmation_code'],
             'password' => Hash::make($data['password']),
             'foto' => $nombreArchivo,
         ]);

         $user->roles()->attach(Role::where('name', 'user')->first());
        
         return $user;
     }

/* public function verify($code){
    $user = User::where('confirmation_code', $code)->first();
    if(!$user){
        return redirect('/');
    }
    $user->confirmed = true;
    $user->confirmation_code = null;
    $user->save();

    return redirect('/login')->with($mensaje,'Correo confirmado correctamente, puede Logearse');
} */

}
