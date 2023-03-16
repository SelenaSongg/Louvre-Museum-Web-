<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exhibition</title>
        <link rel="stylesheet" tpye="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
    </head>
    <body>
<!--nav section-->
<nav class="navbar">
  <div class="navbar__container">
  <img src="logo.png" id="nabar__logo"  width="50" height="50"> 
  <ul class="navbar__menu">
      <li class="navbar__item">
          <a href="artworks.html" class="navbar__links">Artworks </a>
      </li>
      <li class="navbar__item">
          <a href="exhibition.html" class="navbar__links">Exhibition</a>
      </li>
      <li class="navbar__item"> 
          <a href="gallery.html" class="navbar__links"> Gallery</a>
      </li>
      <li class="navbar__item"> 
          <a href="whatson.html" class="navbar__links">What'son</a>
      </li>
     
      <li class="navbar__btn">
          <a href="project.html" class="button">Home Page</a>
      </li>
  </ul>
  </div>
</nav>       




<!-- search section start -->

<div class="heading" style="background:url(background.png) no-repeat">
        <h1>exhibition</h1>
    </div>



    <section class="location">
        <h1 class="heading-title"><?php echo $_POST['gallery']; ?></h1>
        <div class="box-container">


            <?php

           
            $dbConn = mysqli_connect("localhost", "Informatics", "IS41090", "project");

        
            if (!$dbConn) {
                die("Connection failed!" . mysqli_connect_error());
            }

            

            $gallery = $_POST['gallery'];
           

            $query = mysqli_query($dbConn, "SELECT exhibition.id,exhibition.price, exhibition.ename, exhibition.date,  exhibition.gallery, gallery.name
            From exhibition JOIN gallery ON exhibition.gallery=gallery.id
            WHERE gallery.name Like '$gallery' ");



            

            if (mysqli_num_rows($query) == 0) { ?>
                <div class="box1">
                    <div class="content">
                        <h3>Sorry, No results were found!</h3>
                        <a href="exhibition.html" class="btn">try again</a>
                    </div>
                </div>
                <?php } else {

                while ($row = mysqli_fetch_array($query)) { ?>
                    <div class="box">
                        <div class="image">
                            <img src="background.jpeg" alt="">
                        </div>
                        <div class="content">
                            <h3><span>id </span><?php echo $row['id']; ?></h3>
                            <h3><span> price</span><?php echo $row['ename']; ?></h3>
                            <h3><span>date</span><?php echo $row['date']; ?></h3>
                            <h3><span>gallery</span><?php echo $row['gallery']; ?></h3>
                            <a href="project.html" class="btn">book now</a>
                        </div>
                    </div>
            <?php }
            }
            ?>
        </div>

        </div>
    </section>

    <!-- search section ends -->




<!--footer section-->
<div class="footer">
    <div class="col-1">
        <h3>USEFUL LINKS</h3>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        <a href="#">Shop</a>
        <a href="#">Blog</a>
    </div>
    <div class="col-2">
        <h3>NEWSLETTER</h3>
        <form>
            <input type="email" placeholder="Your Email Address " required>
            <br>
            <button type="submit">SUBSCRIBE NOW</button>
        </form>
    </div>
    <div class="col-1">
        <h3>HELP</h3>
        <a href="#">Contact Us</a>
        <a href="#">Support</a>
        
        <div class="social-icons">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-behance"></i>
        </div>    
    </div>
</div>       
        </body> 
        </html>