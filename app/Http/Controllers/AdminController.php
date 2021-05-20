<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class AdminController extends Controller
{
    //  hien thi trang login
    public function index(){
        return view('admin_login');
    }

    //  hien thi trang chu admin
    public function showDashboard(){
        return view('admin.dashboard');
    }

    //  dang nhap admin
    public function dashboard(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = $request->admin_password;
        $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if ($result){
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return redirect('dashboard');
        }else{
            Session::put('message', 'sai mat khau hoac email');
            return redirect('admin');
        }
    }

    //  dang xuat admin
    public function logout(){
        Session::put('admin_name', null);
        Session::put('admin_id',null);
        return redirect('admin');
    }
}
