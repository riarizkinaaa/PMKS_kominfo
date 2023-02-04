<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Dusun;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class DusunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kecamatan=Kecamatan::all();
        $desa=Desa::all();
        $dusun=Dusun::join('desas','desas.id_desa','=','dusuns.desa_id')
            ->join('kecamatans','kecamatans.id_kecamatan','=','dusuns.kecamatan_id')
            ->get();
        // dd($dusun);
        return view('admin.dusun',compact('dusun','desa','kecamatan'));
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
        // dd($request->id_desa);
        Dusun::create([
            'dusun'=>$request->dusun,
            'desa_id'=>$request->id_desa,
            'kecamatan_id'=>$request->kecamatan
        ]);

        return back();
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
