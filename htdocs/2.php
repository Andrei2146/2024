<?php

$kalle_job = "kodare"; 

$job_description = ""; 

if ($kalle_job == "kodare") {
    $job_description = "Kalle är kodare.";
} else if ($kalle_job == "svetsare") {
    $job_description = "Kalle är svetsare.";
} else if ($kalle_job == "kock") {
    $job_description = "Kalle är kock.";
} else {
    $job_description = "Vet inte vad Kalle gör.";
}

echo "<p>$job_description</p>";
?>
