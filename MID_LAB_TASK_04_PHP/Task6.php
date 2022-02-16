<?php


$student=array("American","International","University","Bangladesh");
echo $student[1];
echo("<br/>");


if(in_array("American",$student)){
echo "American is there inside the array";}

else
	{ echo "American is not there ";}

  
foreach ($student  => $value) {
    echo ".value = ";
     
}
  
?>