<?php
	// Start the session
	session_start();
?>
<!--Include our head section and our navbar-->
<?php include "partials/header.php"; ?>

    <div class="testimonial-form container">
        <h1>Add New Testimonials</h1>
        <p>Welcome to the owner's page, <?php echo $_SESSION['username'] ?> Paco. Use this form to add new testimonials to your website.</p> 
        <form action="<?php echo htmlentities( $_SERVER[ 'PHP_SELF' ] ); ?>" method="post">
        <div class="form-group">
            <label for="clientName">Client Name</label>
            <input type="text" class="form-control" id="clientName" placeholder="Client Name" name="name">
        </div>
        <div class="input-group date" data-provide="datepicker">
            <input type="date" class="form-control" name="date">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
        </div>
        <br>
        <textarea class="form-control" rows="6" placeholder="Fill in the testimonial..." name="content"></textarea>
        <br>
        <button type="submit" class="btn btn-warning" name="submit">Submit</button>
        </form>
        <br>
        <!-- logout form -->
        <form action="<?php echo htmlentities( $_SERVER[ 'PHP_SELF' ] ); ?>" method="post">
			<button class="btn btn-danger" name="logOut">Log Out</button>
		</form> 
            <?php 
                
                if(isset($_POST['name']) && isset($_POST['content']) && isset($_POST['submit'])){

                    $host = "localhost";
                    $username = "root";
                    $password = "root";
                    $database = "testimonials_db";
                    $connection = mysqli_connect($host, $username, $password, $database);

                    if(!$connection) {
                        echo "<p class='bg-danger'>Connection Failed</p>";
                    }
                    else {
                        //set timezone
                        date_default_timezone_set("America/Vancouver");
                        //set charset
                        mysqli_set_charset($connection, "utf8");
                        //escape values from form for sql
                        $name =  mysqli_real_escape_string($connection,$_POST['name']);
                        $date =  mysqli_real_escape_string($connection,$_POST['date']);
                        $content =  mysqli_real_escape_string($connection,$_POST['content']);

                        //insert
                        $insert = "INSERT INTO testimonials_tb (name, date, content) 
                                VALUES ('$name','$date','$content')";

                        $insertResult = mysqli_query($connection, $insert);

                        echo "<p class='bg-success'>Successfully added testimonial!</p>";
                    }
                    mysqli_close($connection);
                }
            ?>
            <!-- logging out -->
            <?php
                // Delete all session variables if user logs out
                if(isset($_POST['logOut']) OR !isset($_SESSION['username'])) {
                    session_unset(); 
                    session_destroy();
                    echo "<script> location.replace('logIn.php')</script>";
                }
            ?>
    <!-- end of container -->
    </div>
<?php include "partials/footer.php"; ?>