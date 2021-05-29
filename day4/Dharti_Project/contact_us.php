<html>
    <head>
    <title>Dharti Rewinding</title>
    <?php 
    include './style.php';
    ?>
  

</head>

<body>
 <div id="main">	
    <div id="site_content">
    <?php 
    include 'header.php';
    ?>
    <div id="content_text">
    <section id="contact">
    <div class="row">
    <form id="contact-form" role="form" action="" method="post">
        <table height="75%" width="180%">
            <tr><td>
                    <input type="text" class="form-control" placeholder="Enter full name" name="name" required></td>
                <td rowspan="800"><img src="images/contact.jpg" height="400px" width="400px"></td>
            </tr>
            <tr><td><input type="email" class="form-control" placeholder="Enter email address" name="email" required></td></tr>
            <tr><td><textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required></textarea></td></tr>
            <tr><td><input type="submit" class="form-control" name="send message" value="Send Message"></td></tr>
        </table>
    </form>
    </div>
    <div class="contact-image">
        
    </div>
    </div>
    </div>
     
     </section>
    <?php
        include './footer.php';
    ?> 
 </div><!--close main-->	
</body>
</html>
