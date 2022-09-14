<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\kategori;
use App\Pesanan;
use App\Http\Requests\ErrorFormRequest;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pagename = 'Data Daftar Pesanan';
        $data = Pesanan::all();
        return view('admin.pesanan.index', compact('data', 'pagename'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data_kategori = kategori::all();
        $pagename ='Form Input Pesanan';
        return view('admin.pesanan.create', compact('pagename', 'data_kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ErrorFormRequest $request)
    {
        //


        $data_pesanan=new Pesanan([

            'no_telp'=> $request->get('txtno_telp'),
            'nama_pelanggan'=> $request->get('txtnama_pelanggan'),
            'alamat'=> $request->get('txtalamat'),
            'kategori_layanan'=>$request->get('optionkategori_layanan'),
            'keterangan_pesanan'=>$request->get('txtketerangan_pesanan'),
            'status_pesanan'=>$request->get('radiostatus_pesanan'),
        ]);

        //dd($data_pesanan);

        $data_pesanan->save();
        return redirect('admin/pesanan')->with('sukses', 'pesanan berhasil disimpan');

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
        $data_kategori = kategori::all();
        $pagename = 'Update Pesanan';
        $data = Pesanan::find($id);
        return view('admin.pesanan.edit', compact('data', 'pagename', 'data_kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ErrorFormRequest $request, $id)
    {
        //

        $pesanan=Pesanan::find($id);

            $pesanan->no_telp = $request->get('txtno_telp');
            $pesanan->nama_pelanggan = $request->get('txtnama_pelanggan');
            $pesanan->alamat = $request->get('txtalamat');
            $pesanan->kategori_layanan = $request->get('optionkategori_layanan');
            $pesanan->keterangan_pesanan = $request-> get('txtketerangan_pesanan');
            $pesanan->status_pesanan = $request->get('radiostatus_pesanan');


        //dd($data_pesanan);

        $pesanan->save();
        return redirect('admin/pesanan')->with('sukses', 'pesanan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pesanan = Pesanan::find($id);

        $pesanan->delete();
        return redirect('admin/pesanan')->with('sukses', 'pesanan berhasil dihapus');
    }
}
