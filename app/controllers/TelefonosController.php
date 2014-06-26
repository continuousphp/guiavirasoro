<?php

class TelefonosController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function buscar()
	{

				$categoriatelefonos_id = 0;

				$q = Input::get('texto',"");

				if ($q == "") {
					return View::make('home');
				}


				$busqueda = new Busqueda;
				$busqueda->busqueda = $q;
				$busqueda->save();

				$categoriatelefonos = DB::table('categoriatelefonos');
				if ($q<>"") {
					$categoriatelefonos = $categoriatelefonos->where('categoriatelefono', 'like', '%' . $q . '%')->first();
					if ($categoriatelefonos) {
						$categoriatelefonos_id = $categoriatelefonos->id;
					}
				}

				// if ($categoriatelefonos_id > 0) {
				//
				// 		$categoriatelefonos = DB::table('telefonos');
				// 			$categoriatelefonos = $categoriatelefonos->where('categoriatelefonos_id', '=', $categoriatelefonos_id);
				// 			$categoriatelefonos = $categoriatelefonos->orderBy('destacado');
				// 			$categoriatelefonos = $categoriatelefonos->orderBy('razonsocial');
				// 		$categoriatelefonos = $categoriatelefonos->paginate(30);
				//
				// }



				$telefonos = DB::table('telefonos');
				if ($q<>"") {
					$telefonos = $telefonos->where('apellido', 'like', '%' . $q . '%');

					if ($categoriatelefonos_id > 0 ){
							$telefonos = $telefonos->orWhere('categoriatelefonos_id', '=', $categoriatelefonos_id);
					}

					$telefonos = $telefonos->orWhere('nombre', 'like', '%' . $q . '%');
					$telefonos = $telefonos->orWhere('razonsocial', 'like', '%' . $q . '%');
					$telefonos = $telefonos->orWhere('telefono', 'like', '%' . $q . '%');
					$telefonos = $telefonos->orderBy('destacado');
				}

				$telefonos = $telefonos->paginate(30);

				$title = "Resultados";
				return View::make('telefonos.index', array('title' => $title, 'telefonos' => $telefonos, 'categoriatelefonos' => $categoriatelefonos));

	}




   public function search(){

        $term = Input::get('term');
        $areasinteress = DB::table('areasinteress')->where('areasinteres', 'like', '%' . $term . '%')->get();
        $adevol = array();
        if (count($areasinteress) > 0) {
            foreach ($areasinteress as $areasinteres)
                {
                    $adevol[] = array(
                        'id' => $areasinteres->id,
                        'value' => $areasinteres->areasinteres,
                    );
            }
        } else {
                    $adevol[] = array(
                        'id' => 0,
                        'value' => 'no hay coincidencias para ' .  $term
                    );
        }

        return json_encode($adevol);

    }




	/**
	* Show the form for creating a new user.
	*
	* @return Response
	*/
	public function create()
	{
				return View::make('telefonos.create');
	}





	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$rules = [
			'razonsocial' => 'required',
			'telefono' => 'required',
			'email' => 'required',
		];


		if (! Telefono::isValid(Input::all(),$rules)) {

			return Redirect::back()->withInput()->withErrors(Telefono::$errors);

		}


		$telefono = new Telefono;

		$telefono->razonsocial = Input::get('razonsocial');
		$telefono->nombre = "";
		$telefono->apellido = "";
		$telefono->callenumero = "";
		$telefono->piso = "";
		$telefono->manzana = "";
		$telefono->casa = "";
		$telefono->caracteristica_telefono = "";
		$telefono->telefono = Input::get('telefono');
		$telefono->email = Input::get('email');
		$telefono->barrios_id = 0;
		$telefono->calles_id = 0;
		$telefono->categoriatelefonos_id = 0;
		$telefono->destacado="no";
		$telefono->activo="no";

		$telefono->save();

		return Redirect::to('/');

	}






}
