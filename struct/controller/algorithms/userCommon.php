<?php
class userCommonAlgorithm{

    public static function pmAm($date){
        if ($date < '12:00' && $date >= '8:00')return 'صبح';
        elseif ($date < '15:00' && $date >= '12:00')return ' ظهر ';
        elseif ($date < '18:00' && $date >= '15:00')return ' بعدازظهر ';
        elseif ($date < '20:00' && $date >= '18:00')return ' عصر ';
        elseif ($date < '24:00' && $date >= '20:00')return ' شب ';
        elseif ($date < '8:00' && $date >= '00:00')return ' صبح ';
        }
      

}
?>