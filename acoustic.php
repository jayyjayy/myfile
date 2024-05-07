<?php

    $con = mysqli_connect('localhost', 'root');
    mysqli_select_db($con, 'rjayguitars');
    $sql = "SELECT * FROM product WHERE featured=1";
    $featured = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/bootstrap.min.js"></script>
    <title>Acoustic</title>
</head>
<body>
    <div class="Header" id="2hd">
        <H1 class="bname">RjayGuitars</H1>
        <p class="bd">Building high quality and affordable guitars</p>
    </div>
    <nav class="navbar">
        <ul>
            <li><a href="http://localhost/RjayGuitars_EcomWeb%5bF%20Project%5d/acoustic.php">Acoustic</a></li>
            <li><a href="electric.html">Electric</a></li> 
            <li><a href="classical.html">Classical</a></li> 
            <li><a href="bass.html">Bass</a></li> 
            <li><a href="http://localhost/EcomWeb/RjayGuitars.php">Home</a></li>     
        </ul> 
    </nav>
    <div class="info"></div>
    <div class="Aguitar">
        <div class="row">
            <h2 class="title1">Acoustic</h2> <br> <br>
            <?php
                while ($product = mysqli_fetch_array($featured));
            ?>
            <div class="Aguitar-1">
                <h4><?= $product['title']?></h4>
                <img src="<?= $product['image'];?>" alt="<?= $product['title'];?>" />
                <p class="1price">Rs<?= $product['price']; ?></p>
            </div>
        </div>
    </div>
    <div class="footer">
        <h4>ABOUT RjayGuitars</h4>
            <p class="footc">We are a maker of world-class and affordable Philippine-made guitars and
                instruments since 2023. With over three decades 
                of experience, we have been dedicated to producing
                high-quality and exceptional-sounding instruments that
                cater to both beginners and professionals.</p>
        <h4>CONNECT WITH US</h4>
        <ul class="cws">
            <li><img src="Images/fb2.jpg"></li>
            <li><img src="Images/tt.jpg"></li>
            <li><img src="Images/yt.jpg"></li>
            <li><img src="Images/ins.jpg"></li>
        </ul>    
    </div>
</body>
</html>
