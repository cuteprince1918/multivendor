<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller {

    public function __construct() {
        
    }

    public function adminlogin(Request $request) {

        if ($request->isMethod('post')) {
            if (Auth::guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password'), 'usertype' => 'admin'])) {

                $loginData = array(
                    'name' => Auth::guard('admin')->user()->name,
                    'email' => Auth::guard('admin')->user()->email,
                    'type' => Auth::guard('admin')->user()->type,
                    'user_image' => Auth::guard('admin')->user()->user_image,
                    'id' => Auth::guard('admin')->user()->id
                );
                Session::push('logindata', $loginData);
                $return['status'] = 'success';
                $return['message'] = "Well Done login Successfully!";
                $return['redirect'] = route('admin-login');
            } else if (Auth::guard('user')->attempt(['email' => $request->input('email'), 'password' => $request->input('user'), 'usertype' => 'user'])) {

                $loginData = array(
                    'name' => Auth::guard('user')->user()->name,
                    'email' => Auth::guard('user')->user()->email,
                    'type' => Auth::guard('user')->user()->type,
                    'user_image' => Auth::guard('user')->user()->user_image,
                    'id' => Auth::guard('user')->user()->id
                );
                Session::push('logindata', $loginData);
                $return['status'] = 'success';
                $return['message'] = "Well Done login Successfully!";
                $return['redirect'] = route('admin-login');
            } else {
                $return['status'] = 'error';
                $return['message'] = "Invaild Id Or Password";
            }
            return json_encode($return);
            exit();
        }

        $data['title'] = 'Login | Admin';
        $data['css'] = array('');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'login.js', 'comman_function.js', 'jquery.validate.min.js');
        $data['funinit'] = array('Login.init()');
        return view('admin.pages.login', $data);
    }

}
