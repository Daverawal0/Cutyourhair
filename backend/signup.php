<?php
    include 'db_conn.php';
    $errors=array();

	if($_POST){
        $fName= mysqli_escape_string($mysqli, $_POST['firstName']);
        $lName= mysqli_escape_string($mysqli, $_POST['lastName']);
        $email= mysqli_escape_string($mysqli, $_POST['email']);
        $password= mysqli_escape_string($mysqli, $_POST['password']);
        $phone= mysqli_escape_string($mysqli, $_POST['phone']);
        $password=password_hash($password, PASSWORD_BCRYPT);

        $email_check_query = "SELECT * FROM user WHERE email='$email' LIMIT 1";
        $result = mysqli_query($mysqli, $email_check_query);
        $user = mysqli_fetch_assoc($result);

        if ($user) { // if email exists
            array_push($errors, "User with that email already exists");
        }

        if (count($errors) == 0) {

                $sql="INSERT INTO user(first_name, last_name, email, password, phone)
                                      VALUES('$fName', '$lName', '$email', '$password', '$phone');";
                $result=mysqli_query($mysqli,$sql);
                if($result){
                    echo true;
                    //echo "Added new user successfully";
                }
              }
            else{
                array_push($errors, "Server Error.");
                echo $errors[0].$mysqli -> error;
        }
	}


?>
