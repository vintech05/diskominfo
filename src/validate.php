<?php

    /** @var PDO $conn */
global $conn;

include_once('authentication.php');
  
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = test_input($_POST["username"]);
        $password = test_input($_POST["password"]);
        $stmt = $conn->prepare("SELECT * FROM user_login");
        $stmt->execute();
        $users = $stmt->fetchAll();
        
        foreach($users as $user) {
            
            if(($user['username'] == $username) &&      
                ($user['password'] == $password)) {
                    header("location: dashboard.php");
            }
            else {
                echo "<script language='javascript'>
                    alert('Wrong Password!')
                    </script>";
                    die();
            }
        }
}
?>