ASSOCIATIVE ARRAY INBUILD FUNCTIONS

<?php 
echo "<br>";echo "<br>";echo "<b>array_key</b>=>";
$arr=["A"=>10,"B"=>20,"C"=>30];
$Newarr=array_keys($arr);
print_r($Newarr);
?>

<?php 
echo "<br>";echo "<br>";echo "<b>array_values</b>=>";
$arr=["A"=>10,"B"=>20,"C"=>30];
$Newarr=array_values($arr);
print_r($Newarr);
?>

<?php 
echo "<br>"; echo "<br>"; echo "<b>array_combine</b>=>";
$keys=["Name","age","Percentage"];
$values=["krutika",23,90.92];
$Newarr=array_combine($keys,$values);
print_r($Newarr);
?>


<?php 
echo "<br>"; echo "<br>"; echo "<b>array_change_key_case</b>=>";
$arr=["Name"=>"KRutikA","aGE"=>23,"PeRcEntaGe"=>90.92];
$Newarray=array_change_key_case($arr,CASE_UPPER); //only for KEYS tio be in upper case/capital latter 
print_r($Newarray);
?>

<?php 
echo "<br>"; echo "<br>"; echo "<b>Array_flip</b>=>";
$arr=["name"=>"krutika","age"=>"23","percentage"=>"90.92"];
$Newarray=array_flip($arr);
print_r($Newarray);
?>

<?php 
echo "<br>"; echo "<br>"; echo "<b>In_array</b>=>";
$arr=[1,2,3,4,5];
if(in_array(9,$arr))
{
    echo "3 is present";
}
else
{
    echo "3 is not present";
}
?>


<?php
echo "<br>"; echo "<br>"; echo "<b>array_key_exists</b>=>";
$arr=["A"=>10,"B"=>20,"C"=>30];
if(array_key_exists("a",$arr))
{
    echo "a is present";
}
else
{
    echo "a is not present";
}
?>

<?php
echo "<br>"; echo "<br>"; echo "<b>Array_splice</b>=>";
$arr=[1,2,3,4,5,6,7];
array_splice($arr,0,1); /*there is 0 index means
                        value 1 & 1 is lenght to delete
                        element so 0 index lenght 1 del value.*/ 
print_r($arr);
echo"<br>";
array_splice($arr,1,2);
print_r($arr);
echo"<br>";
array_splice($arr,1,3);
print_r($arr);
echo"<br>";
array_splice($arr,1,0,8);/*when want to add other
                         element just put 0,and value(8)*/
print_r($arr);
?>

<?php
echo "<br>"; echo "<br>"; echo "<b>Extract</b>=>";
$arr=["a"=>10,"b"=>20];
extract($arr);
echo $a; echo"&nbsp";
echo $b;
?>

<?php
echo "<br>"; echo "<br>"; echo "<b>Compact</b>=>";
$a=10;
$b=20;
$arr=compact("a","b");
print_r($arr);
?>

