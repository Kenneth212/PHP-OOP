<?php

if (is_integer(12) > 34 ) 
{
	echo "Kenneth";
}
else
{
	echo "not true";

var_dump(is_integer('712'));
var_dump(is_integer('1000'));
var_dump(is_integer('ABC'));
var_dump(is_integer('true'));
}


if (is_bool(11) > 4) 
{
	echo "Kenneth";
}
else 
{
	echo "not true";

var_dump(is_bool('124'));
var_dump(is_bool('2000'));
var_dump(is_bool('JKL'));
var_dump(is_bool('false'));
}



if (is_double(74) < 122) 
{
	echo "Kenneth";
}
else
{
	echo "not true";

var_dump(is_double('248'));
var_dump(is_double('5000'));
var_dump(is_double('CBS'));
var_dump(is_double('true'));
}
?>
