@extends('master')
@section('title', 'Edit Data Tumbuhan')
@section('konten')
    <h3>Edit Data Tumbuhan</h3>

    <a href="/tumbuhan">Kembali</a>

    <br />
    <br />

    @foreach ($tumbuhan as $t)
        <form action="/tumbuhan/update" method="post" class="form-horizontal" role="form">
            {{ csrf_field() }}

            <input type="hidden" name="kodetumbuhan" value="{{ $t->kodetumbuhan }}">

            <div class = "form-group row">
                <label for = "namatumbuhan" class = "col-sm-2 control-label">Nama Tumbuhan</label>

                <div class = "col-sm-10">
                    <input type="text" required="required" name="namatumbuhan" value="{{ $t->namatumbuhan }}"
                        class="form-control">
                </div>

            </div>

            <div class = "form-group row">
                <label for = "jumlahtumbuhan" class = "col-sm-2 control-label">Jumlah Tumbuhan</label>

                <div class = "col-sm-10">
                    <input type="number" required="required" name="jumlahtumbuhan" value="{{ $t->jumlahtumbuhan }}"
                        class="form-control">
                </div>

            </div>

            <div class = "form-group row">
                <label for = "tersedia" class = "col-sm-2 control-label">Status</label>

                <div class = "col-sm-10">
                    <input type="text" required="required" name="tersedia" value="{{ $t->tersedia }}"
                        class="form-control">
                </div>

            </div>

            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
    @endforeach
@endsection
