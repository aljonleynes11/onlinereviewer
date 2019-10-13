<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use App\User;
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

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {

            // $userSocialite = Socialite::driver('facebook')->user();
            $userSocialite = Socialite::driver('facebook')->stateless()->user();
            // try {
            //     $userSocialite = Socialite::driver('facebook')->user();
            // } catch (InvalidStateException $e) {
            //     $userSocialite = Socialite::driver('facebook'->stateless()->user());
            // }
			// $findUser=User::where('email', $userSocialite->email)->first();
			// if ($findUser) 
			// {
			// 	Auth::login($findUser);
			// 	return 'Login Success';
			// } 
			// else 
			// {
			// 	$user= new User;
			// 	$user->name=$userSocialite->name;
			// 	$user->email=$userSocialite->email;
			// 	$user->password=bcrypt('123456');
			// 	$user->save();
			// 	Auth::login($user);
			// 	return 'Welcome To OnlineReviewerPh';

            // }
$finduser=user::where('email', $userSocialite->email)->first();
{
  if ($finduser){
			Auth::login($finduser);
			return redirect('/')->with('userSocialite', $userSocialite);

  }else{
      $user = new User;
      $user->name=$userSocialite->name;
      $user->email=$userSocialite->email;
      $user->password=bcrypt('123456789');
      $user->save();
			Auth::login($userSocialite->email);
			return redirect('/')->with('userSocialite', $userSocialite);
  }
}
             
    }

    
}
