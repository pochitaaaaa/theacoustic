<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Model\TiketUser;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class TiketUserControllers extends Controller
{

    private $warna = [
        ''
];

    /**
     * Display a listing of the resource.
     */
    public function index() {
        $tiketTersedia = DB::table('tiket')->get();
        return view('user.index', [
            'tiket' => $tiketTersedia,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tiketTersedia = DB::table('tiket')->get();  
        return view('user.create', compact('tiketTersedia'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $id_tiket = $request->input('id_tiket');
        $kode = (string) Uuid::uuid4();

        $data_tiket = DB::table('tiket')->where('id_tiket','=',$id_tiket)->first();

        try 
        {
            DB::table('tiket_user')->insert([
                'kode' => $kode,
                'id_tiket' => $id_tiket,
                'jenis_tiket' => $data_tiket->jenis_tiket,
                'nama_konser' => $data_tiket->nama_konser,
                'jadwal' => $data_tiket ->jadwal,
                ]); 
            
            DB::update("UPDATE `tiket` SET `stok` = `stok` - 1 WHERE id_tiket = '$id_tiket'");

            return  redirect('user_tiket')-> with ('status', 'Tiket Konser  berhasil ditambah..'); 
        } 
                catch(\Illuminate\Database\QueryException $ex){ 
                    dd($ex->getMessage());
                return  redirect('user_tiket')-> with ('status', 'Tiket Konser gagal ditambah..'); 
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
    public function edit(string $id)
    {
        //
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
    public function destroy(string $kode)
    {
        $tiketTersedias = DB::table('tiket_user')->where('kode', $kode)->delete();  
        return  redirect('user_tiket')-> with ('status', 'Tiket Konser berhasil dihapus..');
    }
}
