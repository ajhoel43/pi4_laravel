@extends('layouts.default')

@section('main')

<h1>Edit Detail Barang</h1>
{{ Form::model($barang, array('method' => 'PATCH', 'route' => array('barang.update', $barang->id))) }}
    <ul>
        <li>
            {{ Form::label('nama', 'Nama Barang:') }}
            {{ Form::text('nama') }}
        </li>
        <li>
            {{ Form::label('lokasi', 'Lokasi') }}
            {{ Form::radio('lokasi', 'Jakarta') }} Jakarta<br>
            {{ Form::radio('lokasi', 'Depok') }} Depok<br>
            {{ Form::radio('lokasi', 'Bogor') }} Bogor<br>
        </li>
        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('barang.show', 'Cancel', $barang->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@stop