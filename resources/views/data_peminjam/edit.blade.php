@extends('layouts.master')
@section('title')
<h6 class="m-0 font-weight-bold text-primary">Edit Data Pegawai Penerima Barang</h6>
@endsection
@section('content')
<div class="container">
    <form method="post" action="{{ route('data_peminjam.update', $peminjam->id) }}">
        @csrf 
        <div class="form-group">
            <label>Nama Pegawai</label>
            <input type="text" name="nama_pegawai" class="form-control">
        </div>
        <div class="form-group">
            <label>NIP</label>
            <input type="text" name="NIP" class="form-control">
        </div>
        <div class="form-group">
            <label>Jabatan</label>
            <input type="text" name="jabatan" class="form-control">
        </div>
        <div class="form-group">
    <label>Type Barang</label><br>
    <select name="type_barang" id="type_barang">
            <option value="Basic">Basic</option>
            <option value="Premium">Premium</option>
            <option value="Medium">Medium</option>
            <option value="Exclusive">Exclusive</option>
        </select>
    </div>
    <div class="form-group">
            <label>Jenis Barang</label>
            <input type="text" name="jenis_barang" class="form-control">
        </div>
    <div class="form-group">
         <label>Merk Barang</label>
         <input type="text" name="merk_barang" class="form-control">
    </div>
    <div class="form-group">
            <label>Jumlah Barang</label>
            <input type="text" name="jumlah_barang" class="form-control">
        </div>
        <div class="form-group">
            <label>Serial Number</label>
            <input type="text" name="serial_number" class="form-control">
        </div>
        <div class="form-group">
            <label>Kelengkapan Barang</label>
            <textarea name="kelengkapan_barang" id="" cols="125" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label> Tanggal Penerimaan</label>
            <input type="date" name="tanggal_penerimaan" class="form-control">
            <div>
        <button type="submit">Simpan</button>
        </div>
</div>
</form>
</div>
@endsection
    

