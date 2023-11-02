@extends('layouts.master')
@section('content')
@if(count($data_peminjam))
<h4>Data Peminjam</h4>

@include('_partial/flash_message')

<p align="right">
    <a href="{{ route('data_peminjam.create') }}" class="btn btn-primary">Tambah Data Peminjam</a>
</p>

<form method="get" action="{{ route('data_peminjam.search') }}">
    @csrf
    <div class="row align-items-center mb-3">
        <div class="col-4">
            <input type="text" id="kata" class="form-control" name="kata" placeholder="Cari...">
        </div>
    </div>
</form>

<table class="table table-striped">
    <thead>
        <tr>
                <th>No</th>
                <th>Nama Pegawai</th>
                <th>NIP</th>
                <th>Jabatan</th>
                <th>Type Barang</th>
                <th>Jenis Barang</th>
                <th>Merk Barang</th>
                <th>Jumlah Barang</th>
                <th>Serial Number</th>
                <th>Kelengkapan Barang</th>
                <th>Tanggal Penerimaan</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_peminjam as $peminjam)
            <tr>
                <td>{{ $peminjam->id }}</td>
                <td>{{ $peminjam->nama_pegawai }}</td>
                <td>{{ $peminjam->NIP }}</td>
                <td>{{ $peminjam->jabatan }}</td>
                <td>{{ $peminjam->type_barang }}</td>
                <td>{{ $peminjam->jenis_barang }}</td>
                <td>{{ $peminjam->merk_barang }}</td>
                <td>{{ $peminjam->jumlah_barang }}</td>
                <td>{{ $peminjam->serial_number }}</td>
                <td>{{ $peminjam->kelengkapan_barang }}</td>
                <td>{{ $peminjam->tanggal_penerimaan }}</td>
                <td><a href="{{ route('data_peminjam.edit', $peminjam->id) }}" class="btn btn-warning btn-sm">Edit</a></td>
                <td>
                    <form action="{{ route('data_peminjam.destroy', $peminjam->id) }}" method="post">
                        @csrf
                           <button class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pull-left">
        <strong>Jumlah Penerima : {{ $jumlah_peminjam }}</strong>
        </strong>
        <p>{{ $data_peminjam->links()}}</p>
    </div>
</div>
@else
<div>
        <h4>Data {{ $cari }} tidak ditemukan</h4>
        <a href="/data_peminjam">Kembali</a>
    </div>
@endif
@endsection
