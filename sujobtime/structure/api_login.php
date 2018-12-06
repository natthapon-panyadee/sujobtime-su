<?php



 if(isset($_POST['inputUsername'])&&isset($_POST['inputPassword'])){
  session_start();
  require_once('connectDB.php');
  $sql = "SELECT * FROM user WHERE username = '".$_POST['inputUsername']."' AND password = '".$_POST['inputPassword']."'";
  if($result=$conn->query($sql)){
   if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
     // $_SESSION['admin'] = $row['admin_user'];
     $_SESSION['user'] = $row['user_id'];
     
     
    }
    echo "เข้าสู่ระบบสำเร็จ";
   }else{
    echo "ชื่อผู้ใช้งาน หรือรหัสผ่าน ไม่ถูกต้อง";
   }

  }else{
   echo "server error";
  }
  $conn->close();
 }
?>