<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Traits\CloudinaryUpload;

class RegisterController extends Controller
{
    use RegistersUsers;
    use CloudinaryUpload;

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
            'image' => ['mimes:jpeg,bmp,png,jpg', 'size:2048'],
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

        // $pic = $data->file('image');
        // $folder = 'nccf';
        // $quality = 'auto';
        // $upload = Cloudder::upload($file,null, $options = array(
        //     'folder'   => $folder,
        //     'timeout'  => 3600,
        //     'quality'  => $quality,
        // ));

        /**
         * From the view try to make sure the image data
         * is sent, so this logic below checks for that,
         * i dont understand the designs but this code
         * works
         */
        if (array_key_exists('image', $data)){
            dd('has image');
        }else {
            dd('no image');
        }

        $user = User::create([
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
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                ]);

        if (array_key_exists('image', $data)){

            $imageData = $this->upload($data['image'],'nccf', 360,null);
            $userImage = [
                'public_id' => $imageData['public_id'],
                'secure_url' => $imageData['secure_url']
            ];

            $user->image = json_encode($userImage);
            $user->save();
        }

        return $user;
    }
}
