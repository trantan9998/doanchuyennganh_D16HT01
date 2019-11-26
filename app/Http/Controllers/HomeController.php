<?php

namespace App\Http\Controllers;

use App\Member_model;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\DuAn;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function quanly()
    {
       return (view('Admin.quanly'));
    }
    public function congviec()
    {
        return View('index.congviec');

//        $user = Member_model::find($id);
//        $tenduan = DB::table('member_models')->join('du_ans','du_ans.id_member','=','member_models.id')->where('member_models.id','=',$id)->get();
//        return view('index.congviec',[
//            'user' => $user,
//        ]);

    }
      public function postbai(){
            $postbai= Member_model::all();
            return view('index.postbai',[
                'postbai'=>$postbai,
            ]);
      }
      public function duan(){
            $duan=Member_model::all();
            return View('index.duan',[
                'duan'=>$duan,
            ]);
      }
    public function doan(){
        return View('doan');
    }
    public function home(){
        return View('taikhoan.Home');
    }
    public function login(){
        return View('taikhoan.login');
    }
    public function register(){
        return View('taikhoan.signup');
    }
    public function aa(){
        return View('index.index');
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
