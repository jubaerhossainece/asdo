<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules\Username;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
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


    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request){
        //validate the from data
        $this->Validate($request, [
            'identifier' => [new Username, 'string', 'max:255'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        $user = User::where($this->username(), $request->identifier)
                        ->select($this->username())
                        ->first();
                        // return $user;
        if($user){             
            //attempt to log the user in
            if($this->guard()->attempt([$this->username() => $request->identifier, 'password' => $request->password], $request->remember)){
                //if successfull, then redirect to teir intended location
                return redirect()->intended(route('member.profile.show'));
            }else{
                return redirect()->back()->with('message', 'Your password is inceorrect!')->withInput($request->only('identifier', 'remember'));
            }
        }else{
            return redirect()->back()->with('message', 'You have no account yet!')->withInput($request->only('identifier', 'remember'));
        }

        // if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('identifier', 'remember'));
    }


    /**
     * Log out user to the correct login form.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function userLogout(){
        Auth::guard('web')->logout();
        return redirect()->route('login');
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
