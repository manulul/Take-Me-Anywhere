<?php
$a=array("Datça", "Shikaoi", "Santiago de Cuba", "Calgary", "Tromsø", "Limerick", "Nuuk", "Chihuahua", "Limón", "Val Paraíso", "Cape Town", "Gibraltar", "Algiers", "Kuala Lumpur", "Fluk", "Darwin", "Isle of Man", "Rønne", "St. Petersborg", "Pyongnyang", "Sichuan", "Xigazê", "Goa", "Riyadh", "Dar es Salaam", "Bata", "Mu Ko Similan", "Haifa", "Chania", "Prag", "Marseille", "Amsterdam", "Keszthely", "Firenze", "Bonifacio", "Bissau", "Curacao", "Ishigaki", "Anchorage", "Lebanon", "Albuquerque", "Hilo", "Antananarivo", "Kathmandu", "Göteborg", "Christchurch", "Samoa", "Munich", "Wien", "Helsinki");
$random_keys=array_rand($a,2);
echo $a[$random_keys[0]]."!";
?>
 


<?php
if ($a == 0) {
    echo "Turkey";
} elseif ($a == 1) {
    echo "China";
} else {
    echo "Shit aint working";
}
?>

