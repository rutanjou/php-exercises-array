<?php 
$array = array( 
'janvier', 
'février',
'mars',
'avril',
'mai',
'juin',
'juillet',
'aout',
'septembre',
'octobre',
'novembre',
'décembre
');
unset($array[7]);
$array[7]= 'aôut';
echo $array[7];