<?php

namespace App\Http\Controllers;

use App\Member_model;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\DuAn;

use App\User;
use Symfony\Component\Console\Input\Input;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // BỘ PHẬN QUẢN LÝ
    public function quanlyduan()
    {
       return view('quanly.quanly');
    }
    public function khachhang()
    {
       return view('quanly.khachhang');
    }


    //BỘ PHẬN QUẢN LÝ NHÓM
    public function thongtinduan()
    {
        $thongtinduan=DuAn::all();
        return View('Admin.thongtinduan',[
            'thongtinduan'=>$thongtinduan,
        ]);
    }
    public function quanlythanhvien()
    {
        $duan=DuAn::all();
        return View('Admin.quanlythanhvien',[
            'duan'=>$duan,
        ]);
    }
    public function baocaoduan()
    {
        return view('Admin.baocaoduan');

    }
    public function thongkebaocao()
    {
        return view('Admin.theodoiduan');
    }


    // THÀNH VIÊN NHÓM
    public function duan(){
        $duan=DuAn::all();
        return View('index.duan',[
            'duan'=>$duan,
        ]);
    }
    public function congviec()
    {
        $congviec = Member_model::all();
        return View('index.congviec',[
            'congviec'=>$congviec,
        ]);

//        $user = Member_model::find($id);
//        $tenduan = DB::table('member_models')->join('du_ans','du_ans.id_member','=','member_models.id')->where('member_models.id','=',$id)->get();
//        return view('index.congviec',[
//            'user' => $user,
//        ]);

    }
    // ĐĂNG NHẬP THÀNH VIÊN
//    public function dangnhap(){
//        $dangnhap = register::all();
//        return View('quanlythanhvien.index',[
//            'dangnhap'=>$dangnhap,
//        ]);
//    }
    public function  getdangnhap(){
        return view('index.dangnhap');
    }
    public function  postdangnhap(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'matkhau'=>'required'
            ],[
                'email.required'=>'Bạn chưa nhập địa chỉ email',
                'matkhau.required'=>'Bạn chưa nhập mật khẩu',
            ]);
        if(Auth::attempt(['email'=>$request->email,'matkhau'=>$request->matkhau])){
            return redirect('congviec');
        }
        else
        {
            return back()->with('thongbao','đăng nhập không thành công');
        }

    }

      public function postbai(){
            $postbai= Member_model::all();
            return view('index.postbai',[
                'postbai'=>$postbai,
            ]);
      }
    // TRANG CHỦ : admin và member
    public function doan(){
        return View('doan');
    }

    //TÀI KHOẢN THÀNH VIÊN
    public function home(){
        return View('Taikhoan.Home');
    }
    //đăng nhập
    public function login(){
        return View('Taikhoan.login');
    }
    //đăng ký
    public function register(){
        return View('Taikhoan.register');
    }
    //đăng xuất
    public function logout(){
        return View('Taikhoan.logout');
    }
    public function dangky(){
        return View('Taikhoan.dangky');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
