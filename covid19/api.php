<?php 

include("tridy.php");

$infected_people = new Covid_19();

?>

<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- UIkit Styly -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/css/uikit.min.css"/>
    <!-- UIkit Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit-icons.min.js"></script>

    <title>korona</title>
</head>
<body>

<table class="uk-table uk-table-divider">
    <thead>
        <tr>
            <th>Celkový počet</th>
            <th>Podle pohlaví</th>
            <th>Průměrný věk</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $infected_people->total_infected() ?></td>
            <td><?php echo $infected_people->sex_infected() ?></td>
            <td><?php echo $infected_people->average_age() ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>
