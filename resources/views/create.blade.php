@extends('master')
@section('title', 'Tambah Data Tumbuhan')
@section('konten')
    <h3>Tambahkan Tumbuhan</h3>

    <a href="/tumbuhan">Kembali</a>

    <br />
    <br />


    <form action="/tumbuhan/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class = "form-group row">
            <label for = "namatumbuhan" class = "col-sm-2 control-label">Nama Tumbuhan</label>

            <div class = "col-sm-10">
                <input name="namatumbuhan" type = "text" class = "form-control" id = "namatumbuhan"
                    placeholder = "Masukkan Nama Tumbuhan">
            </div>

        </div>

        <div class = "form-group row">
            <label for = "jumlahtumbuhan" class = "col-sm-2 control-label">Jumlah Tumbuhan</label>

            <div class = "col-sm-10">
                <input name="jumlahtumbuhan" type = "number" class = "form-control" id = "jumlahtumbuhan"
                    placeholder = "Masukkan Jumlah Tumbuhan">
            </div>

        </div>

        <div class = "form-group row">
            <label for = "tersedia" class = "col-sm-2 control-label">Status</label>

            <div class = "col-sm-10">
                <input name="tersedia" type = "text" class = "form-control" id = "tersedia"
                    placeholder = "Masukkan Status Ketersediaan">
            </div>

        </div>

        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>

@endsection
