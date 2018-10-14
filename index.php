<?php
    include "function.php";
    ?>
<!DOCTYPE html>
<html>
<title>Newspaper web</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="myCSS.css">
<body id="myPage">

<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
<a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
<i class="fa fa-remove"></i>
</a>
<a href="#" class="w3-bar-item w3-button">Link 1</a>
<a href="#" class="w3-bar-item w3-button">Link 2</a>
<a href="#" class="w3-bar-item w3-button">Link 3</a>
<a href="#" class="w3-bar-item w3-button">Link 4</a>
<a href="#" class="w3-bar-item w3-button">Link 5</a>
</nav>

<!-- Navbar -->
<div class="w3-top">
<div class="w3-bar w3-theme-d2 w3-left-align">
<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
<a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
<a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Team</a>
<a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Work</a>
<a href="#article" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Article</a>
<a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
<div class="w3-dropdown-hover w3-hide-small">

</div>
<a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
<a href="#team" class="w3-bar-item w3-button">Team</a>
<a href="#work" class="w3-bar-item w3-button">Work</a>
<a href="#article" class="w3-bar-item w3-button">Article</a>
<a href="#contact" class="w3-bar-item w3-button">Contact</a>
<a href="#" class="w3-bar-item w3-button">Search</a>
</div>
</div>

<!-- Image Header -->
<div id="imageHeader" class="w3-display-container w3-animate-opacity">
<img src="./Images/Home.jpg" alt="homePic" style="width:100%;min-height:350px;max-height:600px;">
<div class="w3-container w3-display-bottomleft w3-margin-bottom">

</div>
</div>

<!-- Modal -->
<div id="id01" class="w3-modal">
<div class="w3-modal-content w3-card-4 w3-animate-top">
<header class="w3-container w3-teal w3-display-container">
<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
<h4>Oh snap! We just showed you a modal..</h4>
<h5>Because we can <i class="fa fa-smile-o"></i></h5>
</header>
<div class="w3-container">
<p>Cool huh? Ok, enough teasing around..</p>
<p>Go to our <a class="w3-text-teal" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
</div>
<footer class="w3-container w3-teal">
<p>Modal footer</p>
</footer>
</div>
</div>

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>OUR TEAM</h2>

<div class="w3-row"><br>

<div class="w3-quarter">
<img src="./Images/Bin.jpg" alt="Bin" style="width:70%" class="w3-rectangle w3-hover-opacity">
<h3>Youngbin Ha</h3>
<p>Senior/CS</p>
<p>yh9kb@mail.missouri.edu</p>
</div>

<div class="w3-quarter">
<img src="./Images/Yan.jpg" alt="Yan" style="width:70%" class="w3-rectangle w3-hover-opacity">
<h3>Yan Yang</h3>
<p>Senior/IT</p>
<p>yyq34@mail.missouri.edu</p>
</div>

<div class="w3-quarter">
<img src="./Images/Eric.jpg" alt="Eric" style="width:70%" class="w3-rectangle w3-hover-opacity">
<h3>Eric Lin</h3>
<p>Sophomore/CS</p>
<p>kl2cb@mail.missouri.edu</p>
</div>

<div class="w3-quarter">
<img src="./Images/Tim.jpg" alt="Tim" style="width:70%" class="w3-rectangle w3-hover-opacity">
<h3>Tim Kwon</h3>
<p>Junior/CS</p>
<p>jk4g2@mail.missouri.edu</p>
</div>
</div>
</div>

<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter" id=workDescription>
<h2>Project Description</h2>
<p> "We made a website that shows several major articles and what hot issues today are. Using News API, user can see the worldwide news in one place; also, they can email to factchecker website which answeres them by checking if the new is true or not. We connected the api by using php and made it as a function."</p>
</div>

</div>

<!-- Container -->
<div class="w3-container" style="position:relative">
<a onclick="w3_open()" class="w3-button w3-xlarge w3-circle w3-teal"
style="position:absolute;top:-28px;right:24px">+</a>
</div>

<!-- Article Row -->
<div class="w3-row-padding w3-center w3-padding-64" id="article">
<h2>ARTICLES</h2>
<p>Choose an article to enjoy!</p><br>
<?php echo sources() ?>
<!-- <div class="w3-third w3-margin-bottom articles">
<div class="contentOfArticles">
<ul>

<li>sources:</li>
<li><a >title</a></li>
<li><h2>subtitle</h2></li>
<li><h4>author</h4></li>
<li><p>contents(bref)</p></li>
</ul>

</div>
<div class="imageOfArticles">
<img src="Images/Home.jpg" alt="test" style="height: 200px" >
</div>
</div> -->
<!--

<div class="w3-third w3-margin-bottom">
<ul class="w3-ul w3-border w3-hover-shadow">
<li class="w3-theme-l2">
<p class="w3-xlarge">Pro</p>
</li>
<li class="w3-padding-16"><b>25GB</b> Storage</li>
<li class="w3-padding-16"><b>25</b> Emails</li>
<li class="w3-padding-16"><b>25</b> Domains</li>
<li class="w3-padding-16"><b>Endless</b> Support</li>
<li class="w3-padding-16">
<h2 class="w3-wide"><i class="fa fa-usd"></i> 25</h2>
<span class="w3-opacity">per month</span>
</li>
<li class="w3-theme-l5 w3-padding-24">
<button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
</li>
</ul>
</div>

<div class="w3-third w3-margin-bottom">
<ul class="w3-ul w3-border w3-hover-shadow">
<li class="w3-theme">
<p class="w3-xlarge">Premium</p>
</li>
<li class="w3-padding-16"><b>50GB</b> Storage</li>
<li class="w3-padding-16"><b>50</b> Emails</li>
<li class="w3-padding-16"><b>50</b> Domains</li>
<li class="w3-padding-16"><b>Endless</b> Support</li>
<li class="w3-padding-16">
<h2 class="w3-wide"><i class="fa fa-usd"></i> 50</h2>
<span class="w3-opacity">per month</span>
</li>
<li class="w3-theme-l5 w3-padding-24">
<button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
</li>
</ul>
</div>
-->
</div>

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
<div class="w3-row">
<div class="w3-col m5">
<div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Email to Fact Check</span></div>
<h5>FactCheck.org is one of the famous fact checking web sites</h5>
<p> Write a question to them and they will answer it.</p>
</div>
<div class="w3-col m7">
<form class="w3-container w3-card-4 w3-padding-16 w3-white" action = "mailto: Editor@FactCheck.org" method = "post">
<p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"> Click Send button to email to the organization</i><button type="submit" class="w3-button w3-right w3-theme">Send</button></p>
</form>
</div>
</div>
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
<p>Reference by: newsapi.org, W3 school, starigniter.com</p>

<div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
<span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>
<a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
<i class="fa fa-chevron-circle-up"></i></span></a>
</div>
</footer>

<script>
// Script for side navigation
function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "300px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}

// Close side navigation
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>

