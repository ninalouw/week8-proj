<?php
	// Start the session
	session_start();
?>
<!--Include our head section and our navbar-->
<?php include "partials/header.php"; ?>
<br>
<br>
<br>
<br>
<div class="container">
    <h1>Add New Testimonials</h1>
    <p>Welcome to your own page <?php echo $_SESSION['username'] ?>.</p> 
    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
<?php include "partials/footer.php"; ?>