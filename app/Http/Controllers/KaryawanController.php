<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanController extends Controller
{
	public function indexdd()
	{
        $karyawan = DB::table('karyawan')->get();

		return view('indexdd',['karyawan' => $karyawan]);
	}

	public function tambahk()
	{
		return view('tambahk');
	}

	public function store(Request $request)
	{

        $existing = DB::table('karyawan')->where('kodepegawai', $request->kodepegawai)->first();

        if ($existing) {
            return redirect('/karyawan/tambahk')->with('error', 'Maaf, Kode Pegawai yang Anda masukkan sudah ada. Silahkan gunakan Kode Pegawai lain.');
        }

		DB::table('karyawan')->insert([
			'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
            'departemen' => $request->departemen
		]);

		return redirect('/karyawan');
	}

	public function update(Request $request)
	{
		DB::table('karyawan')->where('kodepegawai',$request->kodepegawai)->update([ //tidak perlu nilai balik karena nilainya hanya 1/0
			'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
            'departemen' => $request->departemen
		]);

		return redirect('/karyawan');
	}

	public function hapus($kodepegawai)
	{
		DB::table('karyawan')->where('kodepegawai',$kodepegawai)->delete();

		return redirect('/karyawan');
	}
}
