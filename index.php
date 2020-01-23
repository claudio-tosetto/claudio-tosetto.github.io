<?php 
	
	$servername = 'remotemysql.com';
	$username = 'ozXQ1w1WBP';
	$password = 'jKuXobiwR7';
	$dbname = 'ozXQ1w1WBP';
	
	$con = new mysqli($servername, $username, $password, $dbname);
	
	$query = "SELECT * from `posts`"; 
	$result = mysqli_query($con, $query) or die(mysqli_error($con));

	mysqli_close($con); 
?>

<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Title</title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <?php
					while ($row = mysqli_fetch_object($result)) {
						echo '<p>' . $row->id . ' - ' . $row->name . '</p>';
					}
				?>
            </div>
        </div>
	</body>
</html>