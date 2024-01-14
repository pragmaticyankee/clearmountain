<?php 



session_start();



?>







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">



<head>



<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />







<!-- 



################################ DO NOT REMOVE ################################







WEB TEMPLATE CREATED BY IRON SPIDER - http://www.ironspider.ca/



COPYRIGHT © Robert Darrell 2008 - All rights reserved.







THE DISTRIBUTION, SALE OR LEASE OF THIS WEB TEMPLATE



AND/OR THE ASSOCIATED BACKGROUND IMAGES IS STRICTLY PROHIBITED.







################################ DO NOT REMOVE ################################



-->











<title>Clear Mountain Zen Center</title>







<META http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">



<meta name="keywords" content="zen, Buddhism, Montclair, zendo, zazen, meditation, Clear Mountain" />



<meta name="description" content="The Clear Mountain Zen Center of Montclair, New Jersey" />







<!--



<script>



//test of javascr localstorage







//var y=0;



//var date=new Date();



//var x1=date.getFullYear();



//var x2=date.getMonth();







//y=Number(x1)*100 + Number(x2);







//if (!(localStorage.pagecounta))



// {



// localStorage.pagecounta=0;



// }







//if (!(localStorage.ycounta))



//{



//localStorage.ycounta=y;



//}







//if (y>Number(localStorage.ycounta))



//{



//localStorage.ycounta=y;



//localStorage.pagecounta=0;



//}







//localStorage.pagecounta=Number(localStorage.pagecounta) +1;



</script>



-->















<link rel="stylesheet" type="text/css" href="main.css">



<style type="text/css">



.temp1 A:link {text-decoration: none; font-size:24px; color:#996633; font-family: verdana, arial;}



.temp1 a:hover {color:#ff9900;}



.temp1 a:active {color:#ff9900;}



</style>







</head>







<body>







<?php







$mono = date("m");



$monoi = (int)$mono;







$yrno = date("Y");



$yrnoi = ((int)$yrno)*100;







$dateix = $monoi + $yrnoi;







$filename = "athismo.txt";



$fil = fopen($filename,r);



$dat = fread($fil, filesize($filename));



fclose($fil);







$filename2 = "amodate.txt";



$fil2 = fopen($filename2,r);



$dat2 = fread($fil2, filesize($filename2));



fclose($fil2);







$filename3 = "alastmo.txt";



$fil3 = fopen($filename3,r);



$dat3 = fread($fil3, filesize($filename3));



fclose($fil3);







if( isset( $_SESSION["counter"] ) ) {



$_SESSION["counter"] += 1;



} else {







$_SESSION["counter"] = 1;



$fil = fopen($filename,w);







if($dateix > $dat2)



{







$fil2 = fopen($filename2,w);



fwrite($fil2, $dateix);



fclose($fil2);



$fil3 = fopen($filename3,w);



fwrite($fil3, $dat);



fclose($fil3);



$dat=1;



}



else



{



$dat+=1;



}







fwrite($fil, $dat);



fclose($fil);



}







?>











<table class="Global">







<!-- next is the big row that will hold the divs for navbar logo, second row for header div -->



<tr><td colspan="3">











<!-- ============ wrap div ============== -->



<div id="wrap">







<div id="CornerL"><img src="leftnav.gif"></div>











<!-- ============ Navbar Menu  div ============== -->



<div id="NavBarMenu">



 















<ul>



<li><a href="index.htm">home</a></li>











<li><a href="aboutzen.htm">about Zen</a>



<ul> 



<li><a href="aboutzen.htm">Sangha Reflections</a></li>



<li><a href="aboutzen2.htm">A Living Heritage</a></li>



<li><a href="defs.htm">Word Glossary</a></li>







</ul></li>







<li><a href="aboutus.htm">about us</a>



<ul> 



<li><a href="aboutus.htm">Our Sangha</a></li>



<li><a href="aboutus2.htm">Our Teachers</a></li>



<li><a href="tribute.htm">In Memorium</a></li>



<li><a href="photos.htm">Photos</a></li>



</ul></li>











<li><a href="aboutprac.htm">about our practice</a></li>







<li><a href="resources.htm">resources, audio</a>



<ul>


<li><a href="resources.htm">Chants</a></li>


<li><a href="audio.htm">Audio Dharma Talks</a></li>


<li><a href="links.htm">Links</a></li>



</ul></li>











<li><a href="sked.htm">events and directions</a>



<ul> 



<li><a href="sked.htm">Schedule, Directions</a></li>



<li><a href="sked2.htm">Special Events</a></li>



<li><a href="calendar.htm">Calendar</a></li>



</ul></li>















<li><a href="contact.htm">contact us</a></li>



</ul>











</div>







<!-- ========= end of NavBarMenu ====== -->











<div id="CornerR"><img src="rightnav.gif"></div>











</div>







<!-- ======= end of wrap div ===== -->



</td></tr>











<!--  ======== Header row ================ -->



<tr><td colspan="3">















<!-- ============ Header section  div ============== -->



<div id="Header">







<!-- ============ Logo controlled by css Header class ============== -->



<a href="index.htm" title="Welcome!"><img src="Header.jpg"></a></div>







<!-- === end of second big row in main table -->



</td></tr>







<!-- ============ COLUMNS SECTION  3 col arrangement ============== -->







<!-- ============ Left Column ============== -->



<tr><td class="Left" width="25">







</td>







<!-- ============ Content Column (Middle) ============== -->



<td class="Content Padded" width="76%" style="border-right: 2px dotted gray;">







<!-- ============ Page Heading ============== -->



<h1 class="HeadingStyle">Dharma Talks From Clear Mountain</h1>







<!-- ============ Begin Content ============== -->

<br/>



<p class="SubStyle">May 28, 2023 -- Becoming Life and Death<br/>Sensei Carl Bachman</p>

<p class="ptxt"><a href="./audio/Carl_5_28_23.MP3">Download</a></br>
Play: <br/>

<audio controls preload="none" style=" width:400px; height:32px;background-color:yellowgreen; border: 3px solid yellowgreen;"> <source src="https://www.clearmountainzen.org/audio/Carl_5_28_23.MP3"   type="audio/mpeg"> Your browser does not support the audio element. </audio>

<br/>&nbsp;

</p>

<p class="SubStyle">May 21, 2023 -- The Sound Keeps Coming Out Of The Flowers<br/>Sensei Carl Bachman</p>

<p class="ptxt"><a href="./audio/Carl_5_21_23.MP3">Download</a></br>
Play: <br/>

<audio controls preload="none" style=" width:400px; height:32px;background-color:yellowgreen; border: 3px solid yellowgreen;"> <source src="https://www.clearmountainzen.org/audio/Carl_5_21_23.MP3"   type="audio/mpeg"> Your browser does not support the audio element. </audio>

<br/>&nbsp;

</p>


<p class="SubStyle">April 30, 2023 -- The Great Earth and All Being Find The Way<br/>Wendy Mapes</p>

<p class="ptxt"><a href="./audio/Wendy_4_30_23.MP3">Download</a></br>
Play: <br/>

<audio controls preload="none" style=" width:400px; height:32px;background-color:yellowgreen; border: 3px solid yellowgreen;"> <source src="https://www.clearmountainzen.org/audio/Wendy_4_30_23.MP3"   type="audio/mpeg"> Your browser does not support the audio element. </audio>

<br/>&nbsp;

</p>


<p class="SubStyle">April 16, 2023 -- Haiku Day<br/>Sensei Carl Bachmann</p>

<p class="ptxt"><a href="./audio/Carl_4_16_23.MP3">Download</a></br>
Play: <br/>

<audio controls preload="none" style=" width:400px; height:32px;background-color:yellowgreen; border: 3px solid yellowgreen;"> <source src="https://www.clearmountainzen.org/audio/Carl_4_16_23.MP3"   type="audio/mpeg"> Your browser does not support the audio element. </audio>

<br/>&nbsp;

</p>

<p class="SubStyle">April 2, 2023 -- Hanging Out After The Haiku Workshop<br/>Sensei Carl Bachmann</p>

<p class="ptxt"><a href="./audio/Carl_4_2_23.MP3">Download</a></br>
Play: <br/>

<audio controls preload="none" style=" width:400px; height:32px;background-color:yellowgreen; border: 3px solid yellowgreen;"> <source src="https://www.clearmountainzen.org/audio/Carl_4_2_23.MP3"   type="audio/mpeg"> Your browser does not support the audio element. </audio>

<br/>&nbsp;

</p>

<p class="SubStyle">March 12, 2023 -- Silence Is The Heart of Practice<br/>Sensei Carl Bachmann</p>

<p class="ptxt"><a href="./audio/Carl_3_12_23.MP3">Download</a></br>
Play: <br/>

<audio controls preload="none" style=" width:400px; height:32px;background-color:yellowgreen; border: 3px solid yellowgreen;"> <source src="https://www.clearmountainzen.org/audio/Carl_3_12_23.MP3"   type="audio/mpeg"> Your browser does not support the audio element. </audio>

<br/>&nbsp;

</p>


<p class="SubStyle">February 26, 2023 -- Joy and Delight in Zen Practice<br/>Sensei Carl Bachmann</p>

<p class="ptxt"><a href="./audio/Carl_2_26_23.MP3">Download</a></br>
Play: <br/>

<audio controls preload="none" style=" width:400px; height:32px;background-color:yellowgreen; border: 3px solid yellowgreen;"> <source src="https://www.clearmountainzen.org/audio/Carl_2_26_23.MP3"   type="audio/mpeg"> Your browser does not support the audio element. </audio>

<br/>&nbsp;

</p>

<p class="SubStyle">February 12, 2023 -- Zen Prefers Questions Over Answers<br/>Sensei Carl Bachmann</p>

<p class="ptxt"><a href="./audio/Carl_2_12_23.MP3">Download</a></br>
Play: <br/>

<audio controls preload="none" style=" width:400px; height:32px;background-color:yellowgreen; border: 3px solid yellowgreen;"> <source src="https://www.clearmountainzen.org/audio/Carl_2_12_23.MP3"   type="audio/mpeg"> Your browser does not support the audio element. </audio>

<br/>&nbsp;

</p>

<p class="SubStyle">February 5, 2023 -- Becoming Zazen Completely: Zazen Practices at Clear Mountain<br/>Sensei Carl Bachmann</p>

<p class="ptxt"><a href="./audio/Carl_2_5_23.MP3">Download</a></br>
Play: <br/>

<audio controls preload="none" style=" width:400px; height:32px;background-color:yellowgreen; border: 3px solid yellowgreen;"> <source src="https://www.clearmountainzen.org/audio/Carl_2_5_23.MP3"   type="audio/mpeg"> Your browser does not support the audio element. </audio>

<br/>&nbsp;

</p>

<p class="SubStyle">January 29, 2023 -- Creating The Conditions For Practice<br/>Sensei Carl Bachmann</p>

<p class="ptxt"><a href="./audio/Carl_1_29_23.MP3">Download</a></br>
Play: <br/>

<audio controls preload="none" style=" width:400px; height:32px;background-color:yellowgreen; border: 3px solid yellowgreen;"> <source src="https://www.clearmountainzen.org/audio/Carl_1_29_23.MP3"   type="audio/mpeg"> Your browser does not support the audio element. </audio>

<br/>&nbsp;

</p>


<span class="temp1"><a href="audio2022.htm"> &nbsp; 2022 Dharma Talks</a></br> </br></span>

<span class="temp1"><a href="audio2021.htm"> &nbsp; 2021 Dharma Talks</a></br> </br></span>


<span class="temp1"><a href="audio2020.htm"> &nbsp; 2020 Dharma Talks</a></br> </br></span>



<span class="temp1"><a href="audio2019.htm"> &nbsp; 2019 Dharma Talks</a></br> </br></span>


<span class="temp1"><a href="audio2018.htm"> &nbsp; 2018 Dharma Talks</a></br> </br></span>


<span class="temp1"><a href="audio2017.htm"> &nbsp; 2017 Dharma Talks</a></br> </br></span>


<span class="temp1"><a href="audio2016.htm"> &nbsp; 2016 Dharma Talks</a></br> </br></span>

<span class="temp1"><a href="audio2015.htm"> &nbsp; 2015 Dharma Talks</a></br> </br></span>

<span class="temp1"><a href="audio2014.htm"> &nbsp; 2014 Dharma Talks</a></br> </br></span>

<span class="temp1"><a href="audio2013.htm"> &nbsp; 2013 Dharma Talks</a></br> </br></span> 

<span class="temp1"><a href="audio2012.htm"> &nbsp; 2012 Dharma Talks</a></br> </br></span> 



<!-- alternate code for MP3 player:



<embed src="https://www.clearmountainzen.org/audio/ap.swf" flashvars="audioUrl=https://www.clearmountainzen.org/audio/Teisho_4_22_12.MP3" width="400" height="27" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>



<embed type="application/x-shockwave-flash" wmode="transparent" src="https://www.clearmountainzen.org/audio/ap.swf" flashvars="audioUrl=https://www.clearmountainzen.org/audio/Teisho_4_22_12.MP3" height="27" width="400"></embed>



-->



<p class="ptxt">NOTE: If the talk does not play after clicking on the triangle 'go' button, please refresh the page (push the circled arrow button on top of the browser, or <A HREF="javascript:history.go(0)">Click Here</A>), and try again.











&nbsp;







<!-- ============ End Content ============== -->







<!-- ============ bottom site nav links, in a div box within TD ========== -->



<div class="botnav">



<a href="index.htm">home</a> /&nbsp;



<a href="aboutzen.htm">about Zen</a> /&nbsp; 



<a href="aboutus.htm">about us</a> /&nbsp;



<a href="aboutprac.htm">about our practice</a> /&nbsp; 



<a href="resources.htm">resources and links</a> /&nbsp;



<a href="sked.htm">schedule and directions</a> /&nbsp; 



<a href="contact.htm">contact us</a>



</div>



<!-- ============= end bottom site nav link line ========= -->







</td>







<!-- ============ Right Column ============== -->



<td class="Right rightbox">




<img style="padding-top:10px;" src="./pix/z24.jpg" alt="Teisho">






<br/><br/>



Clear Mountain Zen Center<br>



7 Oak Place<br>





Montclair, NJ 07042



<br/>&nbsp;



<img src="bigo.jpg"><br>







<img style="margin-top:10px;margin-bottom:5px;" src="pplogo.gif"><br>



<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">



<input type="hidden" name="cmd" value="_s-xclick">



<input type="hidden" name="hosted_button_id" value="4UB8XCWE98HN2">



<input type="image" src="btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">



<img alt="" border="0" src="pixel.gif" width="1" height="1">



</form>



<span style="font: 12px Times New Roman;">PLEASE NOTE: Donations to<br> Clear Mountain Zendo <br>are NOT tax-deductible.</span>







</td></tr>







<!-- ============ Footer ============== -->



<tr><td colspan="3" height="25">







<table class="Footer" cellpadding="0" cellspacing="0" border="0"><tr>



<td style="background: none; width: 25px;"><img src="bottom-left.gif" width="25" height="25" alt="bottom-left (1K)"></td>



<td>&copy; Clear Mountain Zen Center &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Design by <a href="http://www.ironspider.ca/freetemplates/index.htm" title="(External link - Opens in a new window.)" target="_blank">Iron Spider</a> &nbsp;&nbsp;&nbsp; Page session stats: &nbsp;<?php echo $dat; ?>&nbsp; this month, and &nbsp;<?php  echo $dat3; ?>&nbsp; last month. 







</td>



<td style="background: none; width: 25px;"><img src="bottom-right.gif" width="25" height="25" alt="bottom-right (1K)"></td></tr></table>







</td></tr></table>



</body>







</html>



