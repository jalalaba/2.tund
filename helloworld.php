<?php
	$first_name = "Siim";
	$last_name = "Heinla";
	
	echo $first_name." ".$last_name;
?>
<pr>
<?php

	$age = 25;
	
	//testib loogikat, juhul kui vanus on vähem kui 18 siis kirjuta alaealine
	//muul juhul trüki täisealine.
	// if'i sisse loogikatehe
	if($age < 18){
		//tõene
		echo "alaealine";
	}else{
		//väär
		echo "täisealine";
	}
?>
<pr>
<?php

	//Vastavalt vanusele trükime välja sõna "palju"

	for($i = 0;$i < $age;$i = $i + 1){
		//tegevus mis kordub
		echo "palju".$i." ";
	}
	echo "Õnne!";
	
?>