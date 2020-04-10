<?php
include("tridy.php");

$infected_people = new Covid_19();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- UIkit Styly -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/css/uikit.min.css" />
    <!-- UIkit Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit-icons.min.js"></script>
    <title>COVID-19</title>
    <style> 
        .Center { 
            position: fixed; 
            top: 30%; 
            right: 20%;
            left: 20%;
        } 
    </style> 
</head>

<body>
    <div class="uk-container">
        <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match Center" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <h3 style='text-align: center' class="uk-card-title">Celkový počet nakažených</h3>
                    <p style='text-align: center'><?php echo $infected_people->total_infected() ?></p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <h3 style='text-align: center' class="uk-card-title">Podle pohlaví</h3>
                    <p style='text-align: center'><?php echo $infected_people->sex_infected() ?></p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <h3 style='text-align: center' class="uk-card-title">Průměrný věk nakaženého</h3>
                    <p style='text-align: center'><?php echo round($infected_people->average_age()) ?> let</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>