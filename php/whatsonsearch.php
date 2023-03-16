<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>What's on</title>
        <link rel="stylesheet" tpye="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <div class="heading" style="background:url(background.jpeg) ">
        <h1>what'son</h1>
    </div>



    <section >
        <h1 class="form-text"><?php echo $_POST['whatson']; ?></h1>
        <div >


            <?php

           
            $dbConn = mysqli_connect("localhost", "Informatics", "IS41090", "project");

        
            if (!$dbConn) {
                die("Connection failed!" . mysqli_connect_error());
            }

            

            $onnn = $_POST['whatson'];
           

            $query = mysqli_query($dbConn, "SELECT   onnn.ondate,onnn.Suitable ,exhibition.edate,exhibition.id,exhibition.gallery,exhibition.price,exhibition.ename
            From onnn JOIN exhibition ON exhibition.edate=onnn.ondate
            WHERE onnn.ondate Like '$onnn' ");



            

            if (mysqli_num_rows($query) == 0) { ?>
                <div >
                    <div >
                        <h3 class="form-text">Sorry, under construction...</h3>
                        <a href="whatson.html" class="btn">select again</a>
                    </div>
                </div>
                <?php } else {

                while ($row = mysqli_fetch_array($query)) { ?>
                    <div >
                        <div>
                            <img src="2.png" height="500" width="900"  style="float:left"> 
                        </div>
                        <div >
                            <h3 class="form-text"><span>Date: </span><?php echo $row['ondate']; ?></h3>
                            <h3 class="form-text"><span> Suitable:</span><?php echo $row['Suitable']; ?></h3>
                            <h3 class="form-text"><span>Exhibition date:</span><?php echo $row['edate']; ?></h3>
                            <h3 class="form-text"><span>Id number : </span><?php echo $row['id']; ?></h3>
                            <h3 class="form-text"><span>Gallery location:</span><?php echo $row['gallery']; ?></h3>
                            <h3 class="form-text"><span>Exhibition Price </span><?php echo $row['price']; ?></h3>
                            <h3 class="form-text"><span>Exhibition name:</span><?php echo $row['ename']; ?></h3>
                           <button class="button1">
                            <a href="bookform.html">BOOK NOW </a>
                           </button>
                        </div>
                    </div>
            <?php }
            }
            ?>
        </div>

        </div>
    </section>
    <!-- search section ends -->

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
         
    </div>
</div>       
        </body> 
        </html>