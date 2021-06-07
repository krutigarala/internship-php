<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  
     <title>Dharti Rewinding</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>
  <script type="text/javascript">
    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 700
      });
    });
  </script>
    <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
    $('#slider').nivoSlider();
    });
    </script>

</head>

<body>

    <div id="main">	
        <div id="site_content">
            <?php 
            include 'header.php';
            ?>            
        <?php 
            include './image.php';
        ?>     
       
	  <div id="content_text">
              <h1>Dharti Rewinding</h1>
        <p>Here we provide rewinding service and new parts related to borewell and rewinding like 
           pump set, motors, automatic timers etc.We also provide as fast as possible service to 
           our customer and gives them best of us.There is also on call service available so anybody 
           can call just say their problems and we're here to solve them. 
        </p>
      </div><!--close content-->	    
      <div class="content_photo">
        <h3>Gallery</h3>
        <div class="content_image">
		  <a href="#"><img style=" border: 10px solid #FFF;" alt="image" src="images/city.jpg" /></a>
		</div>
		<div class="content_image">
		  <a href="#"><img style=" border: 10px solid #FFF;" alt="image" src="images/animals.jpg" /></a>
		</div>
		<div class="content_image">
		  <a href="#"><img style=" border: 10px solid #FFF;" alt="image" src="images/sport.jpg" /></a>
		</div>
        <div class="content_image">
		  <a href="#"><img style=" border: 10px solid #FFF;" alt="image" src="images/city.jpg" /></a>
		</div>
		<div class="content_image">
		  <a href="#"><img style=" border: 10px solid #FFF;" alt="image" src="images/animals.jpg" /></a>
		</div>
		<div class="content_image">
		  <a href="#"><img style=" border: 10px solid #FFF;" alt="image" src="images/sport.jpg" /></a>
		</div>
	  </div><!--close content_photo-->			
    </div><!--close site_content-->	
    <?php
        include './footer.php';
    ?>
  </div><!--close main-->	
</body>
</html>
