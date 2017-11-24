
<?php

// classe de base, avec des propriétés et des méthodes membres
class Triangle {

   var $firstLength;
   var $secondLength;
   var $thirdLength;

   function Triangle($firstLength, $secondLength, $thirdLength) 
   {
       $this->firstLength = $firstLength;
       $this->secondLength = $secondLength;
	   $this->thirdLength = $thirdLength;
   }
	
	// Deux côtés de la même longueur
   function isosceles() 
   {
		if(($this->$firstLength == $this->$secondLength) && (this->$firstLength != $this->$thirdLength))
			return true;
		elseif($this->$secondLength == $this->$thirdLength) && (this->$secondLength != $this->$secondLength))
			return true;
		elseif($this->$firstLength == $this->$thirdLength) && (this->$firstLength != $this->$secondLength))
			return true;
		else
			return false;
   }
	//Trois côté de la même longuer
   function equilateral() 
   {
	   if(($this->$firstLength == $this->$secondLength) && (this->$secondLength == $this->$thirdLength) && ($this->$thirdLength == $this->$firstLength))
			return true;
       else
		   return false;
   }
   
   
   function rectangle() 
   {
	    var $longest = 0;
		//Récupère le coté le plus long
	    if(($this->$firstLength >= $this->$secondLength) && ($this->$firstLength >= $this->$thirdLength))
			$longest = $firstLength;
		elseif(($this->$secondLength >= $this->$firstLength) && ($this->$secondLength >= $this->$thirdLength))
			$longest = $this->$secondLength;
		else
			$longest = $this->$thirdLength;
		
		//Longueur la plus longue au carré
		$longest = $longest * $longest;
		//Si la somme des deux autres côté est égale au côté le plus long, 'cest un triangle réctangle
		var $sum = 0;
		if($firstLength == $longest)
			$sum = ($secondLength*$secondLength) + ($thirdLength*$thirdLength);
		if($secondLength == $longest)
			$sum = $firstLength*$firstLength) + ($thirdLength*$thirdLength);
		if($thirdLength == $longest)
			$sum = ($thirdLength*$thirdLength) + ($secondLength*$secondLength);
	   
	   if($longest == $sum)
		   return true;
	   else
		   return false;
   }
   
   function scalene() 
   {
       if(($this->$firstLength != $this->$secondLength) && (this-> $secondLength != $this->$thirdLength) && ($this->$thirdLength != $this->$firstLength))
			return true;
       else
		   return false;
   }

} // fin de la classe Vegetable


?>
