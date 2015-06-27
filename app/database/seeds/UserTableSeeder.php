<?php

/**
 * Agregamos un usuario nuevo a la base de datos.
 */
class UserTableSeeder extends Seeder {
    public function run(){
        User::create(array(
            'username'  => 'admin',
            'email'     => 'sgt.catt.escom@gmail.com',
            'password' => Hash::make('admin') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));
    }
}


