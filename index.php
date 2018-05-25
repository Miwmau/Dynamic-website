<?php
	session_start();
	if($_SESSION['id'] == ''){
		header("Location:login.php");
	}
?>
<html>
<title>Jollytraveller</title>
<head><link type="text/css" rel="stylesheet" href="jollystyle.css"/>
</head>
<body>
<div id="header">
<div id="menu"> 
<ul>
<li>
    <a href=index.php>
      <img src="plane.png" height="50" width="50" align="center">
    </a>
</li>
<li><a href="home.html">HOME</a></li>
<li><a href="about.html">ABOUT</a></li>
<li><a href="photoblog.html">PHOTO BLOG</a></li>
<li><a href=settings.php>SETTINGS</a></li>
<li><a href="logout.php">LOG OUT</a></li>
</ul></div>

<br><br><br><br><br>
<div id="page">

<br><br><br>
<div id="h1">Exist . Explore . Experience </div>

<ul><ul>
<div id="centerpic"></div>

<br><br>
<div id="quotation">"To travel is to live"- Hans Christian Andersen <br><br>
</div>

<div id="p"> 
We are living in such a beautiful creation. It deserves
to be known, to be seen and to be appreciated.
<br><br>
Nowadays, in a fast-paced life, people tend to just 
breathe and not actually live. They wake up, eat, work,
study, sleep and the same routine goes on and on until
they ran out of time to realize how it really is to live. 
<br><br>
Traveling allows you to strengthen your connection
with the world and its people. Getting to know the locals
from various countries will widen one's knowledge of
the different culture, languages, history, beliefs, traditions and
my favorite, cuisine.
</div>

</div>
</body>
</html>
