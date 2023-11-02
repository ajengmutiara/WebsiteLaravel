<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Laporan Data Pegawai Penerima Barang</title>
</head>
<body>
<style type="text/css">
    table {
        width: 100%; /* Lebar tabel 100% */
    }
    table tr td,
    table tr th{
        font-size: 9pt;
    }

    </style>
<div class="container">
    <div class="row">
        <center>
            <h5>Laporan Data Pegawai Penerima Barang</h5>
        </center>
        <table class="table table-striped mt-5">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Type Barang</th>
                    <th scope="col">Jenis Barang</th>
                    <th scope="col">Merk Barang</th>
                    <th scope="col">Jumlah Barang</th>
                    <th scope="col">Serial Number</th>
                    <th scope="col">Kelengkapan Barang</th>
                    <th scope="col">Tanggal Penerimaan</th>
                </tr>
            </thead>
            <tbody>
                @php 
                    $no = 0;
                @endphp
                @foreach ($data_peminjam as $peminjam)
                <tr>
                    <th scope="row">{{ ++$no }}</th>
                    <td>{{ $peminjam->nama_pegawai }}</td>
                    <td>{{ $peminjam->jabatan }}</td>
                    <td>{{ $peminjam->type_barang }}</td>
                    <td>{{ $peminjam->jenis_barang }}</td>
                    <td>{{ $peminjam->merk_barang }}</td>
                    <td>{{ $peminjam->jumlah_barang }}</td>
                    <td>{{ $peminjam->serial_number }}</td>
                    <td>{{ $peminjam->kelengkapan_barang }}</td>
                    <td>{{ $peminjam->tanggal_penerimaan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
