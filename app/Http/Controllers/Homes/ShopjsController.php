<?php

namespace App\Http\Controllers\Homes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

use Pay;

class ShopjsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $add=DB::table("address")->where('user_id','=','2')->get();
        // dd($add);
        return view('home.shopjs',['add'=>$add]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.shoptjdz');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $add = $request->except('_token');
        // dd($add);
      

       if(DB::table('address')->insert($add)){
        return redirect('/shopjs');
       }else{
        echo "添加失败";
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
        // dd($id);
        $edd = DB::table('address')->where('id','=',$id)->first();
        // dd($edd);
        
        return view('home.shopdz',['edd'=>$edd]);
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
        // var_dump($request->all());
        $adds = $request->except('_token','_method');
        // dd($adds);
        // DB::table('address')->where('id','=',$id)->update($adds);
        if( DB::table('address')->where('id','=',$id)->update($adds)){
            return redirect('/shopjs');
          }else{
            echo '修改失败';
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(DB::table('address')->where('id','=',$id)->delete()){
            return redirect('/shopjs');
        }
    }


    public function zhifu(){
        $pay = new Pay();

        $pay->hackpay('alipay','dongli','0.01');
    }
}
