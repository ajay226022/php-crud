<?php
include('header.php');
include('connection.php');

$id = $_GET['id'];
$reg_query = "SELECT * FROM `register` WHERE `id`='$id' ";
$reg_query_run = mysqli_query($conn, $reg_query);

if (mysqli_num_rows($reg_query_run) > 0) {
    while ($row = mysqli_fetch_array($reg_query_run)) {

?>

        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Register Page</h4>
                        </div>
                        <div class="card-body">

                            <form action="code.php" method="POST">

                            <input type="hidden" name="edit_id" class="form-control" value="<?php echo $row['id']; ?>">

                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="name" name="first_name" class="form-control" value="<?php echo $row['fname']; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="name" name="last_name" class="form-control" value="<?php echo $row['lname']; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" value="<?php echo $row['pass']; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Phone no.</label>
                                    <input type="phone" name="phone" class="form-control" value="<?php echo $row['phone']; ?>">
                                </div>

                                <a href="index.php" class="btn btn-danger">Cancel</a>
                                <button type="submit" name="register_update_btn" class="btn btn-info">Update</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<?php
    }
} else {
    echo "No Data Found ";
}

include('footer.php')
?>