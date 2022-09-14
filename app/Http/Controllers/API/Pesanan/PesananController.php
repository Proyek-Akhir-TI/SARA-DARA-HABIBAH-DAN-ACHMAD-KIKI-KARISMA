<?php

namespace App\Http\Controllers\API\Pesanan;

use App\Http\Controllers\Controller;
use App\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{

    public function getAll()
    {
        $data = DB::table ('pesanans')
            ->orderBy('id','desc')
            ->get();

        return response()->json($data,200);
    }

    public function store(Request $request){
        $validateData=$request->validate([
            'id' => 'required',
            'no_telp' => 'required',
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'kategori_layanan' => 'required',
            'keterangan_pesanan' => 'required',
            'status_pesanan' => 'required',

        ]);

        $data = new Pesanan();
        $data->id = $request->id;
        $data->no_telp=$request->no_telp;
        $data->nama_pelanggan=$request->nama_pelanggan;
        $data->alamat=$request->alamat;
        $data->kategori_layanan=$request->kategori_layanan;
        $data->keterangan_pesanan=$request->keterangan_pesanan;
        $data->status_pesanan=$request->status_pesanan;
        $data->save();

        return response()->json($data, 201);
    }


    public function update(Request $request){
        $validateData=$request->validate([
            'id' => 'required',
            'no_telp' => 'required',
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'kategori_layanan' => 'required',
            'keterangan_pesanan' => 'required',
            'status_pesanan' => 'required',

        ]);

        $data = Pesanan::where('id','=',$request->id)->first();
        $data->id = $request->id;
        $data->no_telp=$request->no_telp;
        $data->nama_pelanggan=$request->nama_pelanggan;
        $data->alamat=$request->alamat;
        $data->kategori_layanan=$request->kategori_layanan;
        $data->keterangan_pesanan=$request->keterangan_pesanan;
        $data->status_pesanan=$request->status_pesanan;
        $data->save();

        return response()->json($data, 201);
    }


    public function destroy(Request $request){
        $data= Pesanan::where('id', '=', $request->id)->first();

        if(!empty($data)){
            $data->delete();

            return response()->json($data, 200);

        } else{
            return response()->json([
                'error' => 'data tidak diemukan'
            ], 404);
        }
    }
}
