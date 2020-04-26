<?php
$studentdata=[
		Student1=>["Name"=>"pankaj","age"=>"25","percentage"=>"60"],        		        Student2=>["Name"=>"Vishal","age"=>"20","percentage"=>"85"],
	        Student3=>["Name"=>"pinky","age"=>"23","percentage"=>"90"]
              ];
foreach($studentdata as $key=>$value)
	  {	
		echo $key;
		echo "<br>";

           
		foreach($value as $ikey=>$ivalue)
		{
			echo $ikey;
                        echo":-";
			echo "&nbsp";
			echo $ivalue;
			echo "<br>";
		}

	        echo "<br>";
	   }

?>
