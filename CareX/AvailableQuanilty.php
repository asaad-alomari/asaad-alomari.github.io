<?php
// Connect to the database
    $conn = mysqli_connect('localhost', 'root', '', 'pharmacydatabase', 3306);

    // Check the connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    // Execute the SQL query
    $result1 = mysqli_query($conn, "SELECT Quantity FROM irbidproducts WHERE Acetaminophen = 'Acetaminophen'");
    $result2 = mysqli_query($conn, "SELECT Quantity FROM irbidproducts WHERE Ibuprofen = 'Ibuprofen'");
    $result3 = mysqli_query($conn, "SELECT Quantity FROM irbidproducts WHERE Aspirin = 'Aspirin'");
    $result4 = mysqli_query($conn, "SELECT Quantity FROM irbidproducts WHERE Metformin = 'Metformin'");
    $result5 = mysqli_query($conn, "SELECT Quantity FROM irbidproducts WHERE Antihistamines = 'Antihistamines'");
    $result6 = mysqli_query($conn, "SELECT Quantity FROM irbidproducts WHERE Panadol = 'Panadol'");
    $result7 = mysqli_query($conn, "SELECT Quantity FROM irbidproducts WHERE VoluminousMillionLashes = 'VoluminousMillionLashes'");
    $result8 = mysqli_query($conn, "SELECT Quantity FROM irbidproducts WHERE RoseFirmingEye = 'RoseFirmingEye'");

    // Fetch the row and print the quantity
    $row0 = mysqli_fetch_assoc($result1);
    $row1 = mysqli_fetch_assoc($result2);
    $row2 = mysqli_fetch_assoc($result3);
    $row3 = mysqli_fetch_assoc($result4);
    $row4 = mysqli_fetch_assoc($result5);
    $row5 = mysqli_fetch_assoc($result6);
    $row6 = mysqli_fetch_assoc($result7);
    $row7 = mysqli_fetch_assoc($result8);

    // Close the connection
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareX Pharmacy | Products</title>
    <link rel="shortcuts icon" href="Images/Logo/logoo.png">
    <link rel="stylesheet" href="styleGo.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet"></head>
<body>
    <!--Start Header-->
    <div class="header">
        <div class="container">
            <img class="logo" src="Images/Logo/logoo.png"  alt="">
            <li><a class="homepage.html" href="homepage.html">Home</a></li>
            <li>
                <a href="AvailableQuanilty.php">Products</a>
                <select name="pages" onchange="location = this.value;">
                  <option>Branches</option>
                  <option value="AvailableQuanilty.php">Irbid</option>
                  <option value="KarakProducts.php">Karak</option>
                  <option value="Ma'an.php">Ma'an</option>
                  <option value="Amman.php">Amman</option>
                </select>
            </li>   
            <li><a href="homepage.html#services">Services</a></li>
            <li><a href="AskDoctor.html">Ask a Doctor</a></li>
            <li><a href="locations.html">Locations ꜜ</a></li>
            <!--<li><a href="login.html">Account</a></li>-->
            </a>
            <div class="links">
                <span class="icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <ul>    
                    <li><a class="homepage.html" href="homepage.html">Home</a></li>
                    <li><a href="AvailableQuanilty.php">Products</a></li>
                    <li><a href="homepage.html#services">Services</a></li>
                    <li><a href="AskDoctor.html">Ask a Doctor</a></li>
                    <li>
                        <a href="locations.html">Locations ꜜ</a>
                        <!--<ul class="dropdown">
                            <li><a href="#">Amman</a></li>
                            <li><a href="#">Irbid</a></li>
                            <li><a href="#">Karak</a></li>
                            <li><a href="#">Ma'an</a></li>
                        </ul><-->
                    </li>
                    <!--<li><a href="login.html">Account</a></li>-->
                    <li><a href="homepage.html#contact">Contact</a></li>

                </ul>
            </div>
        </div>
    </div>  

    <!--Start Our Body (Products)-->
    <h2>Irbid Available Products</h2>
    <div class="contanier-products">
        <div class="box-products">
            <img src="Images/Homepage/acetaminophen.png">
            <h2>Acetaminophen</h2>
            <p>A pain reliever and fever reducer.</p>
            <span>Not Available to Purchase</span>
            <div class="options-products">
                <p> Quantity Available: <?php echo $row0['Quantity']?> </p>
                <a href="AskDoctor.html">Ask A Doctor About This Product</a>

            </div>
        </div>
        <div class="box-products">
            <img src="Images/Homepage/Ibuprofen.png">
            <h2>Ibuprofen</h2>
            <p>A non-steroidal anti-inflammatory drug used to reduce pain and inflammation.</p>
            <span>Not Available to Purchase</span>
            <div class="options-products">
                    <p> Quantity Available: <?php echo $row1['Quantity']?> </p>
                    <a href="AskDoctor.html">Ask A Doctor About This Product</a>
            </div>
        </div>
        <div class="box-products">
            <img src="Images/Homepage/aspirn.png">
            <h2>Aspirin</h2>
            <p>A pain reliever, fever reducer, and blood thinner.</p>
            <span>Not Available to Purchase</span>
            <div class="options-products">
                <p> Quantity Available: <?php echo $row2['Quantity']?> </p>
                <a href="AskDoctor.html">Ask A Doctor About This Product</a><br>
            </div>
        </div>

        <div class="box-products">
            <img src="Images/Homepage/metformin.png">
            <h2>Metformin</h2>
            <p>A medication used to treat type 2 diabetes.</p>
            <span>Not Available to Purchase</span>
            <div class="options-products">
                <p> Quantity Available: <?php echo $row3['Quantity']?> </p>
                <a href="AskDoctor.html">Ask A Doctor About This Product</a>
            </div>
        </div>

        <div class="box-products">
            <img src="Images/Homepage/benadry.png">
            <h2>Antihistamines</h2>
            <p>Medications that block the effects of histamine, a chemical released by the body during an allergic reaction.</p>
            <span>Not Available to Purchase</span>
            <div class="options-products">
                <p> Quantity Available: <?php echo $row4['Quantity']?> </p>
                <a href="AskDoctor.html">Ask A Doctor About This Product</a>
            </div>
        </div>

        <div class="box-products">
            <img src="Images/Homepage/panadol.png">
            <h2>Panadol</h2>
            <p>Capsule-shaped, and have a gelatin-coating over the tablet that allows for easy swallowing</p>
            <span>Not Available to Purchase</span>
            <div class="options-products">
            <p> Quantity Available: <?php echo $row5['Quantity']?> </p>

                <a href="AskDoctor.html">Ask A Doctor About This Product</a>
            </div>
        </div>

        <div class="box-products">
            <img src="Images/Homepage/cosmet.png">
            <h2>Voluminous Million Lashes</h2>
            <p>A mascara product that is designed to create the appearance of full, thick, and voluminous lashes.</p>
            <span>Not Available to Purchase</span>
            <div class="options-products">
                <p> Quantity Available: <?php echo $row6['Quantity']?> </p>
                <a href="AskDoctor.html">Ask A Doctor About This Product</a>
            </div>
        </div>

        <div class="box-products">
            <img src="Images/Homepage/10.png">
            <h2>Rose Firming Eye</h2>
            <p>A skincare product that is formulated to firm and tighten the skin around the eye area.</p>
            <span>Not Available to Purchase</span>
            <div class="options-products">
                <p> Quantity Available: <?php echo $row7['Quantity']?> </p>
                <a href="AskDoctor.html">Ask A Doctor About This Product</a>
            </div>
        </div>
    </div>
    <!--Start Footer -->
    <footer>
        <div class="footer-section">
            <div class="col-lg-3 col-md-6">
            <div class="footer-title">Contact Us</div>
            <div class="footer-links">
                    <li>
                    <i class="fas fa-map-marker-alt"></i> Jordan, Amman
                    </li>
                    <li>
                    <i class="fas fa-phone"></i>+962 79 999-999-99
                    </li>
                    <li>
                    <i class="fas fa-envelope"></i> support@carex.com
                    </li>
                </div>
            </ul>
        </div>
    </div>
    <!--Footer-->
        <div class="footer-section">
            <div class="col-lg-3 col-md-6">
            <div class="footer-title">Follow Us</div>
            <div class="social-links">

                <li><a href="www.facebook.com"><i class="fab fa-facebook"></i> Facebook</a></li>
                <li><a href="twitter.com"><i class="fab fa-twitter"></i> Twitter</a></li>
                <li><a href="instagram.com"><i class="fab fa-instagram"></i> Instagram</a></li>
                <li><a href="linkedin.com"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
            </div>
        </div>
    </footer>   
</body>
</html>