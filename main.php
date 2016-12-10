
<?php
$x = '';
$y = NULL;
$z;
$i = (2-2);


if(isset($x)){
	print('x is not NULL <br>');
}

if (empty($y)){
	print "y is empty <br>";
}

if (is_null($z)){
	print "z is NULL <br>";
}

if(empty($i)){
	print "i is equal to 0 but considered empty <br>";
}

switch($x){
	case NULL:
	echo "Null value<br>";
	break;
	case 0:
	echo "value is 0<br>";
	break;
}
switch($y){
	case NULL:
	echo empty($y);
}



?>

