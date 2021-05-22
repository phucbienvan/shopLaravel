<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BrandController extends Controller
{
    //  Danh sach nhan hieu san pham
    public function listBrand(){
        $brand =DB::table('tbl_brand')->get();
        return view('admin.list_brand', compact('brand'));
    }

    //  Them nhan hieu san pham
    public function addBrand(){
        return view('admin.add_brand');
    }

    //  luu nhan hieu san pham
    public function saveBrand(Request $request){
        $data = [
            'brand_name' => $request->brand_name,
            'brand_desc' => $request->brand_desc,
            'brand_status'=> $request->brand_status
        ];
        DB::table('tbl_brand')->insert($data);
        Session::put('message', 'Them nhan hieu thanh cong');
        return redirect('add-brand');
    }

    //  hien thi trang edit
    public function editBrand($brand_id){
        $brand= DB::table('tbl_brand')->where('brand_id', $brand_id)->get();
//        var_dump($brand);
//        die();
        return view('admin.edit_brand', compact('brand'));
    }

    //  cap nhat nhan hieu san pham
    public function updateBrand(Request $request, $brand_id){
        $data = [
            'brand_name' => $request->brand_name,
            'brand_desc' => $request->brand_desc,
            'brand_status'=> $request->brand_status
        ];
        DB::table('tbl_brand')->where('brand_id', $brand_id)->update($data);
//        var_dump($data);
//        die();
        Session::put('message', 'Cap nhat nhan hieu thanh cong');
        return redirect('list-brand');
    }

    //  Xoa danh muc san pham
    public function deleteBrand($brand_id){
        DB::table('tbl_brand')->where('brand_id', $brand_id)->delete();
        Session::put('message', 'Xoa nhan hieu thanh cong');
        return redirect('list-brand');
    }
}
