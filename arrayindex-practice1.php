Index array
<?php 
echo "<br>";                
$arr=[10,20,60,5,67,32];
  echo sizeof($arr); //it give no of element in array
?>

<?php
echo"<br>";
$arr=array(1,2,3,4); /*It is single index array & 
                       we can write it as $arr=[1,2,3,4]*/
echo $arr[0];
echo "&nbsp";
   echo  $arr[1];
   echo "&nbsp";
  echo   $arr[2];
  echo "&nbsp";
   echo  $arr[3];
     echo"<br>";
$multi=array(                 /* It is multiple index array
                                we can write it as
                                $multi=[[10,20,30],
                                [40,50,60],
                                 [70,80,90]]*/
            array(10,20,30),
            array(40,50,60),
            array(70,80,90)
            );
echo $multi[0][0];
echo "<br>";
echo $multi[0][1];
echo "<br>";
echo $multi[0][1];
echo "<br>";
echo $multi[1][0];
echo "<br>";
echo $multi[1][1];
echo "<br>";
echo $multi[1][2];
echo "<br>";
echo $multi[2][0];
echo "<br>";
echo $multi[2][1];
echo "<br>";
echo $multi[2][2];
?>