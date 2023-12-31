@extends('layouts.master')
@section('title')
<h6 class="m-0 font-weight-bold text-primary">Data Pegawai Penerima Barang</h6>
@endsection

@section('content')
@include('_partial/flash_message')
<div class="card-body">
    <p align="right">
        <p align="left"><a href="{{route('data_peminjam.data_peminjam_pdf')}}" class="btn btn-primary">Download Data Pegawai</a></p>
        <p align="left"><a href="{{route('data_peminjam.data_peminjam_pdf2')}}" class="btn btn-primary">Download Surat Berita Acara Pegawai</a></p>
        <a href="{{ route('data_peminjam.create') }}" class="btn btn-primary">Tambah Data Penerima Barang</a>
        <form action="{{ route('data_peminjam.create')}}" method="get">@csrf
            <input type="text" name="kata" placeholder="cari...">
        </form>
    </p>
    <table class="table data-tables">
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
@endsection
