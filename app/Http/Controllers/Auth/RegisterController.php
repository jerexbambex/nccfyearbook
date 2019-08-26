<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Cloudder;

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
    protected $redirectTo = '/home';

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
        return Validator::make($data, [
            'surname' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'middlename' => ['required', 'string', 'max:255'],
            'state_of_origin' => ['required', 'string', 'max:255'],
            'school_attended' => ['required', 'string', 'max:255'],
            'course_studied' => ['required', 'string', 'max:255'],
            'post_held' => ['required', 'string', 'max:255'],
            'quote' => ['required', 'string'],
            'facebook_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'hobbies' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'image' => ['mimes:jpeg,bmp,png', 'size:2048'],
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
        $pic = $data->file('image');
        $folder = 'nccf';
        $quality = 'auto';
        $upload = Cloudder::upload($file,null, $options = array(
            'folder'   => $folder,
            'timeout'  => 3600,
            'quality'  => $quality,
        ));

        if($upload){
            $picId = Cloudder::getPublicId();

            return User::create([
                'surname' => $data['surname'],
                'firstname' => $data['firstname'],
                'middlename' => $data['middlename'],
                'state_of_origin' => $data['state_of_origin'],
                'school_attended' => $data['school_attended'],
                'course_studied' => $data['course_studied'],
                'post_held' => $data['post_held'],
                'quote' => $data['quote'],
                'facebook_name' => $data['facebook_name'],
                'phone_number' => $data['phone_number'],
                'hobbies' => $data['hobbies'],
                'image' => $picId,
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
        }
    }
}
