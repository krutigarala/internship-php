<html>
<head>
    <?php 
        include './title.php';
    ?>
</head>
<body>
<div id="header">
	<ul>
    <li><a href="home.php"><span>Home</span></a></li>
    <li><a href="products.php"><span>Products</span></a></li>
    <li><a href="videos.php"><span>Videos</span></a></li>
    <li class="current"><a href="gallery.php"><span>Gallery</span></a></li>
    <li><a href="about.php"><span>About Us</span></a></li>
    <li><a href="contact.php"><span>Contact Us</span></a></li>
	</ul>

    <div>
    <?php 
        include './section.php';
    ?>
    </div>
    </div>
    <div id="content">
    <div>
        <ul class="section">
	<li class="first">
	<h3><a href="home.php">Skin Care Products</a></h3>
        <a href="home.php"><img src="images/modicare_vpart1.jpg" alt="Image" /></a>
	</li>
	<li>
	<h3><a href="home.php">Personal Care</a></h3>
        <a href="home.php"><img src="images/modicare_vpart2.jpg" alt="Image" /></a>
	</li>
	<li>
	<h3><a href="home.php">Home Care</a></h3>
        <a href="home.php"><img src="images/home_care.jpg" alt="Image" /></a>
	</li>
	</ul>
    </div>
    </div>
    <div id="footer">
    <?php 
        include './footer.php';
    ?>
    </div>
</body>
</html>