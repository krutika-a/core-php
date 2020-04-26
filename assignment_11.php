<html>
<head></head>
<body>

<?php
$k=10;
for ($i=1;$i<=3;$i++)
 {
   for ($j=1;$j<=4;$j++)
    {

     echo $k;
echo "&nbsp&nbsp";
$k=$k+10;
    }
echo "<br>";
}



for ($i=1;$i<=3;$i++)
 {
   for ($j=1;$j<=$i;$j++)
    {

     echo "X";
echo "&nbsp&nbsp";
$k=$k+10;
    }
echo "<br>";
}
$i=4;
while ($i>=1)
 {
$j=1;
   while ($j<=$i)
    {

     echo "+";
     echo "&nbsp&nbsp";
     
      $j++;
    }
$i--;
echo "<br>";
}


?>


</body>
</html>







<?php
for ($a=1;$a<=3;$a++)
{
  for ($j=1;$j<=$a;$j++)
  {
  echo $a;
echo "&nbsp";
  }
echo "<br>";


}

?>

