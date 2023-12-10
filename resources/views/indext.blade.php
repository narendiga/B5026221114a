 @extends('master')
 @section('title', 'Data Tumbuhan')
 @section('konten')
     <h3>Data Tumbuhan</h3>

     <a href="/tumbuhan/create"> + Tambahkan Tumbuhan</a>

     <br />
     <br />

     <h5>Cari Data Tumbuhan :</h5>
     <form action="/tumbuhan/cari" method="GET">
         <input class="form-control" type="text" name="cari" placeholder="Cari Tumbuhan .."
             value="{{ old('cari', isset($cari) ? $cari : '') }}">
         <input class="btn btn-primary" type="submit" value="CARI">
     </form>
     <br />

     <table class="table table-striped table-hover">
         <tr>
             <th>Kode Tumbuhan</th>
             <th>Nama Tumbuhan</th>
             <th>Jumlah Tumbuhan</th>
             <th>Status</th>
             <th></th>
             <th></th>
             <th>Action</th>
         </tr>
         @foreach ($tumbuhan as $t)
             <tr>
                 <td>{{ $t->kodetumbuhan }}</td>
                 <td>{{ $t->namatumbuhan }}</td>
                 <td>{{ $t->jumlahtumbuhan }}</td>

                 <td style="text-align: center;">
                     <div class="custom-checkbox"
                         style="border: 2px solid {{ $t->tersedia == 'Y' ? 'green' : 'red' }}; border-radius: 10px; margin-top: 3px; background-color: {{ $t->tersedia == 'Y' ? 'lightgreen' : 'lightcoral' }};">

                         <label for="customCheckbox{{ $t->kodetumbuhan }}"
                             style="color: {{ $t->tersedia == 'Y' ? 'green' : 'red' }};">
                             {{ $t->tersedia == 'Y' ? 'Y' : 'N' }}
                         </label>
                     </div>
                 </td>

                 <td></td>
                 <td></td>

                 <td>
                     <a href="/tumbuhan/viewt/{{ $t->kodetumbuhan }}" class="btn btn-success">View</a>
                     <a href="/tumbuhan/editt/{{ $t->kodetumbuhan }}" class="btn btn-warning">Edit</a>
                     <a href="/tumbuhan/delete/{{ $t->kodetumbuhan }}" class="btn btn-danger">Hapus</a>
                 </td>
             </tr>
         @endforeach
     </table>
     <br/>
 @endsection
