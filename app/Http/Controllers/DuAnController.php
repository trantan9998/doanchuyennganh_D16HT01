<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DuAn;
class DuAnController extends Controller
{
    public function getList()
    {
        return DuAn::orderBy('id','ASC')->get();
    }
    public function getAdd (Request $request)
    {
        $duan = new DuAn;
        $duan->tenduan  = $request->tenduan;
        $duan->chiphi = $request->chiphi;
        $duan->sothanhvien = $request->sothanhvien;
        $duan->nguoichiutrachnhiem = $request->nguoichiutrachnhiem;
        $duan->ngaybatdau = $request->ngaybatdau;
        $duan->ngayketthuc = $request->ngayketthuc;
        $duan->save();
        return "Thêm thành công";
    }
    public function getEdit($id)
    {
        return DuAn::findOrFail($id);
    }
    public function postEdit(Request $request,$id)
    {
        $duan = DuAn::findOrFail($id);
        $duan->tenduan  = $request->tenduan;
        $duan->chiphi = $request->chiphi;
        $duan->sothanhvien = $request->sothanhvien;
        $duan->nguoichiutrachnhiem = $request->nguoichiutrachnhiem;
        $duan->ngaybatdau = $request->ngaybatdau;
        $duan->ngayketthuc = $request->ngayketthuc;
        $duan->save();
        return "Sửa thành công";
    }
    public function getDelete($id)
    {
        $duan = DuAn::findOrFail($id);
        $duan->delete();
        return "Xoá Thành Công";
    }
}
