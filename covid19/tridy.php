<?php

Class Covid_19
{
public $url = "https://api.apify.com/v2/key-value-stores/qAEsnylzdjhCCyZeS/records/LATEST?disableRedirect=true";

    public function total_infected()
    {
        $data = file_get_contents($this->url);
        $data_to_array = json_decode($data);

        $infected = 0;
        foreach ($data_to_array->data as $all_time) {
            foreach($all_time as $every_day){
                $infected++;
            }
        }
        return $infected;

    }

    public function sex_infected()
    {
        $switcher = false;

        $data = file_get_contents($this->url);
        $data_to_array = json_decode($data);

        $sex_infected = 0;
        foreach ($data_to_array->data as $all_time) {
            foreach($all_time as $every_day){
                if ($every_day[1] == "muž" && $switcher == true) {
                    $sex_infected++;
                } elseif ($every_day[1] == "žena" && $switcher == false){
                    $sex_infected++;
                }
            }
        }

        if ($switcher == true) {
            return $sex_infected . " mužů";
        } elseif ($switcher == false) {
            return $sex_infected . " žen";
        }
    }

    public function average_age()
    {
        $data = file_get_contents($this->url);
        $data_to_array = json_decode($data);

        $average_age = array();
        foreach ($data_to_array->data as $all_time) {
            foreach($all_time as $every_day){
                $average_age[] .= $every_day[0] . ", "; 
            }
        }

        return array_sum($average_age) / count($average_age);

    }

}
?>