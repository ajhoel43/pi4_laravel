<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\M_mahasiswa as Mahasiswa;
use View, Input, Validator, Redirect;

/**
 * Controller Mahasiswa
 */
class C_mahasiswa extends Controller
{
    public function index()
    {
    	$mahasiswas = Mahasiswa::all();
    	$mahasiswas->toArray();

    	return View::make('mahasiswa.index', compact('mahasiswas'));
    }

    public function store()
    {
    	$input = Input::all();
        $validation = Validator::make($input, Mahasiswa::$rules);

        if ($validation->passes())
        {
            Mahasiswa::create($input);

            return Redirect::route('mahasiswa.index');
        }

        return Redirect::route('mahasiswa.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    public function create()
    {
    	return View::make('mahasiswa.create');
    }

    public function update($id)
    {
    	$input = Input::all();
        $validation = Validator::make($input, Mahasiswa::$rules);
        if ($validation->passes())
        {
            $user = Mahasiswa::find($id);
            $user->update($input);
            return Redirect::route('mahasiswa.index', $id);
        }
		return Redirect::route('mahasiswa.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    public function show()
    {
    	# code...
    }

    public function destroy($id)
    {
    	Mahasiswa::find($id)->delete();
        return Redirect::route('mahasiswa.index');
    }

    public function edit($id)
    {
    	$mahasiswa = Mahasiswa::find($id);
        if (is_null($mahasiswa))
        {
            return Redirect::route('mahasiswa.index');
        }
        return View::make('mahasiswa.edit', compact('mahasiswa'));
    }
}