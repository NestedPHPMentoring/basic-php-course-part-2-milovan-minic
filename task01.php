<?php

/* ### Task 1
 *
 * Create a simple 'birthday countdown' script, the script will
 * count the number of days between current day and birth day.
 */

$birthday = date_create(date('Y') . '-04-22 08:30:00');
$today = date_create(date('Y-m-d H:i:s'));

$differenceInTotalDays = date_diff($today, $birthday)->format('%r%a');

if($differenceInTotalDays < 0) {
    echo abs($differenceInTotalDays) . ' days passed from this years\' birthday' . PHP_EOL;
    echo 'To be more precise...' . PHP_EOL;
    echo date_diff($today, $birthday)->format('%m months, %d days, %h hours and %i minutes');
} elseif($differenceInTotalDays == 0) {
    echo 'Today is the day! Happy Birthday';
} else {
    echo abs($differenceInTotalDays) . ' days left to this years\' birthday!' . PHP_EOL;
    echo 'To be more precise...' . PHP_EOL;
    echo date_diff($today, $birthday)->format('%m months, %d days, %h hours and %i minutes');
}
