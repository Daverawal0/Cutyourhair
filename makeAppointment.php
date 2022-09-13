<?php include_once('header.php');?>

<div class="container">
  <div class="py-5 text-center">
    <h1 class="display-4">Book an Appointment</h1>
  </div>

    <div class="col-md-8 order-md-1">

      <div class="row">
        <div class="col-9">
          <form id="booking_form">
            <div class="mb-3">
              <label for="date">Date</label>
              <input type="date" class="form-control" id="date" name="date" required>
            </div>

            <div class="mb-3">
              <label for="time">Time</label>
              <input type="time" class="form-control" id="time" name="time" required>
            </div>

            <hr class="mb-4">

            <span class="font-weight-bold">Select Service</span>

            <hr class="mb-4">

            <div class="mb-3">
                <label class="checkbox-inline">
                    <input type="checkbox" name="services[]"
                        value="Cream & Shampoo">Hair Cutting
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" name="services[]"
                        value="Haircuting">Beard Shaving
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" name="services[]"
                        value="Beard Shaving">Cream and Shampoo
                </label>

            </div>
            <hr class="mb-4">
            <div class="mb-3">
                <label for="comment">Comments</label>
                <textarea class="form-control" id="comment" name="comment" rows="4"></textarea>
            </div>
            <hr class="mb-4">
        </div>
        <div class="col-3 align-self-center">
          <button class="btn btn-primary btn-block" type="submit">Book An Appointment</button>
        </div>
        </form>

      </div><!--close row-->
    </div><!--close col main-->
</div><!--close container-->

<?php include_once('footer.php');?>
