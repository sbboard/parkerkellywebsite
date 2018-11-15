<?php
$rando = rand(1,5);
switch ($rando) {
  case 1:
      $food="burger";
      break;
  case 2:
      $food="pizza";
      break;
  case 3:
      $food="taco";
      break;
  case 4:
      $food="roast chicken";
      break;
  case 5:
      $food="meatball";
      break;
  default:
      $food="burger";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Parker Kelly Website</title>
    <!--<meta name="description" content="">-->
    <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style3.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=0">
    <link href="https://fonts.googleapis.com/css?family=Bungee|Open+Sans&effect=anaglyph|3d" rel="stylesheet">
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/jquery.ui.touch-punch.min.js"></script>
    <script src="/js/TweenMax.min.js"></script>
<script>
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
            window.location.href = 'portfolio.php?f=<?php echo $food?>';
        }, 2000);
        }
      }
    });
  } );
  </script>
</head>
<body>
<div class="siteWrap">
    <div class="indexText font-effect-3d">PARKER KELLY<br/>WEBSITE DOT COM</div>
    <div class="playstuff">
        <div class="parker" id="droppable" >
            <img id="parkersFace" src="img/homeImage.png">
        </div>
        <div class="food">
          <i id="arrow" class="fa fa-arrow-down fa-5x" aria-hidden="true"></i>
            <?php echo"<img id=\"draggable\"  src=\"img/food/".$food.".png\">"; ?>
        </div>
    </div>
    <?php echo "<div class=\"instruct font-effect-3d\">DRAG ME ".strtoupper($food)." IF YOU WANT<br/>TO SEE MY PORTFOLIO</div>";?>
</div>

<?php include'includes/nav.php' ?>
<script>
TweenMax.from("#droppable", 1, {ease: Bounce.easeOut, rotation:-90});
TweenMax.from("#draggable", 1, {ease: Power1.easeOut, opacity: 0, rotation:10, left: 200, delay: 1});
TweenMax.from(".instruct", 2, {ease: Power1.easeOut, opacity: 0, delay: 1});
TweenMax.staggerFrom(".stag", 1, {y:-50, opacity:0, delay: 1}, .1);
TweenMax.from("#arrow", .5, {ease: Power1.easeOut, opacity: 0, delay: 2});
  </script>
</body>
</html>