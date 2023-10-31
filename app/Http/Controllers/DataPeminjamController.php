<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPeminjam;

class DataPeminjamController extends Controller
{
    public function index(){
        $data_peminjam = DataPeminjam::all();
        $jumlah_peminjam = $data_peminjam->count();
        return view('data_peminjam.index', compact('data_peminjam', 'jumlah_peminjam'));
    }

    public function create(){
        return view('data_peminjam.create');
    }

    public function store(){
        $data_peminjam = new DataPeminjam;
        $data_peminjam->nama_pegawai = $request->nama_pegawai;
        $data_peminjam->NIP = $request->NIP;
        $data_peminjam->jabatan = $request->jabatan;
        $data_peminjam->type_barang = $request->type_barang;
        $data_peminjam->jenis_barang = $request->jenis_barang;
        $data_peminjam->merk_barang = $request->merk_barang;
        $data_peminjam->jumlah_barang = $request->jumlah_barang;
        $data_peminjam->serial_number = $request->serial_number;
        $data_peminjam->kelengkapan_barang = $request->kelengkapan_barang;
        $data_peminjam->tanggal_penerimaan = $request->tanggal_penerimaan;
        return redirect('data_peminjam');
    }

    public function edit($id){
        $peminjam =  DataPeminjam::find($id);
        return view('data_peminjam.edit', compact('peminjam'));
    }

    public function update(Request $request, $id){
        $data_peminjam = Datapeminjam::find($id);
        $data_peminjam->nama_pegawai = $request->nama_pegawai;
        $data_peminjam->NIP = $request->NIP;
        $data_peminjam->jabatan = $request->jabatan;
        $data_peminjam->type_barang = $request->type_barang;
        $data_peminjam->jenis_barang = $request->jenis_barang;
        $data_peminjam->merk_barang = $request->merk_barang;
        $data_peminjam->jumlah_barang = $request->jumlah_barang;
        $data_peminjam->serial_number = $request->serial_number;
        $data_peminjam->kelengkapan_barang = $request->kelengkapan_barang;
        $data_peminjam->tanggal_penerimaan = $request->tanggal_penerimaan;
        return redirect('data_peminjam');
    }
    public function destroy($id){
        $data_peminjam = DataPeminjam::find($id);
        $data_peminjam->delete();
        return redirect('data_peminjam');
    }
}
