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
    <link rel="stylesheet" href="css/style3.css">
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
        <?php echo "<div class=\"thanks font-effect-3d\">THANKS FOR THIS ".strtoupper($food)."!</div>"?>
        <div class="thanksPartTwo">Here's my exclusive portfolio</div>
        </div>
    </div>

    <div class="actualPortfolio">

    <?php include("includes/sideNav.php");?>


<div id="about" class="section scrollspy">
    <h1>About Me</h1>

<p>
Don’t hire me, it’s really not worth it.<br/>I get distracted easily. I can’t focus. If I’m in a group brainstorm session for more than twelve seconds I completely zone out. I start a new projects when I should be fixing old ones. I’ll write two ideas for taglines and start watching Gordon Ramsay highlights. I only go to meetings if they have snacks, and I leave early when the boss isn’t around. Plus I’m a straight, white male, so I can’t even help with your diversity requirements. There isn’t a twist to this. I’m just an over-preoccupied beatnik who loves to goof off.
</p>
</div>

<div id="johnsonville" class="section scrollspy">
<h1>Johnsonville Brats 15s Ad Comp</h1>
<div class="video-container">
<iframe width="560" height="315" src="https://www.youtube.com/embed/DbS4myJuk6Y" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
</div>
<p>The inspiration for these ads came from a sketch I wrote called “Bratman,” which I eventually sold to Studio C for $150. I definitely should have asked for more, cause it’s the last good idea I’ll ever have.</p>
</div>

<div id="personalproject" class="section scrollspy">
<h1>Drivin' With Ivan</h1>
<div class="video-container">
<iframe width="560" height="315" src="https://www.youtube.com/embed/quSm6zAycbw" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
</div>
<p>People keep wanting me to make more of these, but I totalled that car a few months after filming.</p>
</div>

<div id="awardshows" class="section scrollspy">
    <h1>Burger King Zeus</h1>
    <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/n8WlTOE_W3w" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
    </div>
    <p>My buddy <a href="http://www.cheddarcorbin.com">Chad Corbin</a> helped conceptualize this and picked out the epic music. 
    My other very talented friend <a href="http://www.sincerelythesosas.com">KC Sosa</a> filmed and edited and added all those hilarious effects. 
    They’re both solid dudes, you should hire them.</p>
</div>

<div id="twix" class="section scrollspy">
    <h1>Twix Ads</h1>
    <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/YlF_TfsyZi0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
    </div>
    <p>I won’t make you watch all of this. The best and arguably only good part starts a few seconds after the one minute mark, as I break it in half.</p>
</div>

<div id="oneoff" class="section scrollspy">
<h1>Video Editing Contest</h1>
<div class="video-container">
<iframe width="560" height="315" src="https://www.youtube.com/embed/LnPJv1zSLlQ" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
    </div><p>I didn’t win anything. A friend who works at AKQA wasn’t impressed either, but it’s staying in the portfolio cause I like it.</p>
</div>

<div id="threethirty" class="section scrollspy">
    <h1>Malt O Meal</h1>
    <div class="video-container">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/MOrV1wqSfr4" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
    </div>
    <p>
    I’d like to give a shout out to my good friend <a href="http://gang-fight.com/colinbuffum/">Colin Buffum</a> who designed this website for me in exchange for Xenoblade. 
    He also came up with the hilarious idea of putting food on my face to unlock the site, 
    and he’s a very talented illustratuer. You should hire him!
    </p>
</div>

<div id="goblin" class="section scrollspy">
    <h1>Goblin Valley Ad (Coming Soon)</h1>
    <p class="center">Coming Soon!!</p>
    <img src="img/diddy.gif" style="border:0px; box-shadow:none;"alt="Diddy Boy"/>
    <p>The funnest part of this was that I got to walk around in this space suit. Props to Daniel Tu for directing, AD Alexa Spiroff, DP Trevor Free, Luis Puente for makin’ the space suit, and Trent Rollins Wimber for driving 7 hours and not completely veering off the road.
</p>
</div>

</div>
</div>

<!--
<div id="credits">
        <div class="credBox">
        <b>Burger King:</b>
        <i>AD:</i> Chad Corbin</br>
        <i>CC:</i> KC Sosa
        </div>
        <div class="credBox">
        <b>Website Dev/Des:</b>
        Colin Buffum
        </div>
</div>
-->

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