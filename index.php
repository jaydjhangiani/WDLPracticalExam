<html>
<head>
</head>
<body>
	<form id ="" action = "count.php" method="post">
		<table>
			<tr>
				<td>
					<input type="submit" value="open webpage" class="submit">
				</td>
				<td>
					<?php
						session_start();
						if(empty($_SESSION['count'])){
							$_SESSION['count'] = 0;
						}
						$counter = $_SESSION['count'];
						echo "<label>COUNTER : ".$counter."<label>";
					?>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
