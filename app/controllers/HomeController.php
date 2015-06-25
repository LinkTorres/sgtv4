	<?php

	class HomeController extends BaseController {

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

		public function showWelcome()
			{
			return View::make('hello');
			}

		public function home()
		{
			return View::make('indexCATT');
		}

		public function altaProfesores()
		{
			$Profes= DB::table('Usuario')
	            ->join('Profesor', 'Usuario.id_Usuario', '=', 'Profesor.Usuario_id_Usuario')
	            ->where('Rol','Profesor')
	            ->get();
	        Log::info("Logging an array: " . print_r($Profes, true));




			return View::make('GestionarProfesores',$Profes)
			->with('Profes',$Profes);
		}

		public function postaltaProfesores()
		{
			$cedula = e(Input::get('cedula')); 
			$nombre = e(Input::get('nombre')); 
			$ap = e(Input::get('ap'));
			$am = e(Input::get('am'));
			$genero = e(Input::get('genero'));
			$cargo = e(Input::get('cargo'));
			$mail = e(Input::get('mail'));

			$pro = DB::table('Profesor')->where('Cedula',$cedula)->pluck('Cargo');
			if(count($pro)>0)
			{
				$error = 'Ya has registrado a este profesor';
				return Redirect::to('gestionProfesores')
						->with('error',$error)
					    ->withInput();
			}
			else
			{
				$pro=DB::table('Profesor')->where('Cargo','Director')->pluck('Cargo');
				$pro2=DB::table('Profesor')->where('Cargo','Subdirector')->pluck('Cargo');
				if(count($pro)>0 or count($pro2)>0)
				{
					$error = 'Ya hay un profesor con ese cargo.';
					return Redirect::to('gestionProfesores')
						->with('error',$error)
					    ->withInput();
				}
				else
				{
					$id = DB::table('Usuario')->insertGetId(array('Nombre' => $nombre, 'ApellidoP' => $ap, 'ApellidoM' => $am, 'Genero' => $genero,'Correo' => $mail,'Rol' => 'Profesor'));
					DB::table('Profesor')->insert(array('Cedula' => $cedula, 'Cargo' => $cargo, 'Usuario_id_Usuario' => $id));
					$correcto = "El profesor ha sido agregado correctamente";
			$data='';
					Mail::send('emails.auth.reminder', $data, function($message)
	{
	  $message->to('h_cosmo@hotmail.com', 'Philip Brown')
	          ->subject('Welcome to Cribbb!');
	});


	           return Redirect::to('gestionProfesores')
						->with('correcto',$correcto);
				}
			}

			
		}


		public function actualizarProfesores()
		{
			$cedula = e(Input::get('ced')); 
			$nombre = e(Input::get('nombre')); 
			$ap = e(Input::get('ap'));
			$am = e(Input::get('am'));
			$genero = e(Input::get('genero'));
			$cargo = e(Input::get('cargo'));
			$mail = e(Input::get('mail'));

			$idUser = DB::table('Profesor')->where('Cedula',$cedula)->pluck('Usuario_id_Usuario');
			
				DB::table('Usuario')
	            ->where('id_Usuario',$idUser)
	            ->update(array('Nombre' => $nombre, 'ApellidoP' => $ap, 'ApellidoM' => $am, 'Genero' => $genero,'Correo' => $mail,'Rol' => 'Profesor'));
			

				DB::table('Profesor')
	            ->where('Cedula',$cedula)
	            ->update(array('Cargo' => $cargo));

	            $correcto = "El profesor ha sido actualizado correctamente";

	           return Redirect::to('gestionProfesores')
						->with('correcto',$correcto);
					 	
		}


		public function altatt()
		{

			$Profes= DB::table('Usuario')
	            ->join('Profesor', 'Usuario.id_Usuario', '=', 'Profesor.Usuario_id_Usuario')
	            ->where('Rol','Profesor')
	            ->get();
	       
	        Log::info("Profes" . print_r($Profes, true));
	        

	        /*$TT = DB::table('TT')
	        		->join('Jurado','TT.Num_TT','=','Jurado.TT_Num_TT')
	        		->join('Pasante','TT.Num_TT','=','Pasante.TT_Num_TT')
	        		->get();*/

	        $tt1 = DB::table('TT')->get();
	        
	        $TT = array('0');

	        array_pop($TT);

	        foreach ($tt1 as $item) {
	        	Log::info("Trabajo terminal " . print_r($item->Num_TT, true));

	        	$pasantes=DB::table('Pasante')
	        				->join('Usuario','Usuario.id_Usuario','=','Pasante.Usuario_id_Usuario')
	        				->where('TT_Num_TT','=',$item->Num_TT)
	        				->select('Nombre','ApellidoP','ApellidoM')->get();
	        	$Directores=DB::table('Jurado')
	        						->join('Profesor','Profesor.Cedula','=','Jurado.Profesor_Cedula')
	        						->join('Usuario', 'Usuario.id_Usuario', '=', 'Profesor.Usuario_id_Usuario')
	        						->where('TT_Num_TT','=',$item->Num_TT)->where('Participacion','Director')
	        						->select('Nombre','ApellidoP','ApellidoM')->get();
	        	$Sinodales=DB::table('Jurado')->join('Profesor','Profesor.Cedula','=','Jurado.Profesor_Cedula')
	        						->join('Usuario', 'Usuario.id_Usuario', '=', 'Profesor.Usuario_id_Usuario')
	        						->where('TT_Num_TT','=',$item->Num_TT)->where('Participacion','Sinodal')
	        						->select('Nombre','ApellidoP','ApellidoM')->get();Log::info("Putos : " . print_r($pasantes, true));
	        	$trabajo = new TrabajoTerminal();
	        	$trabajo->numTT = $item->Num_TT;
	        	$trabajo->alumnos = $pasantes;
	        	$trabajo->directores = $Directores;
	        	$trabajo->sinodales = $Sinodales;

	        	array_push($TT,$trabajo);

	        }
	        
			Log::info("Trabajos Terminales: " . print_r($TT, true));
	       

			return View::make('GestionarTT',$Profes)
			->with('Profes',$Profes)
			->with('TT',$TT);


			
		}

		public function PostAltatt()
		{
			Log::info("pendejada 0: ");
			$numtt = e(Input::get('numtt')); 
			$nombrett = e(Input::get('nombrett')); 
			$pasante1 = e(Input::get('pasante1')); 
			$pasante2 = e(Input::get('pasante2')); 
			$pasante3 = e(Input::get('pasante3')); 
			$pasante4 = e(Input::get('pasante4')); 
			$pasante5 = e(Input::get('pasante5')); 
			$director1 = e(Input::get('director1'));
			$director2 = e(Input::get('director2')); 
			$sinodal1 = e(Input::get('sinodal1')); 
			$sinodal2 = e(Input::get('sinodal2')); 
			$sinodal3 = e(Input::get('sinodal3')); 
			$asistencia1=e(Input::get('asis1')); 
			$asistencia2=e(Input::get('asis2')); 
			$asistencia3=e(Input::get('asis3')); 

			Log::info("la pendejada vale" . print_r($numtt, true));
			$pro = DB::table('TT')->where('Num_TT',$numtt)->pluck('Nombre_TT');
			Log::info("pendejada 1: " . print_r($pro, true));
			if(count($pro))
			{
				Log::info("pendejada 2: " . print_r($pro, true));
				$error = 'Ya has registrado ese TT';
					return Redirect::to('gestionarTT')
							->with('error',$error)
						    ->withInput();
			}
			else
			{	
				Log::info("pendejada 3: ");
				DB::table('TT')->insert(array('Num_TT' => $numtt, 'Nombre_TT' => $nombrett));
				Auxilio::verificarPasante($pasante1,"1",$numtt);
				if(strlen($pasante2)) Auxilio::verificarPasante($pasante2,"2",$numtt);
				if(strlen($pasante3)) Auxilio::verificarPasante($pasante3,"3",$numtt);
				if(strlen($pasante4)) Auxilio::verificarPasante($pasante4,"4",$numtt);
				if(strlen($pasante5)) Auxilio::verificarPasante($pasante5,"5",$numtt);
				DB::table('Jurado')->insert(array('TT_Num_TT' => $numtt, 'Profesor_Cedula' => $director1,'Participacion' => 'Director'));
				if((int)$director2){
					DB::table('Jurado')->insert(array('TT_Num_TT' => $numtt, 'Profesor_Cedula' => $director2,'Participacion' => 'Director'));
				}
				DB::table('Jurado')->insert(array('TT_Num_TT' => $numtt, 'Profesor_Cedula' => $sinodal1,'Participacion' => 'Sinodal'));
				DB::table('Jurado')->insert(array('TT_Num_TT' => $numtt, 'Profesor_Cedula' => $sinodal2,'Participacion' => 'Sinodal'));
				DB::table('Jurado')->insert(array('TT_Num_TT' => $numtt, 'Profesor_Cedula' => $sinodal3,'Participacion' => 'Sinodal'));
			}

		}

		public function registrott()
		{
			$TrabajosPendientes = DB::table('TT')
	            ->where('Registro_Pendiente','=',1)
	            ->get();
	        Log::info("Trabajos Pendientes: " . print_r($TrabajosPendientes, true));
	        $TrabajosCompletados =DB::table('TT')
	            ->where('Registro_Completado','=',1)
	            ->get();
			return View::make('registroTT',$TrabajosPendientes)
				->with('TrabajosCompletados',$TrabajosCompletados)
				->with('TrabajosPendientes',$TrabajosPendientes);


		}

		public function guardarRegistro()
		{
			$numTT = e(Input::get('numTT')); 
			Log::info("Numero: " . print_r($numTT, true));
			$registro = e(Input::get('registro'));
			Log::info("Registro: " . print_r($registro, true));
			DB::table('TT')
            	->where('Num_TT','=',$numTT)
            	->update(array('Registro_TT' => $registro,'Registro_Pendiente' => 0,'Registro_Completado' => 1));
			
		}

		public function gestionPasantes()
		{
			$Pasantes= DB::table('Usuario')
	            ->join('Pasante', 'Usuario.id_Usuario', '=', 'Pasante.Usuario_id_Usuario')
	            ->join('Generacion','Pasante.Generacion_id_Generacion','=','Generacion.id_Generacion')
	            ->where('Rol','Alumno')
	            ->get();
			return View::make('gestionPasantes',$Pasantes)
				->with('Pasantes',$Pasantes);


		}

		public function actualizarPasantes()
		{
			$boleta = e(Input::get('boleta')); 
			$nombre = e(Input::get('nombre')); 
			$ap = e(Input::get('ap'));
			$am = e(Input::get('am'));
			$genero = e(Input::get('genero'));
			$generacion = e(Input::get('generacion'));
			$mail = e(Input::get('mail'));

			$idUser = DB::table('Pasante')->where('Boleta',$boleta)->pluck('Usuario_id_Usuario');
			
				DB::table('Usuario')
	            ->where('id_Usuario',$idUser)
	            ->update(array('Nombre' => $nombre, 'ApellidoP' => $ap, 'ApellidoM' => $am, 'Genero' => $genero,'Correo' => $mail,'Rol' => 'Alumno'));
			

				DB::table('Pasante')
	            ->where('Boleta',$boleta)
	            ->update(array('Generacion_id_Generacion' => $generacion));

	            $correcto = "El alumno ha sido actualizado correctamente";

	           return Redirect::to('gestionPasantes')
						->with('correcto',$correcto);
			
		}


		public function gestionProtestas()
		{
			$Protestas= DB::table('Protesta')
						->orderBy('Fecha', 'desc')
	            		->get();

			Log::info("Protesta: " . print_r($Protestas, true));
			return View::make('gestionProtestas',$Protestas)
				->with('Protestas',$Protestas);


		}

		public function altaProtestas()
		{
			$fecha = e(Input::get('fecha')); 
			$inicio = e(Input::get('inicio')); 
			$fin = e(Input::get('fin'));
			
			DB::table('Protesta')->insert(
    						array('Fecha' => $fecha, 'Hora_Inicio' => $inicio,'Hora_Fin'=>$fin));


	            $correcto = "La protesta ha sido registrada correctamente";

	           return Redirect::to('gestionProtestas')
						->with('correcto',$correcto);
			
		}

		public function actualizarProtestas()
		{
			$fecha = e(Input::get('fecha')); 
			$inicio = e(Input::get('inicio')); 
			$fin = e(Input::get('fin'));
			$id= e(Input::get('idPro'));

			DB::table('Protesta')
	            ->where('id_Protesta',$id)
	            ->update(array('Fecha' => $fecha, 'Hora_Inicio' => $inicio,'Hora_Fin'=>$fin));

	        $correcto = "La protesta ha sido actualizada correctamente";

	           return Redirect::to('gestionProtestas')
						->with('correcto',$correcto);

		}


		//:___

		public function asignarProtesta()
		{
			$Protestas= DB::table('Protesta')
						->join('Historial_Protesta','Protesta.id_Protesta','=','Historial_Protesta.Protesta_id_Protesta')
						->join('Pasante','Pasante.Boleta','=','Historial_Protesta.Pasante_Boleta')
						->join('Usuario','Pasante.Usuario_id_Usuario','=','Usuario.id_Usuario')
						->orderBy('Fecha', 'desc')
	            		->get();

	        $Pasante = DB::table('Pasante')
	            		->get();

	        $Protesta = DB::table('Protesta')
	            		->get();

			Log::info("Protestas: " . print_r($Protestas, true));
			return View::make('asignarProtestas',$Protestas)
				->with('Protesta',$Protesta)
				->with('Protestas',$Protestas)
				->with('Pasante',$Pasante);
		}

		public function asignarProtestaPasante()
		{
			$fecha = e(Input::get('fecha')); 
			$inicio = e(Input::get('inicio')); 
			$fin = e(Input::get('fin'));
			
			DB::table('Protesta')->insert(
    						array('Fecha' => $fecha, 'Hora_Inicio' => $inicio,'Hora_Fin'=>$fin));


	            $correcto = "La protesta ha sido registrada correctamente";

	           return Redirect::to('gestionProtestas')
						->with('correcto',$correcto);
			
		}

		

		
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
		/*
		==========================================
		Apartir de termina lo que  toco Hilario
		==========================================
		*/

	}

	class Auxilio {

		public static function verificarPasante($data,$nombre,$tt)
		{
			Log::info("la pendejada 31" . print_r($data, true));
			Log::info("la pendejada 32" . print_r($nombre, true));
			Log::info("la pendejada 33" . print_r($tt, true));
			$pro = DB::table('Pasante')->where('Boleta',$data)->pluck('TT_Num_TT');
			if(count($pro)>0)
			{
				$error = 'Ya has registrado a Pasante '+$nombre;
				return Redirect::to('gestionarTT')
						->with('error',$error)
					    ->withInput();
			}
			Log::info("pendejada 77: ");
			$id = DB::table('Usuario')->insertGetId(array('Rol' => 'Alumno'));
			DB::table('Pasante')->insert(array('Boleta' => $data,'TT_Num_TT' => $tt,'Usuario_id_Usuario' => $id));
		}

	}


	class TrabajoTerminal {
		var $numTT;
		var $alumnos;
		var $directores;
		var $sinodales;
	}