@extends('master')
@section('title', 'Data Tumbuhan')
@section('konten')
    <h3>Lihat Data Tumbuhan</h3>

    <a href="/tumbuhan">Kembali</a>

    <br />
    <br />
    <div class="row">
        <div class="col-1"></div>
        <div class="col-3">
            <div class="card img-fluid" style="width:200px">
                <img class="card-img-top" src="{{ asset('img/yunjin.jpeg') }}" alt="Card image" style="width:100%">
            </div>
        </div>
        <div class="col-8">
            @foreach ($tumbuhan as $t)
                <fieldset disabled>
                    <form action="/tumbuhan/update" method="post" class="form-horizontal" role="form">
                        {{ csrf_field() }}

                        <input type="hidden" name="kodetumbuhan" value="{{ $t->kodetumbuhan }}">

                        <div class = "form-group">
                            <label for = "nama" class = "col-sm-6 control-label">Nama Tumbuhan</label>
                            <div class = "col-sm-10">
                                <input type="text" required="required" name="nama" value="{{ $t->namatumbuhan }}"
                                    class="form-control">
                            </div>
                        </div>

                        <div class = "form-group">
                            <label for = "jumlah" class = "col-sm-6 control-label">Jumlah Tumbuhan</label>
                            <div class = "col-sm-10">
                                <input type="number" required="required" name="jumlah" value="{{ $t->jumlahtumbuhan }}"
                                    class="form-control">
                            </div>
                        </div>

                        <div class = "form-group">
                            <label for = "tersedia" class = "col-sm-2 control-label">Status</label>
                            <div class = "col-sm-10">
                                <input type="text" required="required" name="tersedia" value="{{ $t->tersedia }}"
                                    class="form-control">
                            </div>
                        </div>

                    </form>
                </fieldset>
            @endforeach

            <div class="row">
                <div class="col-10 text-center">
                    <a href="/tumbuhan" class="btn btn-primary w-25 p-2">Ok</a>
                </div>
                <div class="col-2"></div>
            </div>

            <br/>

        </div>
    </div>
@endsection
