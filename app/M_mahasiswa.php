<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_mahasiswa extends Model
{
    protected $guarded = array('id');
	protected $fillable = array('nim', 'nama', 'alamat');

	public static $rules = array(
		'nim' => 'required',
		'nama' => 'required',
		'alamat' => 'required'
	);
}
