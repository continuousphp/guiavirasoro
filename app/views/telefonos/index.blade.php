@extends('layouts.default')

@section('content')
			<div class="panel-body">
					{{ Form::open(array('url' => '/buscar', 'class' => 'form-horizontal form-groups-bordered')) }}
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"></label>
						<div class="col-sm-6">
							{{ Form::text('texto', '', array('class' => 'form-control input-lg', 'name' => 'texto', 'id' => 'texto', 'placeholder' => 'que buscas ?')) }}
						</div>
					</div>
				{{ Form::close() }}
			</div>



<div class="main-content">

		<div class="container">
				<div class="row">
						<div class="col-md-12">



			<?php
					if (count($categoriatelefonos)>0 )  {
						echo "<h2>Buscando también: " . $categoriatelefonos->categoriatelefono . "</h2>";
					}
			?>


			<?php
					if (count($telefonos)>0 )  {
			?>


		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Apellido y nombre</th>
					<th>Telefono</th>
				</tr>
			</thead>

				<tbody>

												<?php
											foreach ($telefonos as $telefono)
											{

													// $idioma = DB::table('idiomas')->where('id', '=', $areasinteres->idiomas_id)->first();

													echo "<tr>";
											        echo "<td>";

															if ($telefono->destacado=="si") {
																	echo "<h3>";
															}

																	if ($telefono->razonsocial<>"") {
																			echo $telefono->razonsocial;
																	} else {
																			echo $telefono->apellido;
																			echo ", ";
																			echo $telefono->nombre;
																	}

															if ($telefono->destacado=="si") {
																	echo "</h3>";
															}
															echo "</td>";
															echo "<td>";
															if ($telefono->destacado=="si") {
																	echo "<h3>";
															}
																echo $telefono->telefono;
															if ($telefono->destacado=="si") {
																	echo "</h3>";
															}

															echo "</td>";
													print "</tr>";

											}


												?>


									</tbody>
								</table>

<div class="panel-heading">
	<div class="panel-title">
	</div>

	<div class="panel-options">
			<!-- {{ $telefonos->links()}} -->
	</div>
</div>



<?php

		} else {
			echo "nada mas que mostrar...";

		}


	?>

</div>
</div>
</div>
</div>


@stop
