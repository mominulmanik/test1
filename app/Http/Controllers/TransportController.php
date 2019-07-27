<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Transport;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $trans = DB::select('select * from transport');
        return view('admin.transport.index',['trans'=>$trans]);
        
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
        $b_name = $request->input('b_name');
        $t_no = $request->input('t_no');
        $c_no = $request->input('c_no');
        $l_no = $request->input('l_no');
        $cap = $request->input('cap');
        
        $data=array('brand_name'=>$b_name,"transport_no"=>$t_no,"lisence"=>$c_no,"chesis_no"=>$l_no,"capacity"=>$cap);
        DB::table('transport')->insert($data);
        $trans = DB::select('select * from transport');
        return redirect()->action('TransportController@index');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function show(Transport $transport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function edit(Transport $transport)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transport $transport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transport $transport)
    {
        //
    }
}
