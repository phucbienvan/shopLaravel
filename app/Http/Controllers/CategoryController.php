<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use vendor\project\StatusTest;

class CategoryController extends Controller
{
    //  Them danh muc san pham
    public function addCategory(){
        return view('admin.add_category');
    }

    //  Danh sach danh muc san pham
    public function listCategory(){
        return view('admin.list_category');
    }

    //  luu danh muc san pham
    public function saveCategory(Request $request){
        $data = [
            'category_name' => $request->category_name,
            'category_desc' => $request->category_desc,
            'category_status'=> $request->category_status
        ];
        DB::table('tbl_category')->insert($data);
        Session::put('message', 'Them danh muc thanh cong');
        return redirect('add-category');

    }
}
