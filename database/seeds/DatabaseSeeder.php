<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(estadosproductoSeeder::class);
        $this->call(estadospedidoSeeder::class);
        $this->call(tiposcategoriaSeeder::class);
        $this->call(tiposdespachoSeeder::class);
        $this->call(tiposservicioSeeder::class);
    }
}

class tiposservicioSeeder extends Seeder  
{
    public function run()
       {
         //delete users table records
         DB::table('tiposservicio')->delete();
         //insert some dummy records
         DB::table('tiposservicio')->insert(array(
             array('id'=>1,'nombre'=>'Tipo 1','vigente'=>true),
             array('id'=>2,'nombre'=>'Tipo 2','vigente'=>true),
             array('id'=>3,'nombre'=>'Tipo 3','vigente'=>true),
          ));
       }

}
class tiposdespachoSeeder extends Seeder  
{
    public function run()
       {
         //delete users table records
         DB::table('tiposdespacho')->delete();
         //insert some dummy records
         DB::table('tiposdespacho')->insert(array(
             array('id'=>1,'nombre'=>'Tipo 1','vigente'=>true),
             array('id'=>2,'nombre'=>'Tipo 2','vigente'=>true),
             array('id'=>3,'nombre'=>'Tipo 3','vigente'=>true),
          ));
       }

}
class tiposcategoriaSeeder extends Seeder  
{
    public function run()
       {
         //delete users table records
         DB::table('tiposcategoria')->delete();
         //insert some dummy records
         DB::table('tiposcategoria')->insert(array(
             array('id'=>1,'nombre'=>'Tipo 1','vigente'=>true),
             array('id'=>2,'nombre'=>'Tipo 2','vigente'=>true),
             array('id'=>3,'nombre'=>'Tipo 3','vigente'=>true),
          ));
       }

}
class estadosproductoSeeder extends Seeder  
{
    public function run()
       {
         //delete users table records
         DB::table('estadosproducto')->delete();
         //insert some dummy records
         DB::table('estadosproducto')->insert(array(
             array('id'=>1,'nombre'=>'Estado 1','vigente'=>true),
             array('id'=>2,'nombre'=>'Estado 2','vigente'=>true),
             array('id'=>3,'nombre'=>'Estado 3','vigente'=>true),
          ));
       }

}
class estadospedidoSeeder extends Seeder  
{
    public function run()
       {
         //delete users table records
         DB::table('estadospedido')->delete();
         //insert some dummy records
         DB::table('estadospedido')->insert(array(
             array('id'=>1,'nombre'=>'Estado 1','vigente'=>true),
             array('id'=>2,'nombre'=>'Estado 2','vigente'=>true),
             array('id'=>3,'nombre'=>'Estado 3','vigente'=>true),
          ));
       }

}