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
    <!-- Ikony -->
    <script src="https://kit.fontawesome.com/6ca39af44b.js" crossorigin="anonymous"></script>
    <title>korona</title>
</head>

<body>

    <div class="uk-container">
        <div>
            <h1 style="font-size: 2em; text-align: center;">Informace o občanech České republiky nakažených virem
                <strong>Covid-19</strong></h1>
        </div>
        <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-flex uk-flex-middle uk-flex-center">
                    <div style="text-align: center;">
                        <h3 class="uk-card-title">Celkový počet</h3>
                        <i class="fas fa-users fa-3x"></i>
                        <h4 style="margin-top: 20px;"><?php echo $infected_people->total_infected() ?></h4>
                    </div>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-default uk-card-body uk-flex uk-flex-middle uk-flex-center">
                    <div class="">
                        <h3 class="uk-card-title" style="text-align: center;">Podle pohlaví</h3>
                        <div class="uk-grid uk-child-width-1-2 uk-grid-match">
                            <div>
                                <div class="uk-card uk-card-default uk-card-body"
                                    style="border: 3px solid #2980B9; text-align: center; color: #2980B9;">
                                    <i class="fas fa-male fa-5x"></i>
                                    <h4 style="margin-top: 20px;"><?php echo $infected_people->sex_infected(true)?></h4>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default uk-card-body"
                                    style="border: 3px solid #A93226; text-align: center; color: #A93226;">
                                    <i class="fas fa-female fa-5x"></i>
                                    <h4 style="margin-top: 20px;"><?php echo $infected_people->sex_infected(false); ?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="uk-card uk-card-default uk-card-body uk-flex uk-flex-middle uk-flex-center">
                    <div style="text-align: center;">
                        <h3 class="uk-card-title">Průměrný věk nakaženého</h3>
                        <i class="fas fa-user fa-3x"></i>
                        <h4 style="margin-top: 20px;"><?php echo $infected_people->average_age() ?> let</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>