<?php
require "conn.php";

$que = "SELECT * FROM menu";
$result = mysqli_query($conn,$que);
echo "<meta name=viewport' content='width=device-width, initial-scale=1'><link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>";
echo "<br><br>";
echo "<br><br>".$c_name."<br><br>";
echo "<form action='process_bill.php' method='get' align='center'>";
echo "<table class='w3-table' border='1'>";
echo "<tr><th>Product id</th><th>product name</th><th>ptoduct price</th></tr>";
 while($row = mysqli_fetch_assoc($result)){

		echo "<tr>";
		echo "<td>".$row["pro_id"]."</td><td><input type='checkbox' name='product[]' id='product' value='".$row['pro_name']."'>".$row['pro_name']."</td><td>".$row["pro_price"]."</td>";
		echo "</tr>";
 }
 echo "</table><input type='submit' value-'next' align='center' value='Next'/></form>";
?>
