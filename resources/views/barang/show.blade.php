@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Barang
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Pembeli</label>
                            <input type="text" class="form-control " name="nama_pembeli" value="{{ $siswa->nama }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Pembelian</label>
                            <input type="text" class="form-control " name="tanggal_pembelian" value="{{ $siswa->nis }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" class="form-control " name="nama_barang" value="{{ $siswa->jenis_kelamin }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga Satuan</label>
                            <input type="text" class="form-control " name="harga_satuan" value="{{ $siswa->agama }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah Barang</label>
                            <input type="text" class="form-control" name="jumlah_barang" value="{{ $siswa->tgl_lahir }}"
                                readonly>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Total Harga</label>
                            <textarea class="form-control" name="total_harga" readonly>{{ $siswa->alamat }}</textarea>

                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('barang.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection