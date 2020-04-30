<?php
for($i=0;$i<=4;$i++)
{
    for($j=1;$j<=5;$j++)
    { 
        echo $i;
        
    }
    echo "<br>";
}
?>



<?php

echo "<br>";
for($i=1;$i<=5;$i++)
{
    for($j=1;$j<=$i;$j++)
    {
        echo $j;
    }
    echo "<br>";
}
?>

<?php
echo "<br>";


for($i=5;$i>=0;$i--)
{
    for($j=1;$j<=$i;$j++)
    
    {
    echo $j;
    }
    echo "<br>";
}
?>

<html>
<head>
</head>
<body>

<?php
$k=0;
for($i=1;$i<=4;$i++)
{
   for ($j=1;$j<=5;$j++)
   {
	echo "&nbsp&nbsp";
	echo $k=$k+10;
       
    }
echo "<br>";
}
?>
<html>
<head>
</head>
<body>


<?php
echo "<br>";
$k=210;      //$k use to store output with addition of 10...single line comment
for($i=1;$i<=4;$i++)
{
   for ($j=1;$j<=5;$j++)
   {
	echo "&nbsp&nbsp";
	echo $k=$k-10;
       
    }
echo "<br>";
}
?>
</html>

<?php
echo "<br>";
$a=10;
var_dump($a);
$b="krutika";
var_dump($b);
?>

<?php           /*vardum & compair oprrator /star star/use for multiple comment*/
echo "<br>";
$a=10;
echo "<br>";    
var_dump($a);
$b=10.23;
var_dump($b);
if($a==$b)
{
echo "equle";
}
else
{
    echo "notequle";
}
echo "<br>";
?>

<?php
echo "<br>";
$a=60;
if ($a==100) /*if--elseif---if use,when 1st if statement 
               not true then it goes to else if ..
               .when same then goes to else*/
{
echo "yes it is 100";
}
elseif($a==60)
{
    echo "it is 100";
}
else
{
    echo "It is not 10 not 100";
}
?>
<?php
echo "<br>";
$a=60;
if ($a==100)
{
echo "it is 100";
}
elseif($a==30)
{
    echo "it is 30";
}
else
{
    echo "It is not 30 not 100";
}
?>



































