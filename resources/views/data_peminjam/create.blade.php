@extends('layout.master')
@section('content')
<div class="container">
    <h4>Tambah Data Penerima</h4>
    <form method="POST" action="{{ route('data_peminjam.store') }}">
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
    <select name="type_barang">
        <option value=>Basic</option>
        <option value=>Premium</option>
        <option value=>Medium</option>
        <option value=>Exclusive</option>
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
            <textarea name="kelengkapan_barang" id="" cols="148" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label> Tanggal Penerimaan</label>
            <input type="date" name="tanggal_penerimaan" class="form-control">
</div>
</form>
</div>
@endsection
    

