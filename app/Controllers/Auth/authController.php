<?php


namespace app\Controllers\Auth;

use app\Controllers\Controller;
use app\Models\Login;
use app\Models\User;
use Machine\Http\Request;
use Machine\Session\Session;

/**
 * Class authController
 * @package App\Controllers
 */
class authController extends Controller
{
    public function login(Request $request)
    {
        $login = new Login();
        $errors = $login;

        if ($request->isPost()){
            $login->checkData($request->data());
            if ($login->validate() && $login->logger()){
                redirectTo('');
                return;
            }
            return view('auth/login', compact('errors'));
        }
        return view('auth/login', compact('errors'));
    }

    public function register(Request $request)
    {
        $user = new User();
        $errors = $user;

        if ($request->isPost()){
            $user->checkData($request->data());

            if ($user->validate() && $user->register()){
                Session::$session->setFlash('success', 'Tanks for registering...');
                redirectTo('login');
            }

            return view('auth/register', compact('errors'));
        }

        return view('auth/register', compact('errors'));
    }

    public function unlock(Request $request)
    {
        $login = new Login();
        $errors = $login;

        if ($request->isPost()){
            $login->checkData($request->data());
            if ($login->validate() && $login->logger()){

                redirectTo(Session::$session->get('request_uri'));
                Session::$session->destroy('userOnSession');
                Session::$session->destroy('request_uri');
            }
            return view('auth/unlock', compact('errors'));
        }
        return view('auth/unlock', compact('errors'));
    }

    public  function logout()
    {
        Session::$session->logout();
        redirectTo('');
    }

}