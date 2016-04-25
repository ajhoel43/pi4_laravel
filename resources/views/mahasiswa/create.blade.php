@extends('layouts.default')

@section('main')

<h1>Create User</h1>

{{ Form::open(array('route' => 'mahasiswa.store')) }}
    <ul>
        <li>
            {{ Form::label('nim', 'Nomor Induk:') }}
            {{ Form::text('nim') }}
        </li>

        <li>
            {{ Form::label('nama', 'Nama :') }}
            {{ Form::text('nama') }}
        </li>

        <li>
            {{ Form::label('alamat', 'Alamat :') }}
            {{ Form::textarea('alamat') }}
        </li>
        <li>
            {{ Form::submit('Submit', array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@stop