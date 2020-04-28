<?php 


Class Covid_19
{
public $url = "https://api.apify.com/v2/key-value-stores/qAEsnylzdjhCCyZeS/records/LATEST?disableRedirect=true";

    public function total_infected()
    {
        $data = file_get_contents($this->url); // získá nám obsah API
        $data_to_array = json_decode($data); // dekoduje javascript, abychom s ním mohli pracovat v PHP

        $infected = 0;
        foreach ($data_to_array->data as $all_time) {

            foreach ($all_time as $every_day) {
                $infected++;
            }

        }
        return $infected;
    }

    public function sex_infected($boolean)
    {
        $data = file_get_contents($this->url); // získá nám obsah API
        $data_to_array = json_decode($data); // dekoduje javascript, abychom s ním mohli pracovat v PHP

        $male_infected = 0;
        $female_infected = 0;

        foreach ($data_to_array->data as $all_time) {

            foreach ($all_time as $every_day) {

                if ($every_day[1] == "muž") {

                    $male_infected++; // +1

                } elseif ($every_day[1] == "žena") {

                    $female_infected++; // +1

                }

            }

        }

        if ($boolean == true ) {
            return $male_infected;
        } elseif ($boolean == false) {
            return $female_infected;
        }

    }

    public function average_age ()
    {
        $data = file_get_contents($this->url); // získá nám obsah API
        $data_to_array = json_decode($data); // dekoduje javascript, abychom s ním mohli pracovat v PHP
        
        $average_age = array();

        foreach ($data_to_array->data as $all_time) {
            foreach ($all_time as $every_day) {
                $average_age[] .= $every_day[0] . ", ";
            }
        }
        
        return round(array_sum($average_age) / count($average_age));
    }

}

?>