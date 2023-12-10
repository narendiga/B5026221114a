<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TumbuhanController extends Controller
{
	public function indext()
	{
    	// mengambil data dari table tumbuhan
        $tumbuhan = DB::table('tumbuhan')->get();

    	// mengirim data tumbuhan ke view indext
		return view('indext',['tumbuhan' => $tumbuhan]);

	}

	// method untuk menampilkan view form create tumbuhan
	public function create()
	{

		// memanggil view tambah
		return view('create');

	}

	// method untuk insert data ke table tumbuhan
	public function store(Request $request)
	{
		// insert data ke table tumbuhan
		DB::table('tumbuhan')->insert([
			'namatumbuhan' => $request->namatumbuhan,
			'jumlahtumbuhan' => $request->jumlahtumbuhan,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman tumbuhan
		return redirect('/tumbuhan');

	}

	// method untuk edit data tumbuhan
	public function editt($kodetumbuhan)
	{
		// mengambil data tumbuhan berdasarkan kode yang dipilih (beberapa)
		$tumbuhan = DB::table('tumbuhan')->where('kodetumbuhan',$kodetumbuhan)->get();
		// passing data tumbuhan yang didapat ke view editt.blade.php
		return view('editt',['tumbuhan' => $tumbuhan]);

	}

	// update data tumbuhan
	public function update(Request $request)
	{
		// update data tumbuhan
		DB::table('tumbuhan')->where('kodetumbuhan',$request->kodetumbuhan)->update([ //tidak perlu nilai balik karena nilainya hanya 1/0
			'namatumbuhan' => $request->namatumbuhan,
			'jumlahtumbuhan' => $request->jumlahtumbuhan,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman tumbuhan
		return redirect('/tumbuhan');
	}

	// method untuk hapus data tumbuhan
	public function delete($kodetumbuhan)
	{
		// menghapus data tumbuhan berdasarkan kode yang dipilih
		DB::table('tumbuhan')->where('kodetumbuhan',$kodetumbuhan)->delete();

		// alihkan halaman ke halaman tumbuhan
		return redirect('/tumbuhan');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table tumbuhan sesuai pencarian data
		$tumbuhan = DB::table('tumbuhan')
		->where('namatumbuhan','like',"%".$cari."%")
		->paginate();

    		// mengirim data tumbuhan ke view indext
		return view('indext',['tumbuhan' => $tumbuhan, 'cari' => $cari]);

	}

    public function viewt($kodetumbuhan)
    {
        // mengambil data dari table tumbuhan sesuai kode
        $tumbuhan = DB::table('tumbuhan')
        ->where('kodetumbuhan', $kodetumbuhan)
        ->get();

        return view('viewt', ['tumbuhan' => $tumbuhan]);
    }
}
