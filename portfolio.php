<?php
    if(isset($_GET['f'])){
        $food=$_GET['f'];
    }
    else{
        $food="taco";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Parker Kelly Portfolio</title>
    <!--<meta name="description" content="">-->
    <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=0">
    <link href="https://fonts.googleapis.com/css?family=Bungee|Open+Sans&effect=anaglyph|3d" rel="stylesheet">
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/js/materialize.min.js"></script>
<script src="/js/TweenMax.min.js"></script>
<script>
    $(document).ready(function(){
    $('.scrollspy').scrollSpy({scrollOffset:24});
  });
    </script>
</head>
<body>

<div class="portWrap">
    <div class="portLogo">
        <?php echo "<img id=\"angelBoy\" src=\"img/parkerArt/".$food.".png\">"?>
        <div class="portTextWrap">
        <?php echo "<div class=\"thanks font-effect-3d\">HOW I LOVE THIS ".strtoupper($food)."!</div>"?>
        <div class="thanksPartTwo">Here's my exclusive portfolio</div>
        </div>
    </div>

    <div class="actualPortfolio">

    <div id="portNaver" class="portNav">
        <div class="actualNav">
        <ul id="theNav" class="section table-of-contents">
            <li><a href="#print">Print Ads</a></li>
            <li><a href="#threesixty">360 Campaign</a></li>
            <li><a href="#produced">Produced Media</a></li>
            <!-- new stuff -->
            <li><a href="#digital">Digital</a></li>
            <li><a href="#dontfoolme">Don't Fool Me</a></li>
            <li><a href="#personalproject">Personal Project</a></li>
            <li><a href="#awardshows">Award Shows</a></li>
            <li><a href="#adlabproject">Adlab Project</a></li>
            <li><a href="portfolio17.php"><b>2017 Portfolio</b></a></li>
        </ul>
    </div>
    </div>

<div id="print" class="section scrollspy">
    <h1>Print Ads</h1>
    <h2>Nalgene</h2>
    <img style="border:0;box-shadow:none;" src="projects/nalgene/Nalgene Print1.jpg">
    <img style="border:0;box-shadow:none;" src="projects/nalgene/Nalgene Print2.jpg">
    <img style="border:0;box-shadow:none;" src="projects/nalgene/Nalgene Print3.jpg">
</div>

<div id="threesixty" class="section scrollspy">
<h1>360 Campaign</h1>
<h2>Crocs</h2>
<h3>Video & Radio</h3>
<div class="video-container">
<iframe width="560" height="315" src="https://www.youtube.com/embed/zVpPgLencYM" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
</div>
<h3>Print</h3>
<img style="border:0;box-shadow:none;" src="projects/croc/boots and bag 2.jpg">
<img style="border:0;box-shadow:none;" src="projects/croc/Pinched toes male-2.jpg">
<img style="border:0;box-shadow:none;" src="projects/croc/WomansRope-1.jpg">
<img style="border:0;box-shadow:none;" src="projects/croc/Bus Stop.jpg">
<img style="border:0;box-shadow:none;" src="projects/croc/CrocsBillboard.jpg">
<h3>Ambient</h3>
<img style="border:0;box-shadow:none;" src="projects/croc/Ambient croc shoe box.jpg">
<p>By putting metal clamps and rusty contraptions in boxes at shoe stores, we make commentary on how mainstream footwear (especially high heels and business shoes) are uncomfortable and restrictive, yet they are worn anyway. Through exaggeration, we claim that accepting uncomfortable footwear as a part of life is as ridiculous as willingly wearing bear traps on your feet. In this way, Crocs invites you to empathize and see life from your feet’s perspective, or in other words, “put yourself in your own shoes.”
</p>
</div>

<div id="produced" class="section scrollspy">
<h1>Produced Media</h1>
<h2>Emotional Malt O Meal</h2>
<div class="video-container">
<iframe width="560" height="315" src="https://www.youtube.com/embed/u30fg4XSScw" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
</div>
</div>

<div id="digital" class="section scrollspy">
<h1>Digitial</h1>
<h2>Tim Tam</h2>
<div class="video-container">
<iframe width="560" height="315" src="https://www.youtube.com/embed/x8szqiyoank" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
    </div>
</div>

<div id="dontfoolme" class="section scrollspy">
<h1>Don't Fool Me</h1>
<h2>Plackers</h2>
<img style="border:0;box-shadow:none;" src="projects/plackers/Plackers Print-01 2.jpg">
<img style="border:0;box-shadow:none;" src="projects/plackers/Plackers Print-02 2.jpg">
<img style="border:0;box-shadow:none;" src="projects/plackers/Plackers Print-03 2.jpg">
</div>

<div id="personalproject" class="section scrollspy">
<h1>Personal Project</h1>
<h2>Drivin' With Ivan</h2>
<div class="video-container">
<iframe width="560" height="315" src="https://www.youtube.com/embed/quSm6zAycbw" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
</div>
</div>

<div id="awardshows" class="section scrollspy">
    <h1>Award Shows</h1>
    <h2>Burger King Zeus</h2>
    <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/n8WlTOE_W3w" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
    </div>
</div>

<div id="adlabproject" class="section scrollspy">
    <h1>Adlab Project</h1>
    <div class="twoPicWrap">
            <img id="twopartone" src="projects/downeast.png">
            <img id="twoparttwo" src="projects/oceanspray.png">
    </div>
    <p class="center">I helped work on these projects</p>
</div>
</div>
</div>
<div id="credits">
<div class="credBox">
<b>Nalgene:</b>
<i>AD:</i> Chad Corbin
</div>
<div class="credBox">
<b>Crocs:</b>
<i>AD:</i> David Gordet</br>
<i>CC:</i> Michael Hanks
</div>
<div class="credBox">
        <b>Malt O Meal:</b>
        <i>CC/AD:</i> Peter Molnar
</div>
<div class="credBox">
        <b>Tim Tam:</b>
        <i>CC:</i> KC Sosa
        </div>
        <div class="credBox">
        <b>Burger King:</b>
        <i>AD:</i> Chad Corbin</br>
        <i>CC:</i> KC Sosa
        </div>
        <div class="credBox">
        <b>Website Design:</b>
        Colin Buffum
        </div>
</div>

<div class="footer">
    <?php include'includes/nav.php' ?>
</div>

<script>
    var tabletWidth = 900;
    var menuWidth = 200;
    var padding = 64;

    $(document).ready(function () {
      theBus();
});

    $(window).on('resize', function(){
      theBus();
    });

    function theBus(){
        var w = $("html").width();
        $('.actualPortfolio').width(tabletWidth-padding);
        $('.actualNav').css('left', tabletWidth);

        
        if($('.actualNav').is(':visible')){
            var blankspace = w - tabletWidth;
            var rightSide = blankspace/2;
            
            if(rightSide<menuWidth){
                var twoPercent = w * .01;
                var difference = menuWidth - rightSide + twoPercent;
                $('.actualPortfolio').width(tabletWidth-padding-difference);
                $('.actualNav').css('left', tabletWidth-difference);
            }
        }
        else{
        $('.actualPortfolio').width("calc(100% - 4em)");
        $('.actualNav').css('left', 0);
        console.log("ok");
        }
    }

    window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("portNaver");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}


TweenMax.to("#angelBoy", 1, {ease: Power3.easeOut, top: 0});

var inputBar = document.getElementById("checkPass");

function password(){
    if(inputBar.value == "bestconceptever"){
        document.getElementById("secretVidContain").innerHTML = "<iframe src='https://www.youtube.com/embed/nSIq2CpfOtA' frameborder='0' gesture='media' allow='encrypted-media' allowfullscreen></iframe> Video Loading...";
    }
}
//"<iframe src='https://www.youtube.com/embed/nSIq2CpfOtA' frameborder='0' gesture='media' allow='encrypted-media' allowfullscreen></iframe>";
</script>
</body>
</html>