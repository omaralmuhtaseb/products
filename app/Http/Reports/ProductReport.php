<?php
namespace App\Http\Reports;

use App\Product;

class ProductReport{

    public function WeekReport(){


        $firstDay = now()->firstOfMonth()->format('d/m');
        $secondDay = now()->firstOfMonth()->addDay()->format('d/m');
        $thirdDay = now()->firstOfMonth()->addDay(2)->format('d/m');
        $fourthDay = now()->firstOfMonth()->addDay(3)->format('d/m');
        $fifthDay = now()->firstOfMonth()->addDay(4)->format('d/m');
        $sixthDay = now()->firstOfMonth()->addDay(5)->format('d/m');
        $seventhDay = now()->firstOfMonth()->addDay(6)->format('d/m');


        $first_day_count =Product::FirstDayCount();
        $second_day_count =Product::SecondDayCount();
        $third_day_count =Product::ThirdDayCount();
        $fourth_day_count =Product::FourthDayCount();
        $fifth_day_count =Product::FifthDayCount();
        $sixth_day_count =Product::SixthDayCount();
        $seventh_day_count =Product::SeventhDayCount();



        return json_encode(array(
            ['first_day'=>$firstDay,'first_day_count'=>$first_day_count],
            ['second_day'=>$secondDay,'second_day_count'=>$second_day_count],
            ['third_day'=>$thirdDay,'third_day_count'=>$third_day_count],
            ['fourth_day'=>$fourthDay,'fourth_day_count'=>$fourth_day_count],
            ['fifth_day'=>$fifthDay,'fifth_day_count'=>$fifth_day_count],
            ['sixth_day'=>$sixthDay,'sixth_day_count'=>$sixth_day_count],
            ['seventh_day'=>$seventhDay,'seventh_day_count'=>$seventh_day_count],

        ));
    }
}