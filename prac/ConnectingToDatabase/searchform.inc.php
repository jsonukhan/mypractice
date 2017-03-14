<?php 
echo '<br>';
	if(isset($_POST['username'])){
		$username = $_POST['username'];
		
		if(!empty($username)){
			$query = "select `emp`.`username` as `User`, `dept`.`name` as `Name` from `emp` left join `dept` on `emp`.`dept` = `dept`.`id` where `emp`.`username` = '$username'";
			if($query_run = mysql_query($query)){
				while($query_row = mysql_fetch_assoc($query_run)){
					$username = $query_row['User'];
					$dpt = $query_row['Name'];
			
					echo $username .' belongs to '. $dpt .' department.<br>';
				}
			}
		}else{
			echo 'Provide a username';
		}
	}

?>

<form action = "<?php echo $current_file?>" method = "POST">
	Username: <input type = "text" name = "username"/>
	<br>
	<br>
	<input type = "submit" value = "Search"/>
</form>