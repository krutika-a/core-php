//loop dynamically

<?php

$arr=[[1,2,3],[4,5,6],[7,8,9]];
echo "<br>";
for ($i=0;$i<3;$i++)
    {
      for($j=0;$j<3;$j++)
        {
           echo $arr[$i][$j];
           echo "&nbsp";	
         }
echo "<br>";
     }

?>
