<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Day;
class DayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $day1=new Day;
        $day1->name="Monday";
        $day1->save();

        $day2=new Day;
        $day2->name="Tuesday";
        $day2->save();

        $day3=new Day;
        $day3->name="Wednesday";
        $day3->save();

        $day4=new Day;
        $day4->name="Thusday";
        $day4->save();

        $day5=new Day;
        $day5->name="Friday";
        $day5->save();
    }
}
