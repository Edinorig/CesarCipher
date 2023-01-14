<?php

$brootforce = $_POST['brootforce'];


$file = "words.italian.txt";

$fopen = fopen($file, 'r');

$fread = fread($fopen, filesize($file));

fclose($fopen);

$alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 

for ($shift = 0; $shift < 26; $shift++) {
    $plaintext = ''; 
    for ($i = 0; $i < strlen($brootforce); $i++) {
        $char = $brootforce[$i];
        if (ctype_alpha($char)) {
            $pos = strpos($alphabet, strtoupper($char)); 
            $pos = ($pos + $shift) % 26;
            $char = $alphabet[$pos]; 
            if (ctype_upper($brootforce[$i])) {
                $char = strtoupper($char); 
            } else {
                $char = strtolower($char);
            }
        }
        $plaintext .= $char;
    }

    $arrTemp = preg_split('/\s+/', $plaintext);




    for ($ii = 0; $ii < sizeof($arrTemp); $ii++) {

        if (str_contains($fread, strtolower($arrTemp[$ii]))) {
            echo "\n---" . $arrTemp[$ii] . "\n";
        }
    }
}