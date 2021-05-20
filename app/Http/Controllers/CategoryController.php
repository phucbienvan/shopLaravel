<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
