<?php
class Appointment{

    function __construct($shenaseh, $conceil_id)
    {
        $this->now = new DateTime();
        $this->now->modify('+20 minute');
        $this->recordPsych = User3Model::listAvailableCalendarByShenasehAndCounsellingId($shenaseh, $conceil_id, $this->now->format('Y-m-d'), $this->now->format('H:i'));  
        $this->now->modify('00:00');
        $this->recordPsychList = array();
        $date = 0;
        $dateId = -1;
        if($this->recordPsych!=null){
            for ($i=0; $i<count($this->recordPsych); $i++){
                if ($this->recordPsych[$i]['date']==$date){
                    $this->recordPsychList[$dateId][]= $this->recordPsych[$i];
                    //($this->recordPsychList[$dateId], $this->recordPsych[$i]);
                }else{
                    $dateId++;
                    $date = $this->recordPsych[$i]['date'];
                    $this->recordPsychList[$dateId][] = $this->recordPsych[$i]; 
                }     
            }
        }
            
    }

    function nextAvailable(){
        if($this->recordPsych==null){
            return null;
        }else{
            $date = new DateTime($this->recordPsych[0]['date'].$this->recordPsych[0]['startTime']);
            $diff = $date->diff($this->now);
            switch ($diff->days){
                case 0:
                    return array($this->recordPsych[0]['calendar_id'], ' امروز '.stringConverter($date->format('H:i'), 'enToFa').''.$this->pmAm($date->format('H:i')));
                    break;
                case 1:
                    return array($this->recordPsych[0]['calendar_id'], ' فردا '.stringConverter($date->format('H:i'), 'enToFa').''.$this->pmAm($date->format('H:i')));
                    break;
                case 2:
                    return array($this->recordPsych[0]['calendar_id'], ' پس فردا '.stringConverter($date->format('H:i'), 'enToFa').''.$this->pmAm($date->format('H:i')));
                    break;
                default:
                    return array($this->recordPsych[0]['calendar_id'], stringConverter($diff->days, 'enToFa').'   روز دیگر ساعت   '.stringConverter($date->format('H:i'), 'enToFa').$this->pmAm($date->format('H:i')));
                    break;
        
            } 
        }
    }   

    function firstAvailable(){
        if (!array_key_exists(0, $this->recordPsychList)){
            return null;
        }else{
            $date = new DateTime($this->recordPsychList[0][0]['date']);
            $diff = $date->diff($this->now);
            $resultArray = array();
            switch ($diff->days){
                case 0:
                    array_push($resultArray, 'امروز');
                    break;
                case 1:
                    array_push($resultArray, 'فردا');
                    break;
                case 2:
                    array_push($resultArray, 'پس فردا');
                    break;
                default:
                    array_push($resultArray, stringConverter($diff->days, 'enToFa').' روز دیگر ');
                    break;
            }
            for($i=0; $i<count($this->recordPsychList[0]); $i++){
                if($i==5)break;
                $date = new DateTime($this->recordPsychList[0][$i]['date'].$this->recordPsychList[0][$i]['startTime']);
                $arrayTemp = [];
                array_push(
                    $arrayTemp,
                    $this->recordPsychList[0][$i]['calendar_id']
                );
                
                array_push(
                    $arrayTemp,
                    $this->pmAm($date->format('H:i')).''.stringConverter($date->format('H:i'), 'enToFa')
                );

                array_push(
                    $resultArray,
                    $arrayTemp
                );

            }
        }
        return $resultArray;
    }     
    

    function secondAvailable(){
        if (!array_key_exists(1, $this->recordPsychList)){
            return null;
        }else{
            $date = new DateTime($this->recordPsychList[1][0]['date']);
            $diff = $date->diff($this->now);
            $resultArray = array();
            switch ($diff->days){
                case 0:
                    array_push($resultArray, 'امروز');
                    break; 
                case 1:
                    array_push($resultArray, 'فردا');
                    break;
                case 2:
                    array_push($resultArray, 'پس فردا');
                    break;
                default:
                    array_push($resultArray, stringConverter($diff->days, 'enToFa').' روز دیگر ');
                    break;
            }
            for($i=0; $i<count($this->recordPsychList[1]); $i++){
                if($i==5)break;
                $date = new DateTime($this->recordPsychList[1][$i]['date'].$this->recordPsychList[1][$i]['startTime']);
                $arrayTemp = [];
                array_push(
                    $arrayTemp,
                    $this->recordPsychList[1][$i]['calendar_id']
                );
                
                array_push(
                    $arrayTemp,
                    $this->pmAm($date->format('H:i')).''.stringConverter($date->format('H:i'), 'enToFa')
                );

                array_push(
                    $resultArray,
                    $arrayTemp
                );
            }
        }
        return $resultArray;
    }

    function pmAm($date){
        if ($date < '12:00' && $date >= '8:00')return 'صبح';
        elseif ($date < '15:00' && $date >= '12:00')return ' ظهر ';
        elseif ($date < '18:00' && $date >= '15:00')return ' بعدازظهر ';
        elseif ($date < '20:00' && $date >= '18:00')return ' عصر ';
        elseif ($date < '24:00' && $date >= '20:00')return ' شب ';
        elseif ($date < '8:00' && $date >= '00:00')return ' صبح ';
        }
      

}
?>