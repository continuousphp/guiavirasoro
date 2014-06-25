@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
{{trans('pages.register')}}
@stop

{{-- Content --}}
@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {{ Form::open(array('action' => 'TelefonosController@store')) }}

            <h2>Sugerir un telefono</h2>
            <br>

            <div class="form-group">
                {{ Form::text('razonsocial', null, array('class' => 'form-control', 'placeholder' => 'Apellido y nombre o razonsocial', 'id' => 'razonsocial')) }}
            </div>

            <div class="form-group">
                {{ Form::text('telefono', null, array('class' => 'form-control', 'placeholder' => 'telefono', 'id' => 'telefono')) }}
            </div>

            <div class="form-group">
                {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'email', 'id' => 'email')) }}
            </div>


            {{ Form::submit("Enviar", array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}
    </div>
</div>


@stop
