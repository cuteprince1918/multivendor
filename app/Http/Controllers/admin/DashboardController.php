<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller {

    public function __construct() {
        
    }

    public function dashboard(Request $request) {

        $data['title'] = 'Dashboard | Admin';
        $data['css'] = array('');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'dashboard.js', 'comman_function.js', 'jquery.validate.min.js');
        $data['funinit'] = array('Dashboard.init()');
        return view('admin.pages.dashboard.dashboard', $data);
    }

}
