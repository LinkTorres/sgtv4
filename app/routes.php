<?php

// Nos mostrará el formulario de login.
Route::get('login', 'AuthController@showLogin');

// Validamos los datos de inicio de sesión.
Route::post('login', 'AuthController@postLogin');

//Esto hizo Hilario
Route::get('loginPas', 'HomeController@showLoginPas');

Route::get('olvidopassword', 'HomeController@olvidoPas');

Route::get('generarActa', function()
{
    $Profes= DB::table('users')
	            ->join('Profesor', 'users.id', '=', 'Profesor.Usuario_id_Usuario')
	            ->where('Rol','Profesor')
	            ->get();

	        $boleta='2014630001';

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

			/*$html= View::make('acta/acta2',$Profes)
			->with('Profes',$Profes)
			->with('hora_inicio',$hora_inicio)
			->with('dia',$fecha)
		    ->with('mes',$fecha)
			->with('anio',$fecha)
			->with('director',$director)
			->with('director2',$director2)
			->with('sinodal1',$sinodal1)
			->with('sinodal2',$sinodal2)
			->with('sinodal3',$sinodal3)
			->with('opcion',$opcion)
			->with('carrera',$carrera)
			->with('nombre',$nombre)
			->with('apellidoP',$apellidoP)
			->with('apellidoM',$apellidoM)
			->with('genero',$genero)
			->with('hora_fin',$hora_fin)
			->with('boleta',$boleta)
			->with('acta',$acta)
			->with('cedulaDirector',$cedulaDirector)
			->with('cedulaDirector2',$cedulaDirector2)
			->with('cedulaSinodal1',$cedulaSinodal1)
			->with('cedulaSinodal2',$cedulaSinodal2)
			->with('cedulaSinodal3',$cedulaSinodal3);*/

			$html= View::make('acta/acta2',$Profes)
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
			->with('nombre',"$nombre")
			->with('apellidoP',"$apellidoP")
			->with('apellidoM',"$apellidoM")
			->with('genero',"$genero")
			->with('hora_fin',substr($hora_fin,0,5))
			->with('boleta',"$boleta")
			->with('acta',"$acta")
			->with('cedulaDirector',"$cedulaDirector->Cedula")
			->with('cedulaDirector2',"$cedulaDirector2->Cedula")
			->with('cedulaSinodal1',"$cedulaSinodal1->Cedula")
			->with('cedulaSinodal2',"$cedulaSinodal2->Cedula")
			->with('cedulaSinodal3',"$cedulaSinodal3->Cedula");

			//$html = View::make('GestionarProfesores')->with(array('Profes'=>$Profes));
			return PDF::load($html, 'Letter', 'portrait')->show();
});

Route::get('generarSolicitud','AlumnoController@generarSolicitud');

Route::get('Registro','AlumnoController@registro');
Route::post('Registro','AlumnoController@altaRegistro');

//aqui termina lo que hizo hilario

// Nos indica que las rutas que están dentro de él sólo serán mostradas si antes el usuario se ha autenticado.
Route::group(array('before' => 'auth'), function()
{
	// Esta será nuestra ruta de bienvenida.
	
	Route::get('/', 'HomeController@home');

	Route::get('gestionProfesores', 'HomeController@altaProfesores');
	Route::post('gestionProfesores', 'HomeController@postaltaProfesores');
	Route::post('actualizarProfesores', 'HomeController@actualizarProfesores');

	Route::get('gestionartt', 'HomeController@altatt');
	Route::post('gestionartt', 'HomeController@postAltatt');

	Route::get('registrott', 'HomeController@registrott');
	Route::post('registrott', 'HomeController@guardarRegistro');

	Route::get('gestionPasantes', 'HomeController@gestionPasantes');
	Route::post('gestionPasantes', 'HomeController@actualizarPasantes');

	Route::get('gestionProtestas', 'HomeController@gestionProtestas');
	Route::post('gestionProtestas', 'HomeController@altaProtestas');
	Route::post('actualizarProtestas', 'HomeController@actualizarProtestas');

	Route::get('asignarProtesta', 'HomeController@asignarProtesta');
	Route::post('asignarProtesta', 'HomeController@asignarProtestaPasante');

	Route::get('estadisticas', 'HomeController@estadisticas');


	Route::get('indexPAS', 'HomeController@verindexPas');
	Route::get('verJurado', 'AlumnoController@verJurado');
	
	// Esta ruta nos servirá para cerrar sesión.
	Route::get('logout', 'AuthController@logOut');


	Route::get('verDocumentacion', 'AlumnoController@verDocumentacion');

	//aqui le metio mano hilario
	Route::get('BloquearPantalla', 'HomeController@blocPan');




});