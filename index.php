<!DOCTYPE html>
<html>
<head>
  <title>Portfolio AbdulRahman RASHO</title>
</head>
<body>

      <div class="container">
         <?php include("navbar.php")
       ?>

    <!-- carousel-->
   
 <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
              <!-- Indicators --> 
              <ol class="carousel-indicators"> 
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li> 
                <li data-target="#myCarousel" data-slide-to="1"></li> 
                <li data-target="#myCarousel" data-slide-to="2"></li> 
                <li data-target="#myCarousel" data-slide-to="3"></li> 
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
              </ol> 
 
          <!-- slides --> 
            <div class="carousel-inner" role="listbox"> 
 
              <div class="item active"> 
                <a href="#"><img src="img/fdl.png"  width="460" height="345"></a>
                <div class="carousel-caption"> 
                  <p>Projet prefessionel/Fedala Décoration & Traiteur</p> 
                </div> 
              </div> 
 
              <div class="item"> 
                <a href="pastime"><img src="img/pastime.png"  width="460" height="345"> </a>
                <div class="carousel-caption"> 
                  <p>Challenge Pastime /html et css</p> 
                </div> 
              </div> 
     
              <div class="item"> 
                <a href="MMXIV"><img src="img/challenge5.png"  width="460" height="345"></a> 
                <div class="carousel-caption"> 
                  <p>Challenge Progeny MMXIV /bottstrap</p> 
                </div> 
              </div> 
 
              <div class="item"> 
                <a href="#"><img src="img/mac.png"  width="460" height="345"></a> 
                <div class="carousel-caption"> 
                  <p> TEAM{AC-GYVER INC;}</p> 
                </div> 
              </div> 

              <div class="item"> 
                <a href="#"><img src="img/origami.png"  width="460" height="345"></a> 
                <div class="carousel-caption"> 
                  <p> ORIGAMI</p> 
                </div> 
              </div>   

              <div class="item"> 
                <a href="createpro"><img src="img/challenge1.png"  width="460" height="345"> </a>
                <div class="carousel-caption"> 
                  <p>CREATE PRO</p> 
                </div> 
              </div> 

            </div> 
 
    <!-- Left and right controls --> 
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> 
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> 
              <span class="sr-only">Précedent</span> 
            </a> 
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> 
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> 
              <span class="sr-only">Suivant</span> 
            </a> 
          </div><br/> 

  <!--technos   --> 
          <div id="technos" class="row" > 
            <marquee direction="right" behavoir="alternate">
              <h4><a href="technos.php">Langages Techniques</a></h4> 
            </marquee>
            <div class="hr"><hr/></div>

            <!--1èr group img-->
              <div class="col-md-6 col-sm-12 col-xs-12">

                <div class="col-md-4 col-sm-12 col-xs-12">
                  <a href="http://www.w3schools.com/html/">
                    <img src="img/html5.png" class="imgtechnos">
                  </a> 
                </div>

                <div class="col-md-4 col-sm-12 col-xs-12">
                  <a href="http://www.w3schools.com/css/default.asp">
                    <img src="img/css3.png" class="imgtechnos">
                  </a>
                </div>

                <div class="col-md-4 col-sm-12 col-xs-12">
                  <a href="http://www.w3schools.com/js/default.asp">
                    <img src="img/javascript_logo.png" class="imgtechnos">
                  </a>
                </div>

              </div> 

                <!--2èm group img-->
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="col-md-4 col-sm-12 col-xs-12">
                  <a href="https://secure.php.net/manual/fr/index.php">
                    <img src="img/php.png" class="imgtechnos">
                  </a>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                  <a href="http://www.w3schools.com/sql/default.asp">
                  <img src="img/mysql.png" class="imgtechnos">
                </a>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                  <a href="https://fr.wordpress.org/">
                    <img src="img/WordPress_logo4.jpg" class="imgtechnos">
                  </a>
                </div>                
              </div> 
            </div> 

  <!--    contact  -->

        <div id="contact" class="row">
          <marquee direction="left" behavoir="alternate">
            <h4><a href="cv.php">Contacter moi:</a> </h4>
          </marquee> 
          <div class="hr"><hr/></div>

            <div id="mail"class="col-md-6 col-sm-12 col-xs-12"> 
               <i class="fa fa-envelope"></i> 
               <p><a href="#">rasho80@hotmail.com</a></p> 
               <p><a href="#">ab_rasho@yahoo.fr</a></p> 
            </div> 
 
            <div id="phone" class="col-md-6 col-sm-12 col-xs-12"> 
              <i class="fa fa-phone"></i> 
               <p><a href="#">06.52.82.18.72</a></p>  
            </div>

        </div>


          <!--  footer  -->
        <?php include("footer.php")
         ?>
</div>
<script type="text/javascript" src="js/jquery-2.2.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
