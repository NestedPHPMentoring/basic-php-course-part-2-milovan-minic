<?php

/*
 * ### Task 4
 * Write a PHP script to display time in a specified timezone.
 */

$europeTimezones = array('Europe/Amsterdam', 'Europe/Andorra', 'Europe/Astrakhan',
    'Europe/Athens', 'Europe/Belgrade', 'Europe/Berlin', 'Europe/Bratislava',
    'Europe/Brussels', 'Europe/Bucharest', 'Europe/Budapest', 'Europe/Busingen',
    'Europe/Chisinau', 'Europe/Copenhagen', 'Europe/Dublin', 'Europe/Gibraltar',
    'Europe/Guernsey', 'Europe/Helsinki', 'Europe/Isle_of_Man', 'Europe/Istanbul',
    'Europe/Jersey', 'Europe/Kaliningrad', 'Europe/Kiev', 'Europe/Kirov',
    'Europe/Lisbon', 'Europe/Ljubljana', 'Europe/London', 'Europe/Luxembourg',
    'Europe/Madrid', 'Europe/Malta', 'Europe/Mariehamn', 'Europe/Minsk',
    'Europe/Monaco', 'Europe/Moscow', 'Europe/Oslo', 'Europe/Paris',
    'Europe/Podgorica', 'Europe/Prague', 'Europe/Riga', 'Europe/Rome',
    'Europe/Samara', 'Europe/San_Marino', 'Europe/Sarajevo', 'Europe/Simferopol',
    'Europe/Skopje', 'Europe/Sofia', 'Europe/Stockholm', 'Europe/Tallinn',
    'Europe/Tirane', 'Europe/Ulyanovsk', 'Europe/Uzhgorod', 'Europe/Vaduz',
    'Europe/Vatican', 'Europe/Vienna', 'Europe/Vilnius', 'Europe/Volgograd',
    'Europe/Warsaw', 'Europe/Zagreb', 'Europe/Zaporozhye', 'Europe/Zurich');


if(isset($_POST['submit'])) {
    $tz = new DateTimeZone($_POST['tz']);

    $time = new DateTime();
    $time->setTimezone($tz);

    echo 'Time in ' . $tz->getName() . ' is ';
    echo date_format($time, 'H:i:s') . PHP_EOL;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Time</title>
</head>

<body>
<h3>Pick timezone</h3>
<form name="timezone_form" action="task04.php" method="post">
    <select name="tz">
        <?php
        foreach($europeTimezones as $timeZone) {
            echo '<option value="' . $timeZone . '">' . $timeZone . '</option>';
        }
        ?>
    </select>
    <input type="submit" name="submit" value="Display">
</form>
</body>
</html>
