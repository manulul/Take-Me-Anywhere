<?php
$a=array("Datca", "Shikaoi", "Santiago de Cuba", "Calgary", "Tromsoe", "Limerick", "Nuuk", "Chihuahua", "Limon", "Val Paraiso", "Cape Town", "Gibraltar", "Algiers", "Kuala Lumpur", "Fluk", "Darwin", "Isle of Man", "Roenne", "Saint Petersburg", "Pyongnyang", "Sichuan", "Xigaze", "Goa", "Riyadh", "Dar es Salaam", "Bata", "Mu Ko Similan", "Haifa", "Chania", "Prague", "Marseille", "Amsterdam", "Keszthely", "Florence", "Bonifacio", "Bissau", "Curacao", "Ishigaki", "Anchorage", "Lebanon", "Albuquerque", "Hilo", "Antananarivo", "Kathmandu", "Gothenburg", "Christchurch", "Samoa", "Munich", "Vienna", "Helsinki");
$random_key=array_rand($a,1);

echo $a[$random_key]."!";

$a = str_replace(' ', '_', $a);

echo $a[$random_key].".jpg";


?>