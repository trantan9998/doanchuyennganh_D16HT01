<?php

namespace App\Http\Controllers;

use App\register;
use App\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function getListregister()
    {
        return User::orderBy('id','ASC')->get();
    }
    public function getAddregister (Request $request)
    {
        $User = new user;
        $User->hovaten  = $request->hovaten;
        $User->diachi = $request->diachi;
        $User->sdt = $request->sdt;
        $User->email = $request->email;
        $User->matkhau = $request->matkhau;
        $User->save();
        return "Thêm thành công";
    }
    public function getEditregister($id)
    {
        return User::findOrFail($id);
    }
    public function postEditregister(Request $request,$id)
    {
        $User = user::findOrFail($id);
        $User->hovaten  = $request->hovaten;
        $User->diachi = $request->diachi;
        $User->sdt = $request->sdt;
        $User->email = $request->email;
        $User->matkhau = $request->matkhau;
        $User->save();
        return "Sửa thành công";
    }
    public function getDeleteregister($id)
    {
        $User = user::findOrFail($id);
        $User->delete();
        return "Xoá Thành Công";
    }


}
