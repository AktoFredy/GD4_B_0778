<?php
    include '../component/sidebar.php';
    //get data user from login
    $user = $_SESSION['user'];

    //get from db
    //$query = mysqli_query($con, "SELECT * FROM users WHERE email = '$email' limit 1") or die(mysqli_error($con));
    
?>
<div class="container-fluid p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
    <div class="body d-flex justify-content-between">
        <h4>EDIT PROFILE</h4>
        <a href="./nonEditableProfile.php">
            <i class="fa-solid fa-left-long" style="color: red; font-size: 2em;"></i>
        </a>
    </div>
    <hr>
        <div class="container-fluid"> 
            <form class="row g-3" action="../process/updateDataProfile.php" method="post">
                <input id="id" name="id" value = <?php echo @$user["id"]?> type="hidden">
                <div class="col-md-12">
                  <label for="name" class="form-label">Name</label>
                  <input class="form-control" id="name" name="name" value=<?php echo @$user["name"]?> aria-describedby="emailHelp">
                </div>
                <div class="col-md-12">
                  <label for="exampleInputEmaill" class="form-label">Phone Number</label>
                  <input class="form-control" id="phonenum" name="phonenum" value=<?php echo @$user["phonenum"]?> aria-describedby="emailHelp">
                </div>
                <div class="col-md-12">
                  <label for="exampleInputEmaill" class="form-label">Email</label>
                  <input class="form-control" id="email" name="email" value=<?php echo @$user["email"]?> aria-describedby="emailHelp">
                </div>
                <div class="col-md-12">
                    <label for="job" class="form-label">Job</label>
                    <select class="form-control" id="job" name="job">
                        <option value=<?php echo @$user["job"];?> disabled selected><?php echo @$user["job"];?></option>
                        <option value="College Student">College Student</option>
                        <option value="Bank Teller">Bank Teller</option>
                        <option value="Customer Service">Customer Service</option>
                        <option value="Businessman">Businessman</option>
                    </select>
                    <div class="invalid-feedback">
                        Invalid Input.
                    </div>
                    <div class="valid-feedback">
                        Valid Input.
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="exampleInputEmaill" class="form-label">Membership</label>
                    <input type="text" class="form-control" id="membership" name="membership" value=<?php echo @$user["membership"]?> disabled readonly>
                    <div class="valid-feedback">Looks Good.</div>
                    <div class="invalid-feedback">Invalid Input.</div>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary btn-dark" type="submit" name="update">Save</button>
                </div>
              </form>
        </div>         
</div>
 </aside>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>