@extends('master')
@section('title', 'Data Karyawan')
@section('konten')
    <h3>Data Karyawan</h3>

    <br />
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Karyawan</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Action</th>
        </tr>
        @foreach ($karyawan as $k)
            <tr>
                <td>{{ $k->kodepegawai }}</td>
                <td>{{ strtoupper($k->namalengkap) }}</td>
                <td>{{ $k->divisi }}</td>
                <td>{{ strtolower($k->departemen) }}</td>
                <td>
                    <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus Data</a>
                </td>
            </tr>
        @endforeach
    </table>
    <br/>

    <a href="/karyawan/tambahk"> + Tambah Data</a>
    <br/>
    <br/>
@endsection
