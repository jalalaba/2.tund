<?php
	$first_name = "Siim";
	$last_name = "Heinla";
	
	echo $first_name." ".$last_name;
?>
<pr>
<?php

	$age = 5;
	
	//testib loogikat, juhul kui vanus on vähem kui 18 siis kirjuta alaealine
	//muul juhul trüki täisealine.
	// if'i sisse loogikatehe
	if($age < 18){
		echo "alaealine";
	}else{
		echo "täisealine";
	}
	
?>