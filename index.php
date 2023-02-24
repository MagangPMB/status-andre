<?php
include 'config.php';

if (isset($_POST['post_status'])){
    $nama = $_POST['nama'];
    $status = $_POST['status'];

    $sql = "INSERT INTO update_status (nama, status)
    VALUE ('$nama', '$status')";

if ($conn->query($sql) === TRUE) {
    header("Refresh:0");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Status Update</title>
</head>
<div class="wrapper">
        <body>
        <form action="" method="POST" class="form">
			<input type="text" class="nama" name="nama" placeholder="Nama">
			<br>
			<textarea name="status" cols="50" rows="3" class="status" placeholder="Apa yang anda pikirkan?"></textarea>
			<br>
			<button type="submit" class="btn" name="post_status">Post</button>
		</form>
</div>


        <div class="content">
        <?php
        $sql = "SELECT * FROM update_status ";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
          // output data of each row
          while($row =$result->fetch_assoc()) {
			
   
    ?>
	Postingan : 
    <h3><?php echo $row['nama']; ?></h3>
    <p><?php echo $row['status']; ?></p>
	Pendapat : 
	<br>
	<?php
			$sql2 = "SELECT * FROM comen where id_status = ". $row ['id_status'];

			$result2 = mysqli_query($conn, $sql2);
			if ($result2->num_rows > 0) {
				// output data of each row
				while($row2 =$result2->fetch_assoc()) {
					
					echo $row2['nama'];
					echo '<br>';
					echo $row2['comen'];
					echo '<br>';
				}}

			// var_dump ($sql2);
		
		?>
		
		
	
	<form action="" method="POST" class="form">
			<input type="text" class="nama" name="nama" placeholder="Nama">
			<br>
			<textarea name="comen" cols="30" rows="3" class="comen" placeholder="Comen"></textarea>
			<br>
			<input type="hidden" name="id_status" value="<?php echo $row['id_status'] ?>" >
			<button type="submit" class="btn" name="post_comment" >Post Comment</button>
		</form>
	
	<?php  } ?>
	
   
	
		<?php }?>
		
		<?php
	if (isset($_POST['post_comment'])) {
		

		$nama = $_POST['nama'];
		$comen = $_POST['comen'];
		$id_status = $_POST['id_status'];
		
		$sql = "INSERT INTO comen (id_status, nama, comen)
		VALUES ('$id_status','$nama', '$comen')";

if ($conn->query($sql) === TRUE) {
    header("Refresh:0");
    echo "";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

    }
?>

    <!-- <form action="" method="POST" class="form">
			<input type="text" class="nama" name="nama" placeholder="Nama">
			<br>
			<textarea name="comen" cols="30" rows="3" class="comen" placeholder="Comen"></textarea>
			<br>
			<button type="submit" class="btn" name="post_comment">Post Comment</button>
		</form> -->

		

	


<!-- <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>-----</title>
</head> -->
<!-- <div class="wrapper">
        <body>
        <form action="" method="POST" class="form">
			<input type="text" class="nama" name="nama" placeholder="Nama">
			<br>
			<textarea name="comen" cols="30" rows="3" class="comen" placeholder="Comen"></textarea>
			<br>
			<button type="submit" class="btn" name="post_comment">Post Comment</button>
		</form>	
        </div> -->



   
</body>
</html>