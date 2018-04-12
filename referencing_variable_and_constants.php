<!DOCTYPE html>

<html>
<body>
<?php
//referencing_variable_and_constants.php
define("FIRST_NAME","Sonia ");
define("LAST_NAME","Pascua");
$university = " University of the Philippines Diliman";
$college = " College of Engineering,";
$department = "Department of Computer Science";
$affiliation = $department;
$affiliation .= $college; 
$affiliation .= $university;
print "Good morning. I am Prof. ";
echo constant("FIRST_NAME");
echo constant("LAST_NAME");
print " of the $affiliation.";
echo '<br>';
echo '<br>';
print "You may call me ";
echo constant("FIRST_NAME");
print "of the $department. See you!";
echo '<br>';
echo '<br>';
?>
</body>
</html>

