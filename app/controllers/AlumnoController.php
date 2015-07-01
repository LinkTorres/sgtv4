	<?php

	class AlumnoController extends BaseController {

		/*
		|--------------------------------------------------------------------------
		| Default Home Controller
		|--------------------------------------------------------------------------
		|
		| You may wish to use controllers instead of, or in addition to, Closure
		| based routes. That's great! Here is an example controller method to
		| get you started. To route to this controller, just add the route:
		|
		|	Route::get('/', 'HomeController@showWelcome');
		|
		*/



		
		/*
		==========================================
		Apartir de aqui toco Hilario
		==========================================
		*/
		public function showLoginPas()
		{
			return View::make('loginPas');
		}

		public function olvidoPas()
		{
			return View::make('olvidopassword');
		}

		public function blocPan()
		{
			return View::make('BloquearPantalla');
		}

		public function verindexPas()
		{
			return View::make('indexPAS');
		}

		public function registro()
		{
			return View::make('RegistroAlumno');
		}

		public function altaRegistro()
		{
			$boleta = e(Input::get('boleta')); 
			$tt = e(Input::get('tt'));
			$password1 = e(Input::get('password'));
			$password2 = e(Input::get('password2'));
			$nombre = e(Input::get('nombre')); 
			$ap = e(Input::get('ap'));
			$am = e(Input::get('am'));
			$genero = e(Input::get('genero'));
			$mail = e(Input::get('mail'));
			$mail2 = e(Input::get('mail2'));
			$carrera = e(Input::get('carrera'));
			$opcion = e(Input::get('opcion'));
			$inicio = e(Input::get('inicio'));

			Log::info("boleta" . print_r($boleta, true));

			Log::info("tt" . print_r($tt, true));

			if(strcmp($password1,$password2))
			{
				$error = 'Las contraseñas deben coincidir ';
				return Redirect::to('Registro')
						->with('error',$error)
					    ->withInput();
			}

			if(strcmp($mail,$mail2))
			{
				$error = 'El correo debe coincidir ';
				return Redirect::to('Registro')
						->with('error',$error)
					    ->withInput();
			}

			$pro=DB::table('Pasante')
	            ->where('Boleta',$boleta)
	            ->where('TT_Num_TT',$tt)
	            ->get();

	        Log::info("Pasante" . print_r($pro, true));

	        if(count($pro)>0)
	        {
	        	DB::table('Pasante')
	            ->where('Boleta',$boleta)
	            ->update(array('Carrera_id_Carrera' =>$carrera));

	            $idUser= DB::table('Pasante')
	           			 ->where('Boleta',$boleta)->pluck('Usuario_id_Usuario');

	            DB::table('users')
	            ->where('id',$idUser)
	            ->update(array('Nombre' => $nombre, 'ApellidoP' => $ap, 'ApellidoM' => $am, 'Genero' => $genero,'email' => $mail, 'password' => Hash::make($password1),'username' => $boleta));
			
	            return Redirect::to('loginPas');

	        }


			
		}
		/*
		==========================================
		Apartir de termina lo que  toco Hilario
		==========================================
		*/

		public function verJurado()
		{
			$boleta = Session::get('username');
			$tt=DB::table('Pasante')
				->join('TT','Pasante.TT_Num_TT','=','TT.Num_TT')
	            ->where('Boleta',$boleta)
	            ->pluck('TT_Num_TT');

	        $Directores=DB::table('Jurado')
	        						->join('Profesor','Profesor.Cedula','=','Jurado.Profesor_Cedula')
	        						->join('users', 'users.id', '=', 'Profesor.Usuario_id_Usuario')
	        						->where('TT_Num_TT','=',$tt)->where('Participacion','Director')
	        						->select('Nombre','ApellidoP','ApellidoM')->get();
	        	$Sinodales=DB::table('Jurado')->join('Profesor','Profesor.Cedula','=','Jurado.Profesor_Cedula')
	        						->join('users', 'users.id', '=', 'Profesor.Usuario_id_Usuario')
	        						->where('TT_Num_TT','=',$tt)->where('Participacion','Sinodal')
	        						->select('Nombre','ApellidoP','ApellidoM')->get();


			return View::make('verJurado')
			->with('tt',$tt)
			->with('Directores',$Directores)
			->with('Sinodales',$Sinodales);
		}

		public function verDocumentacion()
		{
			return View::make('verDocumentacion');
		}

		public function generarSolicitud()
		{
			$Profes= DB::table('users')
	            ->join('Profesor', 'users.id', '=', 'Profesor.Usuario_id_Usuario')
	            ->where('Rol','Profesor')
	            ->get();

	        $boleta = Session::get('username');

	        $pasante=DB::table('Pasante')
	        				->join('users','users.id','=','Pasante.Usuario_id_Usuario')
	        				->join('TT','TT.Num_TT','=','Pasante.TT_Num_TT')
	        				->join('Jurado','Jurado.TT_Num_TT','=','TT.Num_TT')
	        				->join('Profesor','Profesor.Cedula','=','Jurado.Profesor_Cedula')
	        				->where('Boleta','=',$boleta)
	        				->get()[0];

	        $nombre=DB::table('Pasante')
	        				->join('users','users.id','=','Pasante.Usuario_id_Usuario')
	        				->where('Boleta','=',$boleta)
	        				->pluck('Nombre');
	        $apellidoP=DB::table('Pasante')
	        				->join('users','users.id','=','Pasante.Usuario_id_Usuario')
	        				->where('Boleta','=',$boleta)
	        				->pluck('ApellidoP');
	        $apellidoM=DB::table('Pasante')
	        				->join('users','users.id','=','Pasante.Usuario_id_Usuario')
	        				->where('Boleta','=',$boleta)
	        				->pluck('ApellidoM');
	        $idTT=DB::table('Pasante')
	        				->join('users','users.id','=','Pasante.Usuario_id_Usuario')
	        				->where('Boleta','=',$boleta)
	        				->pluck('TT_Num_TT');
	        $hora_inicio=DB::table('Pasante')
	        				->join('users','users.id','=','Pasante.Usuario_id_Usuario')
	        				->join('Historial_Protesta','Historial_Protesta.Pasante_Boleta','=','Pasante.Boleta')
	        				->join('Protesta','Protesta.id_Protesta','=','Historial_Protesta.Protesta_id_Protesta')
	        				->where('Boleta','=',$boleta)
	        				->pluck('Hora_inicio');
	        $fecha=DB::table('Pasante')
	        				->join('users','users.id','=','Pasante.Usuario_id_Usuario')
	        				->join('Historial_Protesta','Historial_Protesta.Pasante_Boleta','=','Pasante.Boleta')
	        				->join('Protesta','Protesta.id_Protesta','=','Historial_Protesta.Protesta_id_Protesta')
	        				->where('Boleta','=',$boleta)
	        				->pluck('Fecha');
			 $anio=DB::table('Pasante')
							->join('users','users.id','=','Pasante.Usuario_id_Usuario')
							->join('Historial_Protesta','Historial_Protesta.Pasante_Boleta','=','Pasante.Boleta')
							->join('Protesta','Protesta.id_Protesta','=','Historial_Protesta.Protesta_id_Protesta')
							->where('Boleta','=',$boleta)
							->pluck('Fecha');

            $director=DB::table('Jurado')
	        						->join('Profesor','Profesor.Cedula','=','Jurado.Profesor_Cedula')
	        						->join('users', 'users.id', '=', 'Profesor.Usuario_id_Usuario')
	        						->where('TT_Num_TT','=',$idTT)->where('Participacion','Director')
	        						->select('Nombre')->get()[0];

	       Log::info("Jurado Directores: " . print_r($director->Nombre, true));

	        $director2=DB::table('Jurado')
	        						->join('Profesor','Profesor.Cedula','=','Jurado.Profesor_Cedula')
	        						->join('users', 'users.id', '=', 'Profesor.Usuario_id_Usuario')
	        						->where('TT_Num_TT','=',$idTT)->where('Participacion','Director')
	        						->select('Nombre')->get()[1];

	        $sinodal1=DB::table('Jurado')->join('Profesor','Profesor.Cedula','=','Jurado.Profesor_Cedula')
	        						->join('users', 'users.id', '=', 'Profesor.Usuario_id_Usuario')
	        						->where('TT_Num_TT','=',$idTT)->where('Participacion','Sinodal')
	        						->select('Nombre')->get()[0];

	        $sinodal2=DB::table('Jurado')->join('Profesor','Profesor.Cedula','=','Jurado.Profesor_Cedula')
	        						->join('users', 'users.id', '=', 'Profesor.Usuario_id_Usuario')
	        						->where('TT_Num_TT','=',$idTT)->where('Participacion','Sinodal')
	        						->select('Nombre')->get()[1];

	        $sinodal3=DB::table('Jurado')->join('Profesor','Profesor.Cedula','=','Jurado.Profesor_Cedula')
	        						->join('users', 'users.id', '=', 'Profesor.Usuario_id_Usuario')
	        						->where('TT_Num_TT','=',$idTT)->where('Participacion','Sinodal')
	        						->select('Nombre')->get()[2];

	        $cedulaDirector=DB::table('Jurado')
	        						->join('Profesor','Profesor.Cedula','=','Jurado.Profesor_Cedula')
	        						->join('users', 'users.id', '=', 'Profesor.Usuario_id_Usuario')
	        						->where('TT_Num_TT','=',$idTT)->where('Participacion','Director')
	        						->select('Cedula')->get()[0];
	        $cedulaDirector2=DB::table('Jurado')
	        						->join('Profesor','Profesor.Cedula','=','Jurado.Profesor_Cedula')
	        						->join('users', 'users.id', '=', 'Profesor.Usuario_id_Usuario')
	        						->where('TT_Num_TT','=',$idTT)->where('Participacion','Director')
	        						->select('Cedula')->get()[1];

	        $cedulaSinodal1=DB::table('Jurado')->join('Profesor','Profesor.Cedula','=','Jurado.Profesor_Cedula')
	        						->join('users', 'users.id', '=', 'Profesor.Usuario_id_Usuario')
	        						->where('TT_Num_TT','=',$idTT)->where('Participacion','Sinodal')
	        						->select('Cedula')->get()[0];

	        $cedulaSinodal2=DB::table('Jurado')->join('Profesor','Profesor.Cedula','=','Jurado.Profesor_Cedula')
	        						->join('users', 'users.id', '=', 'Profesor.Usuario_id_Usuario')
	        						->where('TT_Num_TT','=',$idTT)->where('Participacion','Sinodal')
	        						->select('Cedula')->get()[1];

	        $cedulaSinodal3=DB::table('Jurado')->join('Profesor','Profesor.Cedula','=','Jurado.Profesor_Cedula')
	        						->join('users', 'users.id', '=', 'Profesor.Usuario_id_Usuario')
	        						->where('TT_Num_TT','=',$idTT)->where('Participacion','Sinodal')
	        						->select('Cedula')->get()[2];

	        $opcion=DB::table('Pasante')
	        				->join('users','users.id','=','Pasante.Usuario_id_Usuario')
	        				->where('Boleta','=',$boleta)
	        				->pluck('Opcion_Titulacion');

	        $carrera=DB::table('Pasante')
	        				->join('users','users.id','=','Pasante.Usuario_id_Usuario')
	        				->join('Carrera','Carrera.id_Carrera','=','Pasante.Carrera_id_Carrera')
	        				->where('Boleta','=',$boleta)
	        				->pluck('Nombre_Carrera');

	        $genero=DB::table('Pasante')
	        				->join('users','users.id','=','Pasante.Usuario_id_Usuario')
	        				->where('Boleta','=',$boleta)
	        				->pluck('Genero');

	        $hora_fin=DB::table('Pasante')
	        				->join('users','users.id','=','Pasante.Usuario_id_Usuario')
	        				->join('Historial_Protesta','Historial_Protesta.Pasante_Boleta','=','Pasante.Boleta')
	        				->join('Protesta','Protesta.id_Protesta','=','Historial_Protesta.Protesta_id_Protesta')
	        				->where('Boleta','=',$boleta)
	        				->pluck('Hora_Fin');

	        $acta=DB::table('Pasante')
	        				->join('users','users.id','=','Pasante.Usuario_id_Usuario')
	        				->where('Boleta','=',$boleta)
	        				->pluck('Acta_Folio');

			$html= View::make('solicitudtitulacion/solicitud',$Profes)
			->with('Profes',$Profes)
			->with('hora_inicio',substr($hora_inicio,0,5))
			->with('dia',substr($fecha, -2))
		    ->with('mes',substr($fecha, -5,2))
			->with('anio',substr($fecha, 0,4))
			->with('director',"$director->Nombre")
			->with('director2',"$director2->Nombre")
			->with('sinodal1',"$sinodal1->Nombre")
			->with('sinodal2',"$sinodal2->Nombre")
			->with('sinodal3',"$sinodal3->Nombre")
			->with('opcion',"$opcion")
			->with('carrera',"$carrera")
			->with('nombre',"$pasante->Nombre")
			->with('apellidoP',"$pasante->ApellidoP")
			->with('apellidoM',"$pasante->ApellidoM")
			->with('genero',"$genero")
			->with('hora_fin',substr($hora_fin,0,5))
			->with('boleta',"$boleta")
			->with('acta',"$acta")
			->with('cedulaDirector',"$cedulaDirector->Cedula")
			->with('cedulaDirector2',"$cedulaDirector2->Cedula")
			->with('cedulaSinodal1',"$cedulaSinodal1->Cedula")
			->with('cedulaSinodal2',"$cedulaSinodal2->Cedula")
			->with('cedulaSinodal3',"$cedulaSinodal3->Cedula");

			$html2= View::make('solicitudtitulacion/solicitud');
			//$html = View::make('GestionarProfesores')->with(array('Profes'=>$Profes));
			return PDF::load($html2, 'letter', 'portrait')->show();
		}

	}

	class Auxilio {

		public static function verificarPasante($data,$nombre,$tt)
		{
			
			$pro = DB::table('Pasante')->where('Boleta',$data)->pluck('TT_Num_TT');
			if(count($pro)>0)
			{
				$error = 'Ya has registrado a Pasante '+$nombre;
				return Redirect::to('gestionarTT')
						->with('error',$error)
					    ->withInput();
			}
			
			$id = DB::table('users')->insertGetId(array('Rol' => 'Alumno'));
			DB::table('Pasante')->insert(array('Boleta' => $data,'TT_Num_TT' => $tt,'Usuario_id_Usuario' => $id));
		}

	}


	class TrabajoTerminal {
		var $numTT;
		var $alumnos;
		var $directores;
		var $sinodales;
	}