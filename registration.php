<?php
require_once "includes/header.php";
?>

<div class="row mt-2">
    <div class="col-8 m-auto">
    <div class="card border-info mb-3">
  <div class="card-header bg-info">Registration Form</div>
    <div class="card-body text-info">
    <form action="re_data.php" method="POST">
    <div class="form-group">
        <label>Full Name</label>
        <input type="text" class="form-control" placeholder="Enter full name" name="ful_name">
    </div>
    <div class="form-group">
        <label>Email address</label>
        <input type="email" class="form-control" placeholder="Enter email"  name="email_add">
    </div>
    <div class="form-group">
        <label >Password</label>
        <input type="password" class="form-control" placeholder="Password"  name="pass">
    </div>
    <div class="form-group">
        <label >Confirm Password</label>
        <input type="password" class="form-control" placeholder="Confirm Password"  name="conf_pass">
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male" checked>
        <label class="form-check-label" for="exampleRadios1">Male</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female" checked>
        <label class="form-check-label" for="exampleRadios2">Female</label>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
   </div>
   </div>
   </div>
</div> 


</div>
    

<?php
require_once "includes/footer.php";
?>

