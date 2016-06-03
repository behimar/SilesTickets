<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->crearAdministrador();
        $this->crearVendedor();
        $this->crearCliente();
        //$this->crearInvitado();
    }

    public function crearAdministrador()
    {
        factory(App\User::class)->create([
            'id'        =>'0000001',
            'name'      =>'administrador',
            'email'     =>'admin@siles.bo',
            'password'  =>bcrypt('admin'),
            'type'      =>'administrador'
        ]);
    }
    public function crearVendedor()
    {
        factory(App\User::class)->create([
            'id'        =>'0000002',
            'name'      =>'vendedor',
            'email'     =>'vendedor@siles.bo',
            'password'  =>bcrypt('vendedor'),
            'type'      =>'vendedor'
        ]);
    }
    public function crearCliente()
    {
        factory(App\User::class)->create([
            'id'        =>'0000003',
            'name'      =>'cliente',
            'email'     =>'cliente@siles.bo',
            'password'  =>bcrypt('cliente'),
            'type'      =>'cliente'
        ]);
    }
}
