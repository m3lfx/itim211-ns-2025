<?php
    include("../includes/config.php");
    // print_r($_POST);
    $email = trim($_POST['email']);
    $password = sha1(trim($_POST['password']));
    
    // $password = sha1($password);
    var_dump($password);
    $sql = "INSERT INTO users (email,password) VALUES('$email', '$password')";
    // var_dump($sql);
    $result = mysqli_query($conn, $sql);
    if($result) {
        header("Location: ../listener/create.php");
        
    }
  
?>