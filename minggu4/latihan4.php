<?php
$x = 20;

if ($x >= 90){

	echo "A+";
}   elseif ($x >= 80 && $x < 90) {
	echo "A";
	
}   elseif ($x >= 70 && $x < 80) {
	echo "B";
}	elseif ($x >= 60 && $x < 70) {
	echo "C";
}	elseif ($x >= 50 && $x < 60) {
	echo "D";
}	elseif ($x > 0 && $x < 50) {
	echo "E";
}    
    else {
	echo "salah";
}
?>