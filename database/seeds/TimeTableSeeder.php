<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Time;

class TimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time1=new Time;
        $time1->name="09:00-09:45";
        $time1->save();

        $time2=new Time;
        $time2->name="09:45-10:30";
        $time2->save();

        $time3=new Time;
        $time3->name="10:30-11:15";
        $time3->save();

        $time4=new Time;
        $time4->name="11:15-12:00";
        $time4->save();

        $time5=new Time;
        $time5->name="01:00-01:45";
        $time5->save();

        $time6=new Time;
        $time6->name="01:45-02:30";
        $time6->save();

        $time3=new Time;
        $time3->name="02:30-03:15";
        $time3->save();
    }
}
