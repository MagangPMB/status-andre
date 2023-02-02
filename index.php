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
	<title>Comment System PHP | National Coding</title>
</head>
<div class="wrapper">
        <body>
        <form action="" method="POST" class="form">
			<input type="text" class="nama" name="nama" placeholder="Nama">
			<br>
			<textarea name="status" cols="50" rows="3" class="status" placeholder="Status"></textarea>
			<br>
			<button type="submit" class="btn" name="post_status">Post</button>
		</form>
</div>


        <div class="content">
        <?php
        $sql = "SELECT * FROM update_status";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
          
    ?>
    <h3><?php echo $row['nama']; ?></h3>
    <p><?php echo $row['status']; ?></p>
    <?php } } ?>
    <?php
			$sql = "SELECT * FROM comen";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
                
		?>
		<h3><?php echo $row['nama']; ?></h3>
        <p><?php echo $row['comen']; ?></p>

		<?php } }  ?>
    <form action="" method="POST" class="form">
			<input type="text" class="nama" name="nama" placeholder="Nama">
			<br>
			<textarea name="comen" cols="30" rows="3" class="comen" placeholder="Comen"></textarea>
			<br>
			<button type="submit" class="btn" name="post_comment">Post Comment</button>
		</form>

    
</div>
    <br></br>

<?php


	if (isset($_POST['post_comment'])) {

		$nama = $_POST['nama'];
		$comen = $_POST['comen'];
		
		$sql = "INSERT INTO comen (nama, comen)
		VALUES ('$nama', '$comen')";

if ($conn->query($sql) === TRUE) {
    header("Refresh:0");
    echo "";
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
	<title>Comment System PHP | National Coding</title>
</head>
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