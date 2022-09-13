<?php
    include ('db_conn.php');
    if($_POST){
          $email=mysqli_escape_string($mysqli,$_POST['email']);
          $password=mysqli_escape_string($mysqli,$_POST['password']);
          $user_check_query = "SELECT * FROM user WHERE email='$email'  LIMIT 1";


      $result = mysqli_query($mysqli, $user_check_query);
      $user = mysqli_fetch_assoc($result);

      if ($user) { // if user exists
        if ($user['email'] === $email) {
            $auth=password_verify($password, $user['password']);
            if ($auth) {
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['email'] = $email;
                $_SESSION['username'] = $user['first_name'] . " " . $user['last_name'] ;
                $_SESSION['logged'] = true;
                //echo $_SESSION['user_id'];
                echo true;


            } else {
                echo "Wrong Password";
            }
        }
    }
    else
        echo 'User Doesnot exists';
    };
