<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class C_kebersihan extends Controller
{
	public function index()
	{
		$data = array('daftar' => array('Pandu', 'Ajhoel'));
		return view('kebersihan.index', $data);
	}

	public function profile($nama)
	{
		$alamat = '';
		$lama_pengabdian = '';

		if ($nama == 'pandu') {
			$alamat = 'Jl. M. Ali 1, Beji, Depok';
			$lama_pengabdian = '5 Tahun';
		} elseif ($nama == 'ajhoel') {
			$alamat = 'Jl. Palakali, Depok';
			$lama_pengabdian = '14 Tahun';
		} else {

		}

		$data = [
			'nama' => $nama,
			'alamat' => $alamat,
			'lama_pengabdian' => $lama_pengabdian
		];

		return view('kebersihan.profile', $data);
	}
}
