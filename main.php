
<?php
$x = '';
$y = NULL;
$z;
$i = (2-2);


if(isset($x)){
	print('x is not NULL');
}

if (empty($y)){
	print "y is empty";
}

if (is_null($z)){
	print "z is NULL";
}

if(empty($i)){
	print "i is equal to 0 but considered empty";
}

switch($x){

	case NULL:
	echo "Null value";
	break;
}




?>

