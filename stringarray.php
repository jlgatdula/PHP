<?php
$string1="string in double quotes";
$string2='string in single quotes';
echo'hello. $string1<br>';
echo"hello. $string1<br>";
echo'hello. $string2<br>';
echo"hello. $string2<br>";
echo"the value of \$string1 is $string1<br>";
echo"the value of \$string1 is \"$string1\"<br>";
$string3="W3school is great!";
print strlen("$string3");
echo"<br>";
print strpos("$string3","great");
echo"<br>";
$country = array("USA","UK","UAE");
print_r($country);
echo"<br>";
//array initialization method 1
$student_info=array("Peter","BLIS","1985-01-01","5'6");
print_r($student_info);
echo"<br>";
$student_info1=array("name"=>"Peter","course"=>"BLIS","bday"=>"1985-01-01","height"=>"5'6");
//array initialization method 2
print_r($student_info1);
echo"<br>";
//array initialization method 3
$student_info2=array();
$student_info2[0]="Peter";
$student_info2[1]="BLIS";
$student_info2[2]="1985-01-01";
$student_info2[3]="5'6";
print_r($student_info2);
echo"<br>";
//array initialization method 4
$student_info3=array();
$student_info3["name"]="Peter"; //use " " for naming indexes via strings
$student_info3["course"]="BLIS";
$student_info3["bday"]="1985-01-01";
$student_info3["height"]="5'6";
print_r($student_info3);
echo"<br>";
//printing array elements
print($student_info2[0]);
echo"<br>";
print($student_info3["bday"]);
echo"<br>";
$employee=array(
array("Sonia","QC","F"),
array("Bob","Manila","M"),
array("Bong","Pasay","F")
);
print_r($employee);
echo"<br>";
//display Manila
print($employee[1][1]);
echo"<br>";
//display Sonia is in Manila
print($employee[0][0]. " is in " .$employee[1][1]);
?>
