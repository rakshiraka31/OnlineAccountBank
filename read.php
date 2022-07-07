<?php
include_once("config.php");
$result = mysqli_query($mysqli,"SELECT * FROM account ORDER BY id DESC"); 
if (!$result) die ("Database fetch failed: " . mysqli_error($mysqli));
?>

<html>
<head>	
	<title> view Reserved room</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<a href="index.html"> <h2>Click here to Open  the Online Bank Account</h2></a>
	<br>
	
	<br>
	
	<table width='80%' border=0>
	<tr bgcolor='#CCCCCC'>
        <td>FirstName</td>
        <td>last Name</td>
		<td>Bank Account Type</td>
		<td>Account</td>
		<td>Contact</td>
		<td>Income</td>
        <td> Branch</td>
		
	
	</tr>
	<?php 
		while ($row = mysqli_fetch_array($result)) {  
			echo "<tr>";
            echo "<td>".$row['fname']."</td>";
			echo "<td>".$row['lname']."</td>";
			echo "<td>".$row['atype']."</td>";
			echo "<td>".$row['abtype']."</td>";
			echo "<td>".$row['contact']."</td>";
			echo "<td>".$row['income']."</td>";
			echo "<td>".$row['branch']."</td>";
		
		}
	?>
	</table>
</body>
</html>
