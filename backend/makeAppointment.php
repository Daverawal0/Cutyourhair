<?php
if(!isset($_SESSION)){
  session_start();
}
    include 'db_conn.php';
    $errors=array();

	if($_POST){
        $bookingDate= mysqli_escape_string($mysqli, $_POST['date']);
        $bookingTime= mysqli_escape_string($mysqli, $_POST['time']);
        $services= $_POST['services'];
        $comment= mysqli_escape_string($mysqli, $_POST['comment']);
        $dateBooked= date("Y-m-d");
        $email=$_SESSION['email'];
        $username="";
        $phone="";
        $service="";
        foreach($services as $currentService){
          $service .= $currentService.", ";
        }

        $userDetailsQuery = "SELECT * FROM user WHERE email='$email' LIMIT 1";
        $result = mysqli_query($mysqli, $userDetailsQuery);
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
        		$username= $row['first_name'] . " " . $row['last_name'];
        		$phone= $row['phone'];
          }

          if (count($errors) == 0) {
              $sql="INSERT INTO booking(datebooked, bookingdate, bookingtime, email, services, phone, comment)
                                    VALUES('$dateBooked', '$bookingDate', '$bookingTime', '$email', '$service', '$phone', '$comment');";
              $result=mysqli_query($mysqli,$sql);
              if($result){
                  echo true;
                  //echo "Booking successfull";
              }
              //echo "$dateBooked". "$bookingDate". "$bookingTime". "$email". "$service"."$phone". "$comment";
            }
          else{
              array_push($errors, "Server Error.");
              echo $errors[0].$mysqli -> error;
          }

        } else {
          echo "0 results";
        }


	}


?>
