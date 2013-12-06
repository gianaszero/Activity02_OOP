<html>
<head>
	<title>Messages</title>
</head>
<header>
	<center><b> GuestBook</b></center>
</header>
<body>
<center>
		<table border = "1" cellspacing = "3">
			<thead>
				<th>Name/Date</th>
				<th>Messages</th>
			</thead>
			
			<tbody>
				<tr>
					<?php 
						include "MessageDAO.php";
						$obj = new MessageDAO();
						$recordWithApproval = $obj->showTableWithApproval();
						if(is_null($recordWithApproval)){
							echo "<td> No Content</td>";
							echo "<td> No Content</td>";
						}else{
							foreach($recordWithApproval as $record){
								echo "<tr><td>" . $record['name'] . "<br/><sup>" . $record['date_posted'] . "</sup></td>";
								echo "<td>" . $record['message'] . "</td></tr>";
							}
						}
			 		?>
				</tr>

			</tbody>
		
		</table>
		
		<br/><br/>
		
		<table>
			<tr>
				<td>
					<center>
					<h2>POST NEW MESSAGE</h2>
					<form method = "POST" action = "BackEnd.php">
						Name:<input type = "text" name = "name" id = "name"><br>
						Email:<input type = "text" name = "emailAdd" id = "emailAdd"><br>
						Message:<br><textarea rows = "5" cols = "22" name = "message" id = "message"></textarea><br>
						<input type = "submit" name = "submitBtn" value = "POST MESSAGE"><br/>
						<a href="View.php">View Messages</a>
					</form>
					</center>
				</td>
			</tr>	
		</table>		
</center>
</body>
</html>
