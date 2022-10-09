<?php
include('header.php');
include('connection.php');
?>

<body>
  <!-- <h1>Hello, world!</h1> -->


  <div class="container">
    <div class="row">
      <!-- -------------------------------------mt-5 for top margin------------------------------ -->

      <div class="col-md-12 mt-5">
        <div class="card">
          <div class="card-header">
            <h4>
              PHP - CRUD
              <a href="register.php" class="btn btn-primary float-right">Register/Add</a>
            </h4>
          </div>
          <div class="card-body ">
            <?php
            $sql = "SELECT * FROM `register`";
            $sql_run = mysqli_query($conn, $sql);

            if (mysqli_num_rows($sql_run) > 0) {
            ?>
              <table class="table table-bordered table-dark">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">@mail</th>
                    <th scope="col">Password</th>
                    <th scope="col">Phone no.</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while ($reg_row = mysqli_fetch_array($sql_run)) {
                  ?>
                    <tr>
                      <th><?php echo $reg_row['id']; ?></th>
                      <td><?php echo $reg_row['fname']; ?></td>
                      <td><?php echo $reg_row['lname']; ?></td>
                      <td><?php echo $reg_row['email']; ?></td>
                      <td><?php echo $reg_row['pass']; ?></td>
                      <td><?php echo $reg_row['phone']; ?></td>
                      <td>
                        <a href="register-edit.php?id=<?php echo $reg_row['id']; ?>" class="btn btn-info ">Edit</a>
                      </td>
                      <td>
                        <form action="code.php" method="POST">
                        <input type="hidden" name="delete_id" value="<?php echo $reg_row['id']; ?>">
                        <button type="submit" name="register_delete_btn" class="btn btn-danger">Delete</button>
                        </form>
                       
                      </td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            <?php
            } else {
              echo "No Record Found";
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<?php
include('footer.php')
?>