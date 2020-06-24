<?php
class Appointment{

    function __construct($user_id){
        $this->user_id = $user_id;            
    }

    function getCanceledAppointments(){
        $canceledAppointment = User1Model::getCanceledAppointmentByUserId($this->user_id); 
        if ($canceledAppointment==null){
            return null;
        }else{
            return $canceledAppointment;
        }
    }  

    function getAllAppoin‍‍‍‍‍‍‍‍‍‍‍‍‍‍tments(){
        $this->record = User1Model::getBookedAppointmentByUserId($this->user_id);  
        if($this->record==null){
            return null;
        }else{
            $canceled = $this->getCanceledAppointments();
            if ($canceled == null){
                return $this->record;
            }else{
                $result = array_merge($canceled, $this->record);
                return $result;
            }
            
        }
    }  

    function getNotCompletedAppointments(){
        $date = getCurrentDate();
        $time = getCurrentTime();
        $record = User1Model::getNotCompletedAppointmentByUserId($this->user_id, $date, $time);  
        if($record==null){
            return null;
        }else{
            return $record;
        }
    }   

    function getCompletedAppointments(){
        $record = User1Model::getCompletedAppointmentByUserId($this->user_id);  
        if($record==null){
            return null;
        }else{
            return $record;
        }
    }  

    function getPassedAppointments(){
        $date = getCurrentDate();
        $time = getCurrentTime();
        $record = User1Model::getPassedAppointmentByUserId($this->user_id, $date, $time);  
        if($record==null){
            return null;
        }else{
            return $record;
        }
    }  

    function getFirstAvailable(){
        if ($this->record==null){
            return null;
        }else{
            return $this->record[0];
        }
    }     
    
  

    // function secondAvailable(){
    //     if (!array_key_exists(1, $this->recordPsychList)){
    //         return null;
    //     }else{
    //         $date = new DateTime($this->recordPsychList[1][0]['date']);
    //         $diff = $date->diff($this->now);
    //         $resultArray = array();
    //         switch ($diff->days){
    //             case 0:
    //                 if($diff->invert==0){
    //                     array_push($resultArray, 'امروز');
    //                     break;
    //                 }else{
    //                     array_push($resultArray, 'فردا');
    //                     break;
    //                 }
                    
    //             case 1:
    //                 array_push($resultArray, 'فردا');
    //                 break;
    //             case 2:
    //                 array_push($resultArray, 'پس فردا');
    //                 break;
    //             default:
    //                 array_push($resultArray, stringConverter($diff->days, 'enToFa').' روز دیگر ');
    //                 break;
    //         }
    //         for($i=0; $i<count($this->recordPsychList[1]); $i++){
    //             if($i==5)break;
    //             $date = new DateTime($this->recordPsychList[1][$i]['date'].$this->recordPsychList[1][$i]['startTime']);
    //             array_push(
    //                 $resultArray,
    //                 $this->pmAm($date->format('H:i')).''.stringConverter($date->format('H:i'), 'enToFa')
    //             );
    //         }
    //     }
    //     return $resultArray;
    // }

    // function pmAm($date){
    //     if ($date < '12:00' && $date >= '8:00')return 'صبح';
    //     elseif ($date < '15:00' && $date >= '12:00')return ' ظهر ';
    //     elseif ($date < '18:00' && $date >= '15:00')return ' بعدازظهر ';
    //     elseif ($date < '20:00' && $date >= '18:00')return ' عصر ';
    //     elseif ($date < '24:00' && $date >= '20:00')return ' شب ';
    //     elseif ($date < '8:00' && $date >= '00:00')return ' صبح ';
    //     }
      

}
?>