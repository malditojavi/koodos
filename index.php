<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/custom.css" rel="stylesheet" media="screen">
  </head>
  <body>
    
    <!-- Main container  -->
    <div class="container">
      <h1 class="text-center">Koodos</h1>
      <h2><div class="text-center"> Blabla bla bl abl alba alb abla blab alb </div></h2>
        
      <!-- First row  -->
        <div class="row">
          <div class ="span2 offset1">
            <img src="http://img707.imageshack.us/img707/3594/descarga1.png" class="img-circle">
          </div>
          <div class="span3"><p>Contenido balbal blab alb alba bla bal bal b alb alba bla bal bal b alb alba bla bal bal b alb alba bla bal balb a b alb alba bla bal bal b alb alba bla bal bal b alb alba bla bal bal </p>
          <a class="btn" id="activator" href="#">Koodos to someone<i class="icon-thumbs-up"></i></a>
          </div>
          <div class="span3"><p>Contenido balbal blab alb alba bla bal bal b alb alba bla bal bal b alb alba bla bal bal b alb alba bla bal balb a b alb alba bla bal bal b alb alba bla bal bal b alb alba bla bal bal</p>
          <a class="btn" href="#">Koods to a team<i class="icon-thumbs-up"></i></a> 
          </div>
          <div class ="span2">
            <img src="http://img707.imageshack.us/img707/3594/descarga1.png" class="img-circle">
          </div>
        </div>

    <!-- Second row  -->
      <div class="row">
      <div class ="span2 offset1">
        <img src="http://img707.imageshack.us/img707/3594/descarga1.png" class="img-circle">
      </div>
      <div class="span3"><p>Contenido balbal blab alb alba bla bal bal b alb alba bla bal bal b alb alba bla bal bal b alb alba bla bal balb a b alb alba bla bal bal b alb alba bla bal bal b alb alba bla bal bal </p>
        <a class="btn" href="#">Kooals<i class="icon-thumbs-up"></i></a>
      </div>
      <div class="span3"><p>Contenido balbal blab alb alba bla bal bal b alb alba bla bal bal b alb alba bla bal bal b alb alba bla bal balb a b alb alba bla bal bal b alb alba bla bal bal b alb alba bla bal bal</p>
      <a class="btn" href="#">Send Koods to<i class="icon-thumbs-up"></i></a> 
      </div>
      <div class ="span2">
        <img src="http://img707.imageshack.us/img707/3594/descarga1.png" class="img-circle">
      </div>
    </div>

<br>

<!-- Overlay and popup for first block -->

<div class="overlay" id="overlay" style="display:none;"></div>
<div class="box" id="box">
<a class="boxclose" id="boxclose"></a>
<h1>Koodos to someone</h1>
<p>
Bla bla balb lab labla bla blalb lab lab


<form id="formulario1" method="post" action="/koodos/index.php">
<p>Koodos to <input type="text" name="name" placeholder="someone"> for <input type="text" name="address" placeholder="what"></p>
<input type="submit" name="submit" value="Sent" id="button">
<p>Koodos sent ok?

<?php
include_once('./input.php');

?> </p>

</form>
    <div class="latesttitle">View latest Koodos </div>
    
    <div class="boxcontent"> 
        <table class="list">
          <?php 
          include_once('./getdata.php');
          echo $result;

          ?>

        </table>
     </div>
</p>
</div>

<!-- End//Overlay and popup for first section -->

    <div class="container">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/koodos.js"></script>

<!-- Script for overlay and box -->
<script>
    $(function() {
    $('#activator').click(function(){
        $('#overlay').fadeIn('fast',function(){
            $('#box').animate({'top':'160px'},500);
        });
    });
    $('#boxclose').click(function(){
        $('#box').animate({'top':'-400px'},500,function(){
            $('#overlay').fadeOut('fast');
        });
    });
 
});
</script>

  </body>
</html>