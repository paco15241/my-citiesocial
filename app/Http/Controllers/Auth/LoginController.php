<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated()
    {
        session()->flash('message', 'Signed in successfully.');
    }

    // 轉址到社群平台的登入頁面
    public function redirectToProvider($provider){
        return Socialite::driver($provider)->redirect();
    }

    // 交由社群平台去呼叫的 Call back function
    public function handleProviderCallback($provider){
        $user = Socialite::driver($provider)->user();
        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);

        session()->flash('message', 'Signed in successfully.');
        return redirect($this->redirectTo);
    }

    // 假如通過登入提供者驗證後發現使用者已經註冊過，就取得該使用者資料，否則就自動進行簡易註冊動作
    public function findOrCreateUser($user, $provider){
        $authUser = User::where('provider_id', $user->id)->first();
        if(!$authUser){
            $authUser = User::where('email', $user->email)->first();
            if($authUser){
                $authUser->provider = $provider;
                $authUser->provider_id = $user->id;
                $authUser->avatar = $user->getAvatar();
                $authUser->save();
            }
        }

        if($authUser){
            return $authUser;
        }else{
            $data = [
                'name' => $user->name,
                'email' => $user->email,
                'avatar' => $user->getAvatar(),
                'provider' => $provider,
                'provider_id' => $user->id,
            ];
            return User::create($data);
        }
    }

}
