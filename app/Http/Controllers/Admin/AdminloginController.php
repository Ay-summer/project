<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
class AdminloginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->session()->pull('adminname');
        return redirect('adminlogin/create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.adminlogin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name=$request->input('name');
        $password=$request->input('password');
        $info=DB::table('admin_users')->where('name','=',$name)->first(); 
        if($info){
            if(Hash::check($password,$info->password)){
                session(['adminname'=>$name]);
                $a=DB::select("select n.name,n.mname,n.aname from user_role as ur,role_node as rn,node as n where ur.rid=rn.rid and rn.nid=n.id and uid=$info->id");
                $b['AdminController'][]='index';
                foreach($a as $key=>$value){
                    $b[$value->mname][]=$value->aname;
                    if($value->aname=='create'){
                        $b[$value->mname][]='store';
                    }
                    if($value->aname=='edit'){
                        $b[$value->mname][]='update';
                    }
                }
                session(['b'=>$b]);
                // dd($b);
                return redirect('/admin')->with('success','登录成功');
            }
        }else{
            return back()->with('error','用户名或密码错误');
        }
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
