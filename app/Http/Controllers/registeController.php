<?php

namespace App\Http\Controllers;

use App\register;
use Illuminate\Http\Request;

class registeController extends Controller
{
    public function getListregister()
    {
        return registers::orderBy('id','ASC')->get();
    }
    public function getAddregister (Request $request)
    {
        $Register = new registers;
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
        return registers::findOrFail($id);
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
    public function getDelete($id)
    {
        $Register = registers::findOrFail($id);
        $Register->delete();
        return "Xoá Thành Công";
    }
}
