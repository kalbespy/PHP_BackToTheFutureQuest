<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$presentTime = new DateTime;
$destinationTime = new DateTime;

$destinationTime->setDate(2099, 12, 31); //yyyy, mm, dd will set the the specified date
$destinationTime->setTime(23, 59, 59); //hh, mm, ss (optional) will modify the time)

echo 'Present time : ' . $presentTime->format('M d Y') . ' / ' . $presentTime->format('A H') . 'hrs '. $presentTime->format('i') . 'min <br>';
echo 'Destination time : ' . $destinationTime->format('M d Y') . ' / ' . $destinationTime->format('A H') . 'hrs '. $destinationTime->format('i') . 'min <br>';

echo '<br>';

$interval = date_diff($presentTime, $destinationTime);
echo 'Time interval: ' . $interval->format('%y years, %m months, %d days, and %i minutes.') . '<br>';


$diffMinutes = round(($destinationTime->getTimestamp() - $presentTime->getTimestamp()) / 60);
echo 'Total minutes between today and destination: ' . $diffMinutes . " minutes <br>";

$requiredFuel = $diffMinutes / 10000;
echo 'Total fuel required: ' . $requiredFuel . " liters. <br> It will cost the skin of the ass Doc !<br>";
?>

<br><br><br>

<p>No time for CSS Marty ! Because ...</p>

<div class="tenor-gif-embed" data-postid="16482361" data-share-method="host" data-aspect-ratio="1.77778" data-width="50%"><a href="https://tenor.com/view/were-sending-you-back-to-the-future-lets-go-time-travel-get-back-gif-16482361">Were Sending You Back To The Future GIF</a>from <a href="https://tenor.com/search/were+sending+you-gifs">Were Sending You GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script></html>


