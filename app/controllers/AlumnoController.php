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


			return View::make('verJurado');
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