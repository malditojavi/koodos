<?php
require_once('./input.php');
?> 

<!DOCTYPE html>
<html>
  <head>
    <title>Koodos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/custom.css" rel="stylesheet" media="screen">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    <!-- Prueba Typer -->

  </head>
  <body>
    
    <!-- Main container  -->
    <div class="container">
      <h1 class="text-center">Koodos</h1>
     
      <!-- Typer h2  -->
      <div class="text-center">
      <h4 id="description"> Koodos
        <span id="recipients" data-typer-targets="to username, to username, to username, to username">to username</span>
      cause
        <span id="reasons" data-typer-targets="'I love WooRank and it helps me everyday', 'I love WooRank and it helps me everyday', 'I love WooRank and it helps me everyday', 'I love WooRank and it helps me everyday',">I love WooRank and it helps me everyday</span></h4>
      </div>
      <!-- End Typer h2  -->  

      <!-- First row  -->
        <div class="row">
          <div class ="span2 offset1">
            <img src="http://img707.imageshack.us/img707/3594/descarga1.png" class="img-circle">
          </div>
          <div class="span3"><h3>Happy users!</h3><p>There are some Woosers out there who use our tool in their work flows. Some of them even love our tool! Yay!</p>
          <a class="btn" id="activator" href="#happy_users" role="button" data-toggle="modal">Add feedback from Users</a>
          </div>
          <div class="span3"><h3>Great workmates!</h3><p>'Greg, thanks for your surname'. 'PizzaFace thanks for being you'. It's always good to be thankful.</p>
          <a class="btn" id="activator" href="#koodos_someone" role="button" data-toggle="modal">Give Koodos to someone<i class="icon-thumbs-up"></i></a> 
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
      <div class="span3"><h3>Well done, team!</h3><p>An improvement in the Middle Layer that makes our tool 150% faster? A multiuser plan bought after several emails? </p>
        <a class="btn" id="activator" href="#koodos_team" role="button" data-toggle="modal">Give Koodos to a team<i class="icon-thumbs-up"></i></a>
      </div>
      <div class="span3"><h3>Kooals achieved!</h3><p>150 new paying users in a day? 500.000 visits to our blog? That must be logged for the eternity. Do it here.</p>
    
        <div class="btn-group">
         <button class="btn">Add an achieved Koal</button>
         <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownmenu">
          <li><a href="#koals_visits" data-toggle="modal"> <i class="icon-rocket"></i> Add a <b>Visits</b> record </a> </li>
          <li><a href="#koals_trials" data-toggle="modal"> <i class="icon-trophy"></i> Add a <b>Users in trial</b> record </a> </li>
          <li><a href="#koals_paidusers" data-toggle="modal"> <i class="icon-money"></i> Add a <b>Users with a Plan</b> record </a> </li>
          <li><a href="#koals_hard" data-toggle="modal"> <i class="icon-wrench"></i> Add a <b>hard & weird</b> issues solved record </a> </li>
          </ul>
        </div>
      </div>
      <div class ="span2">
        <img src="http://img707.imageshack.us/img707/3594/descarga1.png" class="img-circle">
      </div>
      </div>

    <!-- Link for General Dashboard in home  -->
    <div class="row">
      <div class="span12">
        <h3><a id="testclick" href="#">General Koodos Dashboard Middle</a></h3>
        <div id="testajax"></div>  
      </div>
    </div>

    <p class="pos">Handcrafted with patience during the WooRank Wicked Fridays</p>
    <img class="pos" src="img/logowoo.png"></img>

          
    <!-- Cierra el Main container -->
    </div> 


<!-- Here start, Add Modals -->

    <!-- happy_users Modal -->
    <div id="happy_users" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 id="myModalLabel">Happy users!</h3>
      </div>
      <div class="modal-body">
      <p> Add feedback from our uers</p>  
        <form id="formulario1" method="post" action="/koodos/index.php">
          <p>This user, <input type="text" name="user_name" placeholder="someone"> FOR <input type="text" name="user_feedback" placeholder="include here the user's feedback"></p>
          <input type="submit" name="submit" value="Save changes" id="button">
          <p>
          Call PHP data here
          </p>
        </form>
      <div class="modal-footer">
      <input type="submit" class="btn btn-primary" value="Save changes" id="button"></button>
      </div>
      </div>
    </div>

    <!-- koodos_team Modal -->
    <div id="koodos_team" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 id="myModalLabel">Well done, team!</h3>
      </div>
      <div class="modal-body">
      <p> Add text here </p>  
        <form id="formulario1" method="post" action="/koodos/index.php">
          <p>Add a NAME MODAL<input type="text" name="team_name" placeholder="someone"> for <input type="text" name="team_reason" placeholder="what"></p>
          <input type="submit" name="submit" value="Save changes" id="button">
          <p>
          Call PHP data here
          </p>
        </form>
      <div class="modal-footer">
      <input type="submit" class="btn btn-primary" value="Save changes" id="button"></button>
      </div>
      </div>
    </div>

    <!-- koodos_someone Modal -->
    <div id="koodos_someone" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 id="myModalLabel">Great workmates!</h3>
      </div>
      <div class="modal-body">
      <p> Add text here </p>  
        <form id="formulario1" method="post" action="/koodos/index.php">
          <p>Add a NAME MODAL<input type="text" name="someone_name" placeholder="someone"> for <input type="text" name="someone_reason" placeholder="what"></p>
          <input type="submit" name="submit" value="Save changes" id="button">
          <p>
          Call PHP data here
          </p>
        </form>
      <div class="modal-footer">
      <input type="submit" class="btn btn-primary" value="Save changes" id="button"></button>
      </div>
      </div>
    </div>

    <!-- koals Modal -->
      <!-- koals_visits modal -->
        <div id="koals_visits" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 id="myModalLabel">Koals: Visits record</h3>
          </div>
          <div class="modal-body">
          <p> Record? </p>  
            <form id="formvisits" method="post" action="/koodos/index.php">
              <p>Record?<input type="text" name="koals_visits" placeholder="number of visits"> </p>
              <input type="submit" name="submit" value="Save changes" id="button">
              <p>
              Call PHP data here
              </p>
            </form>
          <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Save changes" id="button"></button>
          </div>
          </div>
        </div>

      <!-- koals_trials modal -->
        <div id="koals_trials" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 id="myModalLabel">Koals: Users in Trials</h3>
          </div>
          <div class="modal-body">
          <p> Record? </p>  
            <form id="formulario1" method="post" action="/koodos/index.php">
              <p>Record in Users in Trial?<input type="text" name="koals_trials" placeholder="someone"> for <input type="text" name="user_feedback" placeholder="what"></p>
              <input type="submit" name="submit" value="Save changes" id="button">
              <p>
              Call PHP data here
              </p>
            </form>
          <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Save changes" id="button"></button>
          </div>
          </div>
        </div>

      <!-- koals_hard modal -->
        <div id="koals_hard" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 id="myModalLabel">Koals: Hard issues</h3>
          </div>
          <div class="modal-body">
          <p> Add text here </p>  
            <form id="formulario1" method="post" action="/koodos/index.php">
              <p>Record in Hard Issues?<input type="text" name="koals_hard" placeholder="someone"> for <input type="text" name="user_feedback" placeholder="what"></p>
              <input type="submit" name="submit" value="Save changes" id="button">
              <p>
              Call PHP data here
              </p>
            </form>
          <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Save changes" id="button"></button>
          </div>
          </div>
        </div>

        <!-- koals_paidusers modal -->
        <div id="koals_users" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 id="myModalLabel">Koals: Paid Users</h3>
          </div>
          <div class="modal-body">
          <p> Add text here </p>  
            <form id="formulario1" method="post" action="/koodos/index.php">
              <p>Record in Paid Users?<input type="text" name="koals_paidusers" placeholder="someone"></p>
              <input type="submit" name="submit" value="Save changes" id="button">
              <p>
              Call PHP data here
              </p>
            </form>
          <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Save changes" id="button"></button>
          </div>
          </div>
        </div>


<!-- Till here, Add Modals -->




    <!-- Hasta aquí la prueba del modal -->
    <div class="container">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/koodos.js"></script>
      <!--<link rel="stylesheet" href="http://minimalytics.com/styles/styles.css">-->
    <script src="http://minimalytics.com/scripts/jquery.typer.js"></script>
    <!-- Fin Prueba Typer  -->

    <!-- Javascript -->
      <script>
      $(function () {
        $description = $('h4#description');

        $.typer.options.highlightSpeed = 30;
        $.typer.options.typerInterval = 6500;

    

        setTimeout(function(){
          $('span#recipients', $description).typer();
        }, 7000);

        setTimeout(function(){
          $('span#reasons', $description).typer();
        }, 11000);

        $('h2#description').addClass('animated fadeInDown');
      });
      </script>

      <!-- Javascript -->

  </body>
</html>