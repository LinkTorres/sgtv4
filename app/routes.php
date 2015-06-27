<?php

// Nos mostrará el formulario de login.
Route::get('login', 'AuthController@showLogin');

// Validamos los datos de inicio de sesión.
Route::post('login', 'AuthController@postLogin');

//Esto hizo Hilario
Route::get('loginPas', 'HomeController@showLoginPas');

Route::get('olvidopassword', 'HomeController@olvidoPas');



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

	//aqui le metio mano hilario
	Route::get('BloquearPantalla', 'HomeController@blocPan');


});