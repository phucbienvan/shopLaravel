<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use vendor\project\StatusTest;

class CategoryController extends Controller
{


    //  Danh sach danh muc san pham
    public function listCategory(){
        $category = DB::table('tbl_category')->get();
        return view('admin.list_category', compact('category'));
    }

    //  Them danh muc san pham
    public function addCategory(){
        return view('admin.add_category');
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

    //  hien thi trang edit
    public function editCategory($category_id){
        $category = DB::table('tbl_category')->where('category_id', $category_id)->get();
//        var_dump($category);
//        die();
        return view('admin.edit_category', compact('category'));
    }

    //  cap nhat danh muc san pham
    public function updateCategory(Request $request, $category_id){
        $data = [
            'category_name' => $request->category_name,
            'category_desc' => $request->category_desc,
            'category_status'=> $request->category_status
        ];
        DB::table('tbl_category')->where('category_id', $category_id)->update($data);
//        var_dump($data);
//        die();
        Session::put('message', 'Cap nhat danh  muc thanh cong');
        return redirect('list-category');
    }

    //  Xoa danh muc san pham
    public function deleteCategory($category_id){
        DB::table('tbl_category')->where('category_id', $category_id)->delete();
        Session::put('message', 'Xoa danh  muc thanh cong');
        return redirect('list-category');
    }
}
