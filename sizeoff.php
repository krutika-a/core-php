<?php
$arr=[  [1,2,3],
	[5,6],
	[7,8,9,10,11]
	
     ];

$outerlenght=sizeof($arr);
      
      for ($i=0;$i<$outerlenght;$i++)

	{
          $innerlenght=sizeof($arr[$i]);
	  for ($j=0;$j<$innerlenght;$j++)
 	   {

               echo $arr[$i][$j];
               echo "&nbsp";

            }
         echo "<br>";
        }
?>

