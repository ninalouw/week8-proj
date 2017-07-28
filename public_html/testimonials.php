<!--Include our head section and our navbar-->
<?php include "partials/header.php"; ?>
    <div class="wrapper">
        <div class="section section-header">
            <div class="parallax pattern-image">
                <img src="img/myanmar-hero.jpg" alt="hero image">
                <div class="container">
                    <div class="content row">
                        <h1>Our Satisfied Clients</h1>
                        <p>Hear what our happy clients say about us!
                        </p>
                        <button class="btn-primary" role="button">Get Started &raquo;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PHP-->
    <?php
        //parse the ini file
        // $configArray = parse_ini_file("../../con/config.ini");
        define("DB_HOST", "localhost");
        define("DB_USER", "root");
        define("DB_PASSWORD", "root");
        define("DB_NAME", "testimonials_db");
        $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        // $connection = mysqli_connect($configArray["host"], $configArray["username"], $configArray["password"], $configArray["database"] );

        if (!$connection) {
            die("<p class='bg-danger'>Connection failed: " . mysqli_connect_error()."</p>");
        }
        else {
            // echo "<p>Connected successfully</p>";
            //set timezone
            date_default_timezone_set("America/Vancouver");
            //set charset
            mysqli_set_charset($connection, "utf8");
            $query = " SELECT * FROM testimonials_tb ";

            $queryResult = mysqli_query($connection, $query);

            $numberOfRows = mysqli_num_rows($queryResult);

            if($numberOfRows > 0 ) {
                echo "<div class='container'>";
                echo "<h1 class='test-h1'>Client Testimonials</h1>";

                while($row = mysqli_fetch_assoc($queryResult)) {
                    $name = $row["name"];
                    $date = $row["date"];
                    $content = $row["content"];

                    //set date format
                    $dateFormat = "l \\t\h\\e jS \of F Y";
                    $phpDate = date_create($date);
                    $userDate = date_format($phpDate, $dateFormat);

                    //Display testimonial
                    echo "<div class='col-lg-9 col-md-12 col-sm-12'>";

                    echo 	"<h3 class='test-h3'>$name</h3>";
                    echo 	"<p class='test-date text-muted'><strong>Date Submitted:</strong> $userDate</p>";
                    echo 	"<p class='test-content lead'>$content</p>";
                    echo "</div>";
                }
                echo "</div>";
            }
            //If no entries are found in columns display:
            else {
                echo "<p class='bg-warning'>There are no testimonials yet.</p>";
            }
            mysqli_close($connection);
        }
    ?>

<!--Footer-->
<?php include "partials/footer.php"; ?>