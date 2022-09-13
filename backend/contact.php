<?php
    include 'db_conn.php';
    $errors=array();

	if($_POST){
        $name= mysqli_escape_string($mysqli, $_POST['name']);
        $email= mysqli_escape_string($mysqli, $_POST['email']);
        $message= mysqli_escape_string($mysqli, $_POST['message']);

        if (count($errors) == 0) {

                $sql="INSERT INTO contact(name, email, message)
                                      VALUES('$name', '$email', '$message');";
                $result=mysqli_query($mysqli,$sql);
                if($result){
                    echo true;
                    //echo "Message submitted successfully";
                }
              }
            else{
                array_push($errors, "Server Error.");
                echo $errors[0].$mysqli -> error;
        }
	}


?>
