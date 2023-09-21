<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        $validator = Validator::make($data, [
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['nullable', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone'    => ['required', 'numeric', 'regex:/^([0-9]{11})$/'],
            'address'  => ['required', 'string', 'max:255']
        ]);

        // $validator->messages($this->messages());

        // return $validator;

        $validator->messages([
            'name.required'      => 'الرجاء إدخال اسمك.',
            'name.string'        => 'يجب أن يكون اسمك نصًا.',
            'name.max'           => 'يجب أن لا يزيد طول اسمك عن 255 حرفًا.',
            'email.nullable'     => 'البريد الإلكتروني اختياري.',
            'email.string'       => 'يجب أن يكون بريدك الإلكتروني نصًا.',
            'email.email'        => 'يجب أن يكون بريدك الإلكتروني عنوان بريد إلكتروني صالحًا.',
            'email.max'          => 'يجب أن لا يزيد طول بريدك الإلكتروني عن 255 حرفًا.',
            'email.unique'       => 'عنوان البريد الإلكتروني هذا مأخوذ بالفعل.',
            'password.required'  => 'الرجاء إدخال كلمة مرور.',
            'password.string'    => 'يجب أن تكون كلمة مرورك نصًا.',
            'password.min'       => 'يجب أن لا تقل كلمة المرور عن 8 أحرف.',
            'password.confirmed' => 'تأكيد كلمة المرور غير متطابق.',
            'phone.required'     => 'الرجاء إدخال رقم هاتفك.',
            // 'phone.regex'        => 'يجب أن يكون رقم هاتفك رقم هاتف صالحًا.',
            'phone.numeric'      => 'يجب أن يكون حقل الهاتف رقمًا.',
            'phone.min'          => 'يجب أن لا يقل طول رقم هاتفك عن 11 رقمًا.',
            'phone.max'          => 'يجب ألا يزيد طول حقل الهاتف عن 11 رقمًا.',
            'address.required'   => 'الرجاء إدخال عنوانك.',
            'address.string'     => 'يجب أن يكون عنوانك نصًا.',
            'address.max'        => 'يجب أن لا يزيد طول عنوانك عن 255 حرفًا.',
        ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator);
        // }
        return $validator;


    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
            'phone'    => $data['phone'],
            'address'  => $data['address']
        ]);
    }
}
