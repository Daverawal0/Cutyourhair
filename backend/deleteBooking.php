<?php
if(!isset($_SESSION)){
  session_start();
}
    include 'db_conn.php';
    $errors=array();


    if(isset($_POST["delete_id"]) && !empty($_POST["delete_id"])){
    $delete_id = $_POST["delete_id"];
    //echo $delete_id;

    $sql = "DELETE FROM booking WHERE id = ?";

    if($stmt = mysqli_prepare($mysqli, $sql)){
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        $param_id = trim($delete_id);
        if(mysqli_stmt_execute($stmt)){
            echo "Successfully Deleted the booking";
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
	}else{
    echo"No data sent";
  }


?>
