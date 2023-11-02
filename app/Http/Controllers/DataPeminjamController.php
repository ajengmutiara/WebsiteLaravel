<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPeminjam;
use Session;
use PDF;

class DataPeminjamController extends Controller
{
    public function index(){
        $data_peminjam = DataPeminjam::orderBy('id', 'asc')->paginate(5);
        $no = 0;
        $jumlah_peminjam = $data_peminjam->count();
        return view('data_peminjam.index', compact('data_peminjam', 'no', 'jumlah_peminjam'));
    }

    public function create(){
        return view('data_peminjam.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama_pegawai' => 'required|string',
            'NIP' => 'required|string',
            'jabatan' => 'required|string',
            'jumlah_barang' => 'required|string',
            'merk_barang' => 'required|string',
            'tanggal_penerimaan' => 'required|date'
        ]);

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
        $data_peminjam->save();

        Session::flash('flash_message', 'Data pegawai penerima barang berhasil disimpan!');
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
        $data_peminjam->update();

        Session::flash('flash_message', 'Data pegawai penerima barang berhasil diupdate');
        return redirect('data_peminjam');
    }
    public function destroy($id){
        $data_peminjam = DataPeminjam::find($id);
        $data_peminjam->delete();

        Session::flash('flash_message', 'Data pegawai penerima barang berhasil dihapus');
        Session::flash('penting', true);
        return redirect('data_peminjam');
    }

    public function search(Request $request){
        $batas = 5;
        $cari = $request->kata;
        $data_peminjam = DataPeminjam::where('nama_peminjam', 'like', '%'.$cari. '%')->paginate($batas);
        $no = $batas * ($data_peminjam->currentPage() - 1);
        return view('data_peminjam.search'. compact('data_peminjam', 'cari'));
    }

    public function data_peminjam_pdf() {
        $data_peminjam = DataPeminjam::all();
        $pdf = PDF::loadView('data_peminjam.data_peminjam_pdf', ['data_peminjam' => $data_peminjam])
        ->setPaper('F4', 'landscape');
        return $pdf->download('laporan.pdf');
    }  

    public function data_peminjam_pdf2() {
        $data_peminjam = DataPeminjam::all();
        $pdf = PDF::loadView('data_peminjam.data_peminjam_pdf2', ['data_peminjam' => $data_peminjam])
        ->setPaper('F4', 'potrait');
        return $pdf->download('laporan.pdf');
    }  
    
}