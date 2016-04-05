<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventarisBrg extends Model
{
    protected $guarded = array('id');
	protected $fillable = array('lokasi', 'nama');

	public static function validation(){
		$rules = array(
			'lokasi' => 'required',
			'nama' => 'required',
		);

		return $rules;
	}
}
