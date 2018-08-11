<!DOCTYPE html>
<html>
<body>
<?php
$Fname = $_POST['Fname'];
$Mname = $_POST['Mname'];
$Lname = $_POST['Lname'];
$Email = $_POST['Email'];
$Gender = $_POST['gender'];
$Massage = $_POST['msg'];
echo "Hi $Fname  $Mname   $Lname  <br>";
echo "Email: $Email <br>";
echo "Gender:$Gender <br>";
echo " Massage:$Massage ";

?>
</body>
</html>