<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    public function lihat_data_peminjam(){
        $peminjam = ['Acil',
                        'Ucul',
                        'Ucil',
                        'Ucel'
    ];
    return view('peminjam/lihat_data_peminjam', compact('peminjam'));
    }

    public function create(){
        return view('data_peminjam.create');
    }

    public function store(Request $request){
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
        return redirect('data_peminjam');
    }
}
