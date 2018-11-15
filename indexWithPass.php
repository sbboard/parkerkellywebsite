<!DOCTYPE html>
<html>
<head>
    <title>Parker Kelly Website</title>
    <!--<meta name="description" content="">-->
    <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css?=v=4">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=0">
    <link href="https://fonts.googleapis.com/css?family=Bungee|Open+Sans&effect=anaglyph|3d" rel="stylesheet">
    <style>
    .indexText{
      pointer-events: none;
    }
    .passMode{
      margin-top: 2.5em;
      text-align: center;
      font-size: 2em;
      margin-bottom: 1em;
    }
    .passMode input{
      margin: 0 auto .5em auto;
      font-size: 1.5em;
      display: block;
      text-align: center;
      border-radius: 15px;
    }
    .newIndex{
      font-size: 1em;
      font-family: "Bungee", cursive;
    }
    </style>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/jquery.ui.touch-punch.min.js"></script>
    <script src="/js/TweenMax.min.js"></script>
<script>
  </script>
</head>
<body>
<div class="siteWrap">
    <div class="indexText font-effect-3d">PARKER KELLY<br/>WEBSITE DOT COM</div>
    <div id="theRoom" class="passMode">
    </div>
</div>

<?php include'includes/nav.php' ?>
<div id="preload-01"></div>
<div id="preload-02"></div>
<div id="preload-03"></div>
<div id="preload-04"></div>
<div id="preload-05"></div>
<script>
var inputBar = document.getElementById("checkPass");


TweenMax.staggerFrom(".stag", 1, {y:-50, opacity:0, delay: 0}, .1);

function password(){
  if(inputBar.value == "swordfish"){
    activate();
    }
}

function activate(){

var theSite = "<div class='playstuff'><div class='parker' id='droppable' ><img id='parkersFace' src='img/homeImage.png'></div><div class='food'><i id='arrow' class='fa fa-arrow-down fa-5x' aria-hidden='true'></i><img id='draggable'  src='img/cheeseburger.png'></div></div><div class='instruct font-effect-3d'>DRAG ME THAT JUICY BURGER<br/>TO SEE MY PORTFOLIO</div>";


$( function() {
    var onParker = 0;
    $( "#draggable" ).draggable({ revert: "invalid" });
    $( "#droppable" ).droppable({
      accept: "#draggable",
      tolerance: "touch",
      classes: {
        "ui-droppable-active": "ui-state-default" ,
        "ui-droppable-hover": "ui-state-hover"
      },
      over: function( event, ui ) {
        $("#parkersFace").attr("src","img/homeWant.gif");
        onParker = 1;
      },
      out: function( event, ui ) {
        $("#parkersFace").attr("src","img/homeSweat.gif");
        onParker = 0;
      },
      activate: function( event, ui ) {
        $("#parkersFace").attr("src","img/homeSweat.gif");
        $( "#arrow" ).addClass("hiddenArrow");
        TweenMax.to("#draggable", 5, {ease: Elastic.easeOut.config(1, 0.3), rotation:-20});
      },
      dropout: function( event, ui ) {
        $("#parkersFace").attr("src","img/homeImage.png");
      },
      deactivate: function( event, ui ) {
        if(onParker == 0){
        $("#parkersFace").attr("src","img/homeImage.png");
        $( "#arrow" ).removeClass("hiddenArrow");
        TweenMax.to("#draggable", 1.5, {ease: Elastic.easeOut.config(1, 0.3), rotation:0});
        }
        else{
        $( "#draggable" ).fadeTo( "medium", 0 );
        $("#parkersFace").attr("src","img/homeLove.gif");
        window.setTimeout(function() {
            window.location.href = 'portfolio.php';
        }, 2000);
        }
      }
    });
  } );

$( "#theRoom" ).html(theSite);
$( "#theRoom" ).removeClass("passMode");

TweenMax.from("#droppable", 1, {ease: Bounce.easeOut, rotation:-90});
TweenMax.from("#draggable", 1, {ease: Power1.easeOut, opacity: 0, rotation:10, left: 200, delay: 1});
TweenMax.from(".instruct", 2, {ease: Power1.easeOut, opacity: 0, delay: 1});
TweenMax.from("#arrow", .5, {ease: Power1.easeOut, opacity: 0, delay: 2});
}

  </script>
</body>
</html>