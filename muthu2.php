<html>
<head>
</head>
<body>
<?php
echo $_POST['fname'];
echo "<br />";
echo $_POST['lname'];
echo "<br />";
echo $_POST['about'];

?>


<form action="muthu.php" method="POST">
First Name: <input type="text" name="fname"><br />
Last Name:  <input type="text" name="lname"><br />
About: <textarea name="about"></textarea><br />
<input type="reset" name="reset">
<input type="submit" name="submit" value="submit" action="muthu.php">
</form>


</body>
</html>