@extends('layouts.default')

@section('main')

<h1>Input Barang</h1>

{{ Form::open(array('route' => 'barang.store')) }}
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
            {{ Form::submit('Submit', array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@stop