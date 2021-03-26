<! DOCTYPE html>
<html>
<head>
    <title>Home | Prajwal"s Engine</title>
    <meta charset = utf-8 >
    <meta description =Prajwal's New Search Engine >

    <link rel ="stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel ="stylesheet" href ="css/mystyle.css">
</head>
<style>
body{
    background-image: url("bg.jpg");
}

    </style>
<body>
<div>
<form class="navbar-form" method="POST">
<input type="text" placeholder="Enter the URL (without http/https)" name="searchterm" id = "search">
<button type="submit" class="btn btn-primary" id = "Button"><span class="glyphicon glyphicon-search"></span></button>
</div>
<img src="logo.png" alt="logo">
<script>
var button = document.getElementById("Button");

button.onclick = function () {
    var text = document.getElementById("search").value;
    window.open("http://" + text );
}
</script>
<div class = "realsearch">
<input type = "text" onkeyup="myFunction()" placeholder = "Search Anything in Innovative Challenger" id = "myinput"> 
<a href ="#main">
<button type = "submit" class ="btn btn-primary" id = "searchButton"><span class = "glyphicon glyphicon-search"></span>
</a>
</button>
</div>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p><p></p>
<p></p>
<p></p>
<p></p>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div id = "main">
<ul id="myUL">
  <li><a href="http://innovativechallenger.co.in"><img src = "innova.jpg"><h1>Innovative Challenger</h1><h4>innovativechallenger.co.in<h4> <h3>Welcome to the world of space shuttles , Login or Register ! <h3> </a></li>
  <li><a href="http://wilio.in"><img src = "wil.png"><h1>Wilio Web Serices</h1><h4>wilio.in<h4> <h3>One of the Top Webdesign Company of India . The Pricing starts at....<h3> </a></li>
  <li><a href="http://afgji.in"><img src = "afg.png"><h1>Air Force Golden Jubilee Institute (AFGJI)</h1><h4>afgji.in<h4> <h3>One of the top schools in Delhi - Know our School , Admissions ....<h3> </a></li>
  <li><a href="http://microsoft.com"><img src = "mic.jpg"><h1>Microsoft</h1><h4>microsoft.com<h4> <h3>Microsoft Canada , US , India , Australia , France....<h3> </a></li>
  <li><a href="http://bing.com"><img src = "bing.jpg"><h1>Bing</h1><h4>bing.com<h4> <h3>Microsoft's Search Engine - BING !<h3> </a></li>
  <li><a href="http://apple.com"><img src = "app.png"><h1>Apple Inc</h1><h4>apple.com<h4> <h3>Shop the most powerful apple products<h3> </a></li>
  <li><a href="http://isha.sadhguru.org"><img src = "is.jpg"><h1>Isha Sadhguru</h1><h4>isha.sadhguru.org<h4> <h3>Discover the Mystic , Man and the Wisdom of SADHGURU..s<h3> </a></li>
  <li><a href="http://yahoo.com"><img src = "y.jpg"><h1>Yahoo</h1><h4>yahoo.com<h4> <h3>Yahoo - Mail , News , Search Engine and more<h3> </a></li>
  <li><a href="http://quora.com/"><img src = "q.png"><h1>Quora</h1><h4>quora.com<h4> <h3>Ask Questions, Get Answers - Gain Knowledge !<h3> </a></li>
  <li><a href="http://amazon.in"><img src = "a.png"><h1>Amazon</h1><h4>amazon.in<h4> <h3>Shop the deals of the Day now !! Hurry UP !!<h3> </a></li>
  <li><a href="http://gmail.com"><img src = "gm.png"><h1>Gmail</h1><h4>gmail.com<h4> <h3>The High Quality email service provided by Google - GMAIL !<h3> </a></li>
  <li><a href="http://wikipedia.com"><img src = "wi.png"><h1>Wikipedia</h1><h4>en.wikipedia.org<h4> <h3>Share Knowledge Gain knowledge !<h3> </a></li>
  <li><a href="http://youtube.com/"><img src = "yo.jpg"><h1>Youtube</h1><h4>youtube.com<h4> <h3>Youtube is world's most used video viewing software by google !<h3> </a></li>
  <li><a href="http://pinterst.com"><img src = "p.jpg"><h1>Pinterest</h1><h4>pinterest.com<h4> <h3>Discover Designs , Innovations and more..<h3> </a></li>
  <li><a href="http://shawacademy.com"><img src = "shaw.png"><h1>Shaw Academy</h1><h4>shawacademy.com<h4> <h3>High quality professional education in all the fields !<h3> </a></li>
 

  <li><a href="http://artofliving.org"><img src = "aol.jpg"><h1>Art Of Living</h1><h4>artofliving.org<h4> <h3>Get the wisdom from Sri Sri Ravi Shankar!<h3> </a></li>
  <li><a href="http://raspberrypi.org"><img src = "rs.jpg"><h1>Raspberry Pi</h1><h4>raspberrypi.org<h4> <h3>Welcome to the world of space shuttles , Login or Register !<h3> </a></li>
  <li><a href="http://flipcart.com"><img src = "fl.jpg"><h1>Flipkart</h1><h4>flipkart.com<h4> <h3>Shop the cheapest items ever..but for a limited time , Hurry UP !<h3> </a></li>
  <li><a href="http://nokia.com"><img src = "nok.jpg"><h1>Nokia</h1><h4>nokia.com<h4> <h3>Discover the great range of Perfect Quality NOKIA Products . <h3> </a></li>
  <li><a href="http://fastrack.im"><img src = "fastt=.jpg"><h1>Fastrack</h1><h4>fastrack.in<h4> <h3>Discover the stylish products by the biggest brand - FASTRACK<h3> </a></li>
  <li><a href="http://boat-lifestyle.com"><img src = "boat.png"><h1>Boat</h1><h4>boat-lifestyle.com<h4> <h3>Enjoy the high quality sound in your ears and much more !<h3> </a></li>
  <li><a href="http://outlook.com/"><img src = "mo.png"><h1>Microsoft Outlook</h1><h4>outlook.com<h4> <h3>The Best Quality Mailing software provided by Microsoft<h3> </a></li>
  <li><a href="http://meet.google.com/"><img src = "gmm.png"><h1>Google Meet</h1><h4>meet.google.com<h4> <h3>Premium meetings of Google , free for everyone !<h3> </a></li>
  <li><a href="http://office.com"><img src = "of.jpg"><h1>Microsoft Office 365</h1><h4>office.com<h4> <h3>Enjoy the all the premium apps and 1TB storage together ...MICROSOFT 365!<h3> </a></li>
  
 
</ul>
</div>
<script>
function myFunction() { 
    let input = document.getElementById('myinput').value 
    input=input.toLowerCase(); 
    let x = document.getElementsByTagName('li'); 
      
    for (i = 0; i < x.length; i++) {  
        if (!x[i].innerHTML.toLowerCase().includes(input)) { 
            x[i].style.display="none"; 
        } 
        else { 
            x[i].style.display="list-item";                  
        } 
    } 
}
</script>
<html>
<body>

            