@extends('layouts.default')

@section('main')

<h1>Edit User</h1>
{{ Form::model($mahasiswa, array('method' => 'PATCH', 'route' => array('mahasiswa.update', $mahasiswa->id))) }}
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
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('mahasiswa.show', 'Cancel', $mahasiswa->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@stop