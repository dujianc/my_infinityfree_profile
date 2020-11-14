<html>
<body>
<?php
$con = mysqli_connect("sql104.epizy.com","epiz_27153645","") or die("database is not available!");
mysqli_select_db($con, "epiz_27153645_jd_database") or die("database is not available!");
$sql="INSERT INTO data (name, email, subject, message)
VALUES
('$_POST[name]', '$_POST[email]', '$_POST[subject]', '$_POST[message]')";
if (!mysqli_query($con, $sql))
  {
  die("data is not available!");
  }
echo "Message received. Will get back to you ASAP";
mysqli_close($con)
?>
</body>
</html>