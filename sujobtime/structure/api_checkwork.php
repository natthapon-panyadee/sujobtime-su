<?php
 if (file_exists('connectDB.php')) {
    require('connectDB.php'); // This is line 38
	}
    $tag = $_POST['tag'];
    $sql = "SELECT * FROM postwork WHERE type = 0";
    if($tag!=""){
      $sql.= " AND namework LIKE '%$tag%'";
    }
  $result=$conn->query($sql);
  echo $result->num_rows;
  $conn->close();
?>