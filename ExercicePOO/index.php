

<?php
require('triangle.php');

$t1 = new Triangle(5,5,6);
$t2 = new Triangle(8,8,8);
$t3 = new Triangle(10,6,8);
$t4 = new Triangle(4,8,12);

$lstTriangle = array($t1,$t2,$t3,$t4);

foreach (lstTriangle as $t){
    
	if($t->isosceles() == true)
		echo 'le triangle avec les côtés A=' . $t1 . ' B=' . $t2 . ' C=' . $t3;
	if($t->rectangle() == true)
		echo 'le triangle avec les côtés A=' . $t1 . ' B=' . $t2 . ' C=' . $t3;
	if($t->scalene() == true && $t->rectangle() == false)
		echo 'le triangle avec les côtés A=' . $t1 . ' B=' . $t2 . ' C=' . $t3;
	if($t->equilateral() == true)
		echo 'le triangle avec les côtés A=' . $t1 . ' B=' . $t2 . ' C=' . $t3;
}




?>
