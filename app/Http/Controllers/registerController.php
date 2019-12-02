<?php

namespace App\Http\Controllers;

use App\register;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function getListregister()
    {
        return register::orderBy('id','ASC')->get();
    }
    public function getAddregister (Request $request)
    {
        $Register = new register;
        $Register->hovaten  = $request->hovaten;
        $Register->diachi = $request->diachi;
        $Register->sdt = $request->sdt;
        $Register->tentaikhoan = $request->tentaikhoan;
        $Register->matkhau = $request->matkhau;
        $Register->save();
        return "Thêm thành công";
    }
    public function getEditregister($id)
    {
        return register::findOrFail($id);
    }
    public function postEditregister(Request $request,$id)
    {
        $Register = register::findOrFail($id);
        $Register->hovaten  = $request->hovaten;
        $Register->diachi = $request->diachi;
        $Register->sdt = $request->sdt;
        $Register->tentaikhoan = $request->tentaikhoan;
        $Register->matkhau = $request->matkhau;
        $Register->save();
        return "Sửa thành công";
    }
    public function getDeleteregister($id)
    {
        $Register = register::findOrFail($id);
        $Register->delete();
        return "Xoá Thành Công";
    }


}
