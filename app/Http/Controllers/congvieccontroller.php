<?php

namespace App\Http\Controllers;

use App\Member_model;
use Illuminate\Http\Request;

class congvieccontroller extends Controller
{
    public function getlistcongviec()
    {
        return Member_model::orderBy('id','ASC')->get();
    }
    public function getAddcongviec (Request $request)
    {
        $congviec= new Member_model;
        $congviec->tenthanhvien  = $request->tenthanhvien;
        $congviec->vaitro = $request->vaitro;
        $congviec->chucnang = $request->chucnang;
        $congviec->tencongviec = $request->tencongviec;
        $congviec->nhiemvu = $request->nhiemvu;
        $congviec->save();
        return "Thêm thành công";
    }
    public function getEditcongviec($id)
    {
        return Member_model::findOrFail($id);
    }
    public function postEditcongviec(Request $request,$id)
    {
        $congviec = Member_model::findOrFail($id);
        $congviec->tenthanhvien  = $request->tenthanhvien;
        $congviec->vaitro = $request->vaitro;
        $congviec->chucnang = $request->chucnang;
        $congviec->tencongviec = $request->tencongviec;
        $congviec->nhiemvu = $request->nhiemvu;
        $congviec->save();
        return "Sửa thành công";
    }
    public function getDeletecongviec($id)
    {
        $congviec = Member_model::findOrFail($id);
        $congviec->delete();
        return "Xoá Thành Công";
    }
}
