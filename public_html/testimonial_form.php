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
    <p>Welcome to the owner's page, <?php echo $_SESSION['username'] ?>.</p> 
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
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
    </form>
</div>
    <?php 
        
        if(isset($_POST['name']) && isset($_POST['content']) && isset($_POST['submit'])){

            $host = "localhost";
            $username = "root";
            $password = "root";
            $database = "testimonials_db";
            $connection = mysqli_connect($host, $username, $password, $database);

            if(!$connection) {
                echo "Connection Failed";
            }
            else {

                $name =  mysqli_real_escape_string($connection,$_POST['name']);
                $date =  mysqli_real_escape_string($connection,$_POST['date']);
                $content =  mysqli_real_escape_string($connection,$_POST['content']);


                $insert = "INSERT INTO testimonials_tb (name, date, content) 
                        VALUES ('$name','$date','$content')";

                $insertResult = mysqli_query($connection, $insert);

                echo "<p>Successfully added testimonial!</p>";
            }
        }
    ?>
<?php include "partials/footer.php"; ?>