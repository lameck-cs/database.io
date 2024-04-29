<?php

  $name = $_POST['Name'];
  $email= $_POST ['Email'];
  $message = $_POST['Message'];
/*
  //database connection
  $conn = new mysqli('localhost','root','','web1');
  if ($conn->connect_error) {
    die('connection failed'.$conn->connect_error);
  }
  else {
    $stmt = $conn->prepare("insert into database_table(Name, Email, Phone, Message) values(?, ?, ?, ?)");
    $stmt->bind_param("ssis", $Name, $Email, $PhoneNumber, $Message);
    $stmt->execute();
    echo "Message sent successfully...";
    $stmt->close();
    $conn->close();
    }
?>
*/

  $conn = mysqli_connect("localhost","root","","database_form") or die("connection failed");
  $sql = "  INSERT INTO database_table(Name, Email, Message) VALUES ('{$name}','{$email}','{$message}')";
  $result = mysqli_query($conn, $sql) or die("Query Failed");
  header("location: http://localhost/database%20Project/assignment.html");
  mysqli_close($conn);
  ?>

