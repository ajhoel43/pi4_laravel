@extends('layouts.default')

@section('main')

<h1>Daftar Nama Mahasiswa</h1>

<p>{{ link_to_route('mahasiswa.create', 'Add new user') }}</p>

@if ($mahasiswas->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Nomor Induk</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->alamat }}</td>
                    <td align="center">{{ link_to_route('mahasiswa.edit', 'Edit', array($mahasiswa->id), array('class' => 'btn btn-info')) }}</td>
                    <td align="center">
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('mahasiswa.destroy', $mahasiswa->id))) }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
              
        </tbody>
      
    </table>
@else
    Mahasiswa tidak ditemukan
@endif

@stop