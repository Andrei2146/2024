<?php

$kalle_job = "kodare"; 

$job_description = ""; 

switch ($kalle_job) {
    case "kodare":
        $job_description = "Kalle är kodare.";
        break;
    case "svetsare":
        $job_description = "Kalle är svetsare.";
        break;
    case "kock":
        $job_description = "Kalle är kock.";
        break;
    default:
        $job_description = "Vet inte vad Kalle gör.";
        break;
}

echo "<p>$job_description</p>";
?>
