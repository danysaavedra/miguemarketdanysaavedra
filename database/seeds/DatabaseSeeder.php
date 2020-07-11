<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
       
      // $this->call(RoleTableSeeder::class);
       // $this->call(seedUsuarios::class);
        // factory(App\User::class, 10)->create();
        // factory(App\Product::class, 100)->create();
     $this->call(sederDePrueba::class);
    }
}
