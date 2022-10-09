<?php
include('header.php')
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4>Register Now</h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" >
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="name" name="first_name" class="form-control" placeholder="First Name">
                        </div>
                        
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="name" name="last_name" class="form-control" placeholder="Last Name">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password">
                        </div>

                        <div class="form-group">
                            <label>Phone no.</label>
                            <input type="phone" name="phone" class="form-control" placeholder="Enter Phone no.">
                        </div>
                        
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                        <button type="submit" name="register_btn" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
include('footer.php')
?>