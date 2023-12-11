@extends('master')
@section('title', 'Tambah Data Tumbuhan')
@section('konten')
    <h3>Tambah Data Karyawan</h3>

    <a href="/karyawan">Kembali</a>

    <br />
    <br />

    <form action="/karyawan/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class = "form-group row">
            <label for = "kodepegawai" class = "col-sm-2 control-label">Kode Pegawai</label>

            <div class = "col-sm-10">
                <input name="kodepegawai" type = "text" class = "form-control" id = "kodepegawai"
                    placeholder = "Masukkan Kode Pegawai">
            </div>

        </div>

        <div class = "form-group row">
            <label for = "namalengkap" class = "col-sm-2 control-label">Nama Karyawan</label>

            <div class = "col-sm-10">
                <input name="namalengkap" type = "text" class = "form-control" id = "namalengkap"
                    placeholder = "Masukkan Nama Karyawan">
            </div>

        </div>

        <div class = "form-group row">
            <label for = "divisi" class = "col-sm-2 control-label">Divisi</label>

            <div class = "col-sm-10">
                <input name="divisi" type = "text" class = "form-control" id = "divisi"
                    placeholder = "Masukkan Asal Divisi">
            </div>

        </div>

        <div class = "form-group row">
            <label for = "departemen" class = "col-sm-2 control-label">Departemen</label>

            <div class = "col-sm-10">
                <input name="departemen" type = "text" class = "form-control" id = "departemen"
                    placeholder = "Masukkan Asal Departemen">
            </div>

        </div>

        <input type="submit" value="Simpan" class="btn btn-primary">
    </form>

    <script>
        span.innerHTML = textbox.value;
        gagal();
        function gagal() {
            alert("Maaf, Kode Pegawai yang Anda masukkan sudah ada. Silahkan gunakan Kode Pegawai lain.");
        }
    </script>
    <br>

@endsection
