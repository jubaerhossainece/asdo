<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class VolunteerLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('preventBackHistory');
        $this->middleware('guest')->except(['logout','userLogout']);
    }

    /**
    * Show the vlunteer's login form.
    *
    * @return \Illuminate\View\View
    */
    public function showLoginForm(){
        return view('auth.volunteer-login');
    }

    /**
    * Show the vlunteer's registration form.
    *
    * @return \Illuminate\View\View
    */
    public function showRegisterForm(){
        return view('auth.volunteer-register');
    }

    
    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        $value = request()->input('identifier'); //email or phone number
        $field = filter_var($value, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';
        request()->merge([$field => $value]);
        return $field;
    }
 

    // social login provider function
    public function redirectToProvider($provider){
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider){
        $user = Socialite::driver($provider)->user();
        $existingUser = User::whereEmail($user->getEmail())->first();

        if($existingUser){
            Auth::login($existingUser);
        } else{
            $result = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'photo' => $user->getAvatar(),
            ]);

            // $newUser = new User;
            // $newUser->name = $user->getName();
            // $newUser->email = $user->getEmail();
            // $newUser->photo = $user->getAvatar();
            // $newUser->status = false;
            // $result = $newUser->save();
            // dd($result);
            Auth::login($result);
        }

        return redirect($this->redirectPath());
    }
}
