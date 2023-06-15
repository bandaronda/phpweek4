<?php

for ($num = 0; $num <= 50; $num++) {
    echo $num . "\n";
}

?>

<?php
$klasgenoten = array(

    "Lenny",
    "Lara",
    "Milo",
    "Valerio",
    "Koeks",
    "Jaden",
    "Dejah",
    "Koen",
    "Mike",
    "Lola"
    
);

foreach ($klasgenoten as $naam) {
    echo $naam . "<br>";

}
?>

<?php

$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 



$maandNummer = 1;

foreach ($maanden as $maand) {
    echo 'Maand ' . $maandNummer . ' is ' . $maand . '.<br />';
    $maandNummer++;
}


?>
