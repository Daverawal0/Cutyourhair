<?php include_once('header.php');
if(!isset($_SESSION)){
  session_start();
}
    include 'backend/db_conn.php';
?>
<div class="jumbotron">
	<p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
          						<h2>Manage <b>Booking</b></h2>
          					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
											<th>SN</th>
                      <th>Booked on</th>
                      <th>Booking Date</th>
          						<th>Booking Time</th>
                      <th>Services</th>
                      <th>Comment</th>
                    </tr>
                </thead>
				<tbody>

				<?php
        $email = $_SESSION['email'];
				$result = mysqli_query($mysqli,"SELECT * FROM booking where email='$email'");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
            $datebooked=$row["datebooked"];
            $bookingdate=$row["bookingdate"];
            $bookingtime=$row["bookingtime"];
            $services=$row["services"];
            $comment=$row["comment"];
				?>
				<tr id="<?php echo $row["id"]; ?>">
					<td><?php echo $i; ?></td>
					<td><?php echo $datebooked; ?></td>
					<td><?php echo $bookingdate; ?></td>
					<td><?php echo $bookingtime; ?></td>
					<td><?php echo $services; ?></td>
          <td><?php echo $comment; ?></td>
					<td>
            <button class="btn btn-danger" value="<?php echo $row["id"]; ?>">Delete</button>
          </td>
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>

        </div>
    </div>

  <script>
     $(document).ready(function() {
     $("button").click(function() {
     var delete_id = $(this).val();
     $.ajax({
     type: "POST",
     url: "backend/deleteBooking.php",
     data: {delete_id: delete_id},
     cache: false,
     success: function(data) {
     alert(data);
     location.reload();
     },
     error: function(xhr, status, error) {
     console.error(xhr);
     }
     });

     });

    });
  </script>

<?php include_once('footer.php');?>
