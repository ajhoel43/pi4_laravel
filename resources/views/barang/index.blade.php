@extends('layouts.default')

@section('main')

<h1>Daftar Barang</h1>

<p>{{ link_to_route('barang.create', 'Tambahkan Barang', array('class' => 'btn btn-primary')) }}</p>

@if ($barangs->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID.</th>
                <th>Nama Barang</th>
                <th>Lokasi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($barangs as $barang)
                <tr>
                    <td>{{ $barang->id }}</td>
                    <td>{{ $barang->nama }}</td>
                    <td>{{ $barang->lokasi }}</td>
                    <td align="center">{{ link_to_route('barang.edit', 'Edit', array($barang->id), array('class' => 'btn btn-info')) }}</td>
                    <td align="center">
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('barang.destroy', $barang->id))) }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
              
        </tbody>
      
    </table>
@else
    Barang tidak ditemukan
@endif

@stop