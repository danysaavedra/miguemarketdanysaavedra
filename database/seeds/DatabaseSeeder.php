<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(sederDePrueba::class);
        // factory(App\Product::class, 100)->create();
    }
}
