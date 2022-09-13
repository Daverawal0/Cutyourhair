<?php include_once('header.php');?>
<div class="jumbotron">
    <div class="row">
        <div class="col">
            <div class="card bg-light">
                <div class="card-header bg-secondary text-white text-uppercase">Contact Us
                </div>
                <div class="card-body">
                    <form id="contact_form">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" class="btn btn-secondary text-right">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-secondary text-white text-uppercase">Address</div>
                <div class="card-body">
                    <p>8 Massacure Road, Strathfield</p>
                    <p>2003, NSW, Australia</p>
                    <p>Email : info@strathfieldbarber.com</p>
                    <p>Tel. +61 405245897</p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once('footer.php');?>
