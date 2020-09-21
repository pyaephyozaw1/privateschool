<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(DayTableSeeder::class);
        $this->call(TimeTableSeeder::class);


         /*$this->call(AcademicTableSeeder::class);

         $this->call(GradeTableSeeder::class);
         $this->call(SubjectableSeeder::class);
         *//*$this->call(ClassessTableSeeder::class);
         $this->call(ClassessTableSeeder::class);
*/
    }
}
