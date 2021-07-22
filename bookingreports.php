<!DOCTYPE html>
<html>
<head>
	<title>table|users</title>
	<style type="text/css">
		

		table{

			font-family:monospace; 
			width:100%;
			font-size: 15px;
			text-align: left;
			color: aqua;

		}
		.container{
			background-color: white;
			margin-top: 15px;
			
				width: 1050px;
			height: 450px;
			margin-left: 150px;

		}
		.wrapper
	</style>
</head>
<body bgcolor="blue">

	<div class="container">
		<div class="wrapper">
			<h3> bookings reports</h3>
		</div>
		<form action=""method="POST">

        <table border="1">
	    <tr>
	    <th>id</th>
	    <th>username</th>
	    <th>email</th>
	    <th>date</th>
	    <th>location</th>
	    <th>session</th>
        </tr>
        <tbody>
        	<?php
//here it is all about reports, they can be viewed only by the adminstrators;
require'connect.php';

$sql="SELECT `id`,`username`,`email`,`date`,`location`,`session` FROM `bookings`";

$result=$conn->query($sql);
if ($result->num_rows>0) {

	while ($row=$result->fetch_assoc()) {
		echo "<tr><td>".$row["id"]."</td>      <td>". $row["username"]."  </td> <td>".  $row["email"]."</td> <td>". $row["date"]." </td> <td>". $row["location"]." </td> <td>". $row["session"]."</td> </tr>";
	}
}
else{
	echo "zero results";
}
$conn->close();
?>
        	
        </tbody>

     </table>
</form>
</div>
</body>
</html>

      
