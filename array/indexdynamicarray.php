<?php
$Studentdata=array(array("Vicky",25,95.95),
	  array("seema",23,94),
          array("Vicky",22,92));
	  
{
echo "Student1:";
echo "<br>";
echo "Name:";
echo $Studentdata[0][0];
echo "<br>";
echo "age:";
echo $Studentdata[0][1];
echo "<br>";
echo "Percentage:";
echo $Studentdata[0][2];
echo "<br>";echo "<br>";
}
 ?>

Using by loop
<?php

$Studentdata=array(
		     array("Vicky",25,95.95),
	  	     array("seema",23,94),
          	     array("monu",22,92)
		  );
		
		  $outerlenght=sizeof($Studentdata);
for ($i=0;$i<$outerlenght;$i++)
 

 	{
		 $innerlenght=sizeof($Studentdata[$i]);
	   for ($j=0;$j<$innerlenght;$j++)
             
           
	   {
		echo $Studentdata[$i][$j];
		echo "<br>";
	    }

}
?>

