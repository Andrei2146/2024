<?php

$today = date('D');

if ($today == 'Mon') {
    echo '<p>Idag är det måndag.</p>';
} else if ($today == 'Tue') {
    echo '<p>Idag är det tisdag.</p>';
} else if ($today == 'Wed') {
    echo '<p>Idag är det onsdag.</p>';
} else if ($today == 'Thu') {
    echo '<p>Idag är det torsdag.</p>';
} else if ($today == 'Fri') {
    echo '<p>Idag är det fredag.</p>';
} else if ($today == 'Sat') {
    echo '<p>Idag är det lördag.</p>';
} else if ($today == 'Sun') {
    echo '<p>Idag är det söndag.</p>';
} else {
    echo '<p>Ogiltigt värde.</p>';
}
?>
