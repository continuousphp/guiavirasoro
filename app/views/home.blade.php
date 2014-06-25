@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
{{trans('pages.helloworld')}}
@stop

{{-- Content --}}
@section('content')
<div class="container">
<div class="panel-body">
          {{ Form::open(array('url' => '/buscar', 'class' => 'form-horizontal form-groups-bordered')) }}
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"></label>
						<div class="col-sm-8">
              {{ Form::text('texto', '', array('class' => 'form-control input-lg', 'name' => 'texto', 'id' => 'texto', 'placeholder' => 'que buscas ?')) }}
						</div>
					</div>
				{{ Form::close() }}
			</div>
  </div>
@stop
