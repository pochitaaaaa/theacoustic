<?php

namespace App\Http\Controllers;

use Illuminate\Http\Model\Beli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class BeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $belii = DB::table('tiket')->get();
        return view ('beli.index', compact('belii'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $tiket = DB::table('tiket')->get();
        $jenis_tiket = DB::table('jenis_tiket')->get();
        return view('beli.create', compact('tiket','jenis_tiket'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try 
        {
            DB::table('tiket')->insert([
                'id_tiket' => $request ->id_tiket, 
                'id_jenis' => $request ->id_jenis, 
                'id_harga' => $request ->id_harga,
                'id_stok' => $request ->id_stok, 
                'nama_konser' => $request ->nama_konser, 
                ]); 
            return  redirect('belii')-> with ('status', 'Jenis Barang berhasil ditambah..'); 
        } 
                catch(\Illuminate\Database\QueryException $ex){ 
                //dd($ex->getMessage());
                return  redirect('belii')-> with ('status', 'Jenis Barang gagal ditambah..'); 
            } 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_tiket)
    {
        $belii = DB::table('tiket')->where('id_tiket', $id_tiket)->first();  
        return view('beli.edit',compact('belii'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
