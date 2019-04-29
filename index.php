<?php

require "conn.php"
?>
<html>
<head>
<script>
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
  <br><br><?php echo $c_name ?><br><br>
<form action="create_bill.php" method="get" align='center'>
<input type="submit" value="create bill" class=""/>
</form><br>
<form action="find_bill.php" method="get" align='center'>
<input type="submit" value="find bill"/>
</form>
</body>
</html>
