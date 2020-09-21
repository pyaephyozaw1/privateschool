<?php

use Illuminate\Database\Seeder;

class AcademicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
      factory(App\Academic::class,5)->create();
    }
    
}
