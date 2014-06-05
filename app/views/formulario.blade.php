@extends('master')


@section('header')
    @parent
    From the child template
@stop


@section('content')

{{ Form::open() }}

    {{ Form::label('email', 'E-Mail Address') }}: {{ Form::text('email') }}

    {{ Form::checkbox('chkbox', 'valorrrr', true) }}

    {{ Form::select('size', array('L' => 'Large', 'S' => 'Small')) }}

    <br />

    {{ Form::select('animal', array(
        'Cats' => array('leopard' => 'Leopard'),
        'Dogs' => array('spaniel' => 'Spaniel'),
    )) }}

{{ Form::close() }}

@stop