<?php
echo "<br>";
echo "<br>";
echo "1=>";
{
$arr=[6,7,3,2,54,6,5];  
sort($arr); //index asending order  array sort function


print_r($arr);
}
{
    echo "<br>";
    $array=["c"=>"10","v"=>"60","g"=>"40"]; 
    
    asort ($array); //associate asending order array asort function

    print_r($array);
    echo "<br>";
}
?>


<?php
echo "<br>";
echo "2=>";
{
$arr=[6,7,3,2,54,30,5];  
rsort($arr); //index descending order  array sort function
print_r($arr);
}
{
    echo "<br>";
    $array=["z"=>"10","v"=>"60","k"=>"40"]; 
    
    asort ($array); //associate descending order array arsort function

    print_r($array);
}
?>


<?php
echo "<br>";
echo "<br>";
echo "3=>";
{
$arr=["z"=>"50","v"=>"60","k"=>"40"]; 
ksort($arr); //index Ascending order  array sort function
print_r($arr);
}
{
    echo "<br>";
    $array=["z"=>"10","v"=>"60","k"=>"40"]; 
    
    krsort($array); //associate descending order array arsort function

    print_r($array);
}
?>


<?php
echo"<br>";
echo"<br>";
echo "4=>";
$arr= [1,2,3,4,5,6,7];
$res=array_chunk($arr,2);
print_r($res);
echo "<br>";
$res=array_chunk($arr,3);
print_r($res);
?>


<?php
echo "<br>";
echo "<br>";
echo "5=>";
$arr=[1,2,3];
$arr1=[4,5,6];
$res=array_merge($arr,$arr1);
print_r($res);
?>


<?php
echo "<br>";
echo "<br>";
echo "6=>";
$arr=[1,2,6,4,3,2,1,6,4,8,3,9,];
$res=array_unique($arr);
print_r($res);
?>


<?php

echo "<br>";
echo "<br>";
echo "7=>";
$arr=[1,6,3,4,82,3,45];
$res=array_rand($arr,1);
print_r($res);   //or we can use echo $res;
$res=array_rand($arr,1);
print_r($res);
?>


<?php
echo "<br>";
echo "<br>";
echo "8=>";
$arr=[1,2,3,4,5,6];
$res=array_sum($arr);
print_r($res);   //or we can use echo $res;
?>


<?php
echo "<br>";
echo "<br>";
echo "9=>";
$arr=[1,2,3,4,5,6];
$res=array_product($arr);
echo $res;
?>


<?php
echo "<br>";
echo "<br>";
echo "10=>";
$arr=[8,4,5,6,1,3];
$res=array_reverse($arr);
print_r($res);
?>


<?php
echo "<br>";
echo "<br>";
echo "11=>";
$arr=[5,3,2,6,7];
array_push($arr,8);
print_r($arr);
array_push($arr,9,10);
print_r($arr);
?>


<?php
echo "<br>";
echo "<br>";
echo "12=>";
$arr=[5,3,2,6,7];
array_pop($arr);
print_r($arr);
array_pop($arr);
print_r($arr);
?>


<?php
echo "<br>";
echo "<br>";
echo "13=>";
$arr=[5,3,2,6,7];
array_shift($arr);
print_r($arr);
array_shift($arr);
print_r($arr);
?>


<?php

echo "<br>";
echo "<br>";
echo "14=>";
$arr=[5,3,2,6,7];
array_unshift($arr,8);
print_r($arr);
array_unshift($arr,10,11);
print_r($arr);
?>  


<?php
echo "<br>";
echo "<br>";
echo "15=>";                                                                
$arr=[1,2,3,4,5,6];
echo sizeof($arr);  //sizeof & count both are same gives lenght of array
echo "<br>";
echo count($arr);
?>


<?php
echo "<br>";
echo "<br>";
echo "16=>";
$arr=[1,2,3];
list($a,$b,$c)=$arr; /*assign variable
                     for array values*/
echo $a; echo"&nbsp";
echo $b; echo"&nbsp";
echo $c; echo"&nbsp";
?>


<?php
echo "<br>";
echo "<br>";
echo "example of Above list funcion=>";
$arr=["Vicky",28,50.36];
list($a, ,$c)=$arr; /*if we dont want middle 
                   value then have to put space
                   ,if we dont give space it assign 
                   variable $c for age value(28)*/
echo $a; echo"&nbsp";
echo $b; echo"&nbsp";
echo $c; echo"&nbsp";
?>


<?php
echo "<br>";
echo "<br>";
$arr=[1,2,3,4,5,6];
$res=shuffle($arr);
print_r($arr);
?>
